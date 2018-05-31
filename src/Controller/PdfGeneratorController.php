<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PdfGenerator Controller
 *
 * @property \App\Model\Table\PdfGeneratorTable $PdfGenerator
 */
class PdfGeneratorController extends AppController
{

    public function viewPdf($schedule_id = null){
        $this->viewBuilder()->layout('ajax');
        $this->set('title', 'Testing PDF');
        $this->set('file_name', 'my_pdf.pdf');
        $this->response->type('pdf');
    }

}
