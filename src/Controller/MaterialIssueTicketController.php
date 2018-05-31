<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * MaterialIssueTicket Controller
 *
 * @property \App\Model\Table\MaterialIssueTicketTable $MaterialIssueTicket
 */
class MaterialIssueTicketController extends AppController
{

    public $paginate = [
        // Other keys here.
        'maxLimit' => 50
    ];

    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->layout('frontend');
    }

    public function add(){
        $this->set('prepared_by', $this->Auth->user('username'));
    }

    public function report(){
        $materialIssueTicket = $this->paginate($this->MaterialIssueTicket);

        $this->set(compact('materialIssueTicket'));
        $this->set('_serialize', ['materialIssueTicket']);
    }

    public function addItems(){
        $materialIssueTicket = $this->MaterialIssueTicket->newEntity();
        if ($this->request->is('post')) {
            $materialIssueTicket = $this->MaterialIssueTicket->patchEntity($materialIssueTicket, $this->request->data);
            if ($this->MaterialIssueTicket->save($materialIssueTicket)) {
                $this->Flash->success(__('The material issue ticket has been saved.'));

                return $this->redirect(['action' => 'report']);
            }
            $this->Flash->error(__('The material issue ticket could not be saved. Please, try again.'));
        }
        $this->set(compact('materialIssueTicket'));
        $this->set('_serialize', ['materialIssueTicket']);
    }

    public function view($id){
        $materialIssueTicket = $this->MaterialIssueTicket->get($id, [
            'contain' => []
        ]);

        $this->set('materialIssueTicket', $materialIssueTicket);
        $this->set('_serialize', ['materialIssueTicket']);
    }

    public function requested(){
        $mit = $this->MaterialIssueTicket->find('all')
            ->where(['stat' => 'pending']);
        $this->set(compact('mit'));
        $this->set('_serialize', ['mit']);
    }

    public function approve($id = null){
        $mit = $this->MaterialIssueTicket->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mit = $this->MaterialIssueTicket->patchEntity($mit, $this->request->data);
            if ($this->MaterialIssueTicket->save($mit)) {
                $this->Flash->success(__('The pending request has been processed.'));

                return $this->redirect(['action' => 'requested']);
            }
            $this->Flash->error(__('The pending request could not be processed. Please, try again.'));
        }
        $this->set(compact('mit'));
        $this->set('_serialize', ['mit']);
        $this->set('pic', $this->Auth->user('username'));
    }

}
