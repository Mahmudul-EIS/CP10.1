<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Api Controller
 *
 * @property \App\Model\Table\ApiTable $Api
 *
 * @method \App\Model\Entity\Api[] paginate($object = null, array $settings = [])
 */
class ApiController extends AppController
{

    public function pm(){
        if ($this->request->is('post')) {
        $this->autoRender = false;
        $this->loadModel('ProductMasterlist');
        $result = new \stdClass();
        $pml = $this->ProductMasterlist->find('all')
        ->where(['part_name' => $this->request->data('part_name')])
                ->where(['part_no' => $this->request->data('part_no')]);
                foreach($pml as $p){
                    $result->min_stock = $p->min_stock;
                }
        echo json_encode($result, JSON_PRETTY_PRINT);
        die();
        }
    }
    

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['pm']);
    }

}
