<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ProductMasterlist Controller
 *
 * @property \App\Model\Table\ProductMasterlistTable $ProductMasterlist
 */
class ProductMasterlistController extends AppController
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
        $productMasterlist = $this->paginate($this->ProductMasterlist);

        $this->set(compact('productMasterlist'));
        $this->set('_serialize', ['productMasterlist']);
    }

    /**
     * View method
     *
     * @param string|null $id Product Masterlist id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $productMasterlist = $this->ProductMasterlist->get($id, [
            'contain' => []
        ]);

        $this->set('productMasterlist', $productMasterlist);
        $this->set('_serialize', ['productMasterlist']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $productMasterlist = $this->ProductMasterlist->newEntity();
        if ($this->request->is('post')) {
            $productMasterlist = $this->ProductMasterlist->patchEntity($productMasterlist, $this->request->data);
            if ($this->ProductMasterlist->save($productMasterlist)) {
                $this->Flash->success(__('The product masterlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            if($productMasterlist->errors()){
                $error_msg = [];
                foreach( $productMasterlist->errors() as $errors){
                    if(is_array($errors)){
                        foreach($errors as $error){
                            $error_msg[]    =   $error;
                        }
                    }else{
                        $error_msg[]    =   $errors;
                    }
                }

                if(!empty($error_msg)){
                    $this->Flash->error(
                        __("Data could not be saved. Please fix the following error(s):".implode("\n \r", $error_msg))
                    );
                }
            }
        }
        $this->set(compact('productMasterlist'));
        $this->set('_serialize', ['productMasterlist']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product Masterlist id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $productMasterlist = $this->ProductMasterlist->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $productMasterlist = $this->ProductMasterlist->patchEntity($productMasterlist, $this->request->data);
            if ($this->ProductMasterlist->save($productMasterlist)) {
                $this->Flash->success(__('The product masterlist has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The product masterlist could not be saved. Please, try again.'));
        }
        $this->set(compact('productMasterlist'));
        $this->set('_serialize', ['productMasterlist']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product Masterlist id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $productMasterlist = $this->ProductMasterlist->get($id);
        if ($this->ProductMasterlist->delete($productMasterlist)) {
            $this->Flash->success(__('The product masterlist has been deleted.'));
        } else {
            $this->Flash->error(__('The product masterlist could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function autocode(){

        $productMasterlist = $this->paginate($this->ProductMasterlist);
        $part_no = $part_name = null;
        foreach($productMasterlist as $pm){
            $part_no .= '{label:"'.$pm->part_no.'",idx:"'.$pm->part_name.'"},';
            $part_name .= '{label:"'.$pm->part_name.'",idx:"'.$pm->part_no.'"},';
        }
        $part_no = rtrim($part_no, ',');
        $part_name = rtrim($part_name, ',');

        $this->set(compact('productMasterlist'));
        $this->set('_serialize', ['productMasterlist']);
        $this->set('part_no', $part_no);
        $this->set('part_name', $part_name);

    }

    public function fetch(){
        $this->autoRender = false;
        $this->viewBuilder()->layout('ajax');
        $requestKey = null;
        if($this->request->is('ajax')){
            foreach($this->request->data as $key => $value){
                $requestKey = $key;
            }
            //echo $requestKey;
            //print_r(debug($this->request->data));
            $query = $this->ProductMasterlist->find()
                ->where([$requestKey => $this->request->data[$requestKey]]);
            $query = $this->paginate($query);
            foreach($query as $val){
                if($requestKey == 'part_no'){
                    echo $val->part_name;
                }
                if($requestKey == 'part_name'){
                    echo $val->part_no;
                }
            }
        }
    }

}
