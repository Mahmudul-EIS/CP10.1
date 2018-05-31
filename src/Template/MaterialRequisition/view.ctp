<div class="trf-reporting-section">
    <div class="container">
        <div class="row">
            <div class="trf-title text-uppercase text-center">MR Single Report</div>
            <h3 class="title">Meterial Requisition Information</h3>
            <!-- trf number 1 -->
            <div class="clearfix">
                <div class="col-sm-6 col-xs-12">
                    <div class="trf-step">
                    	<div class="row">
	                        <div class="col-sm-6 col-xs-6">
	                            <span><b>No :</b></span>
	                        </div>
	                        <div class="col-sm-6 col-xs-6">
	                            <span><?= $this->Number->format($materialRequisition->id) ?></span>
	                        </div>
                        </div>


 			<div class="row">
	                        <div class="col-sm-6 col-xs-6">
	                            <span><b>Date Issued:</b></span>
	                        </div>
	                        <div class="col-sm-6 col-xs-6">
	                            <span><?= h($materialRequisition->date_issue) ?></span>
	                        </div>
                        </div>


			<div class="row">
	                        <div class="col-sm-6 col-xs-6">
	                            <span><b>MR No :</b></span>
	                        </div>
	                        <div class="col-sm-6 col-xs-6">
	                            <span><?= h($materialRequisition->mr_no) ?></span>
	                        </div>
                        </div>


			<div class="row">
	                        <div class="col-sm-6 col-xs-6">
	                            <span><b>CCAR No :</b></span>
	                        </div>
	                        <div class="col-sm-6 col-xs-6">
	                            <span><?= h($materialRequisition->ccar_no) ?></span>
	                        </div>
                        </div>

                    </div>
                </div><!-- trf number 1 -->

                <!-- trf number 2 -->
                <div class="col-sm-6 col-xs-12">
                    <div class="trf-step">
                   	<div class="row">
	                        <div class="col-sm-6 col-xs-6">
	                            <span><b>Section :</b></span>
	                        </div>
	                        <div class="col-sm-6 col-xs-6">
	                            <span><?= h($materialRequisition->sect) ?></span>
	                        </div>
                        </div>

			<div class="row">
	                        <div class="col-sm-6 col-xs-6">
	                            <span><b>Department :</b></span>
	                        </div>
	                        <div class="col-sm-6 col-xs-6">
	                            <span><?= h($materialRequisition->dept) ?></span>
	                        </div>
                        </div>

			<div class="row">
	                        <div class="col-sm-6 col-xs-6">
	                            <span><b>Approval :</b></span>
	                        </div>
	                        <div class="col-sm-6 col-xs-6">
	                            <span><?= h($materialRequisition->approve) ?></span>
	                        </div>
                        </div>

			<div class="row">
	                        <div class="col-sm-6 col-xs-6">
	                            <span><b>Status :</b></span>
	                        </div>
	                        <div class="col-sm-6 col-xs-6">
	                            <span><?= h($materialRequisition->stat) ?></span>
	                        </div>
                        </div>
                    </div>
                </div><!-- trf number 2 -->
            </div>

            <h3 class="title">Meterial Requisition Information-2</h3>

            <!-- trf number 3 -->
            <div class="col-sm-6 col-xs-12">
                <div class="trf-step">
		   <div class="row">
	                    <div class="col-sm-6 col-xs-6">
	                        <span><b>Job :</b></span>
	                    </div>
	                    <div class="col-sm-6 col-xs-6">
	                        <span><?= h($materialRequisition->job) ?></span>
	                    </div>
                    </div>
                    
		   <div class="row">
	                    <div class="col-sm-6 col-xs-6">
	                        <span><b>Document :</b></span>
	                    </div>
	                    <div class="col-sm-6 col-xs-6">
	                        <span><?= h($materialRequisition->docs) ?></span>
	                    </div>
                    </div>
                    
		    <div class="row">
	                    <div class="col-sm-6 col-xs-6">
	                        <span><b>Remarks :</b></span>
	                    </div>
	                    <div class="col-sm-6 col-xs-6">
	                        <span><?= h($materialRequisition->remarks) ?></span>
	                    </div>
                    </div>
                </div>
            </div><!-- trf number 3 -->

        </div>
    </div>
</div>