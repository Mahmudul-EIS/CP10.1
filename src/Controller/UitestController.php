<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Uitest Controller
 *
 * @property \App\Model\Table\UitestTable $Uitest
 */
class UitestController extends AppController
{

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
        $uitest = $this->paginate($this->Uitest);

        $this->set(compact('uitest'));
        $this->set('_serialize', ['uitest']);
    }

    public function add()
    {
        $uitest = $this->Uitest->newEntity();
        if ($this->request->is('post')) {
            $postData['part_no'] = $this->request->data['part_no'];
            $postData['part_name'] = $this->request->data['part_no'];
            $postData['zon'] = $this->request->data['zon'];
            $postData['rack'] = $this->request->data['rack'];
            $postData['bn'] = $this->request->data['bn'];
            $postData['product_level'] = $this->request->data['product_level'];
            $postData['uom'] = $this->request->data['uom'];
            $postData['part_no'] = $this->request->data['min_stock'];
            $postData['part_no'] = $this->request->data['max_stock'];
            $uitest = $this->Uitest->patchEntity($uitest, $postData);
            if ($this->Uitest->save($uitest)) {
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product could not be saved. Please, try again.'));
        }
        $this->set(compact('uitest'));
        $this->set('_serialize', ['uitest']);
    }

}
