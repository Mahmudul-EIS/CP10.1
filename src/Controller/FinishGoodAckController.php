<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FinishGoodAck Controller
 *
 * @property \App\Model\Table\FinishGoodAckTable $FinishGoodAck
 */
class FinishGoodAckController extends AppController
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
        $this->render('report');
    }

}
