<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InventoryReports Controller
 *
 * @property \App\Model\Table\InventoryReportsTable $InventoryReports
 */
class InventoryReportsController extends AppController
{

    public function initialize(){
        parent::initialize();
        $this->viewBuilder()->layout('frontend');
    }

    public function report(){
        $this->render('report');
    }

}
