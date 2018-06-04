<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Inventory Controller
 *
 * @property \App\Model\Table\InventoryTable $Inventory
 */
class InventoryController extends AppController
{

    public $paginate = [
        // Other keys here.
        'maxLimit' => 50
    ];

    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->layout('frontend');
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->loadModel('ProductMasterlist');
        $inventory = $this->paginate($this->ProductMasterlist);

        $this->set(compact('inventory'));
        $this->set('_serialize', ['inventory']);
    }
    public function add() {
        if ($this->request->is('post')) {
            $this->loadModel('ManualStocks');

            $this->request->data['pic'] = $this->Auth->user('username');
            $manual = $this->ManualStocks->newEntity($this->request->data);
            if ($this->ManualStocks->save($manual)) {
                $this->Flash->success(__('Stock manually has been saved.'));
                return $this->redirect(['action' => 'view']);
            }
        }

        $this->loadModel('ProductMasterlist');
        $productMasterlist = $this->paginate($this->ProductMasterlist);
        $part_no = $part_name = null;
        foreach($productMasterlist as $pm){
            $part_no .= '{label:"'.$pm->part_no.'",idx:"'.$pm->part_name.'"},';
            $part_name .= '{label:"'.$pm->part_name.'",idx:"'.$pm->part_no.'"},';
        }
        $part_no = rtrim($part_no, ',');
        $part_name = rtrim($part_name, ',');
        $this->set('part_no', $part_no);
        $this->set('part_name', $part_name);
    }

    public function view() {
        $this->loadModel('ManualStocks');

        $stocks = $this->paginate($this->ManualStocks);
        $this->set('stocks', $stocks);
    }

    public function getCurrentBalance($partNo) {
        $this->loadModel('InStockCode');
        $sum = $this->InStockCode->find('all', [
            'conditions' => [
                'part_no' => $partNo
            ]
        ])->toArray();

        $qty = 0;
        foreach ($sum as $sm) {
            $qty += (is_numeric($sm->quantity) ? $sm->quantity : 0);
        }

        echo $qty;
        exit;
    }

}
