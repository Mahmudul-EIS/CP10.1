<div class="trf-reporting-section">
    <div class="container">
        <div class="row">
            <div class="trf-title text-uppercase text-center">Transport Requisition Form Single Report</div>

            <h3 class="title">Transport Requisition form Information</h3>
            <!-- trf number 1 -->
            <div class="clearfix">
                <div class="col-sm-6 col-xs-12">
                    <div class="trf-step">
                       <div class="row">
	                        <div class="col-sm-6 col-xs-6 ">
	                            <span><b>No :</b></span>
	                        </div>
	                        <div class="col-sm-6  col-xs-6 ">
	                            <span><?= $this->Number->format($logisticFinishGood->id) ?></span>
	                        </div>
                        </div>


                        <div class="row">
	                        <div class="col-sm-6  col-xs-6 ">
	                            <span><b>Delivery date :</b></span>
	                        </div>
	                        <div class="col-sm-6  col-xs-6">
	                            <span><?= h($logisticFinishGood->del_date) ?></span>
	                        </div>
                        </div>


                        <div class="row">
	                        <div class="col-sm-6  col-xs-6">
	                            <span><b>Do No :</b></span>
	                        </div>
	                        <div class="col-sm-6  col-xs-6">
	                            <span><?= h($logisticFinishGood->del_order_no) ?></span>
	                        </div>
                        </div>


                        <div class="row">
	                        <div class="col-sm-6  col-xs-6">
	                            <span><b>Customer No :</b></span>
	                        </div>
	                        <div class="col-sm-6  col-xs-6">
	                            <span><?= h($logisticFinishGood->customer) ?></span>
	                        </div>
                        </div>

                    </div>
                </div><!-- trf number 1 -->

                <!-- trf number 2 -->
                <div class="col-sm-6 col-xs-12">
                    <div class="trf-step">
                   	 <div class="row">
	                        <div class="col-sm-6  col-xs-6">
	                            <span><b>PIC :</b></span>
	                        </div>
	                        <div class="col-sm-6 col-xs-6">
	                            <span><?= h($logisticFinishGood->pic_store) ?></span>
	                        </div>
                        </div>

			<div class="row">
	                        <div class="col-sm-6  col-xs-6">
	                            <span><b>Destination :</b></span>
	                        </div>
	                        <div class="col-sm-6  col-xs-6">
	                            <span><?= h($logisticFinishGood->dest) ?></span>
	                        </div>
                        </div>

			<div class="row">
	                        <div class="col-sm-6  col-xs-6">
	                            <span><b>Address :</b></span>
	                        </div>
	                        <div class="col-sm-6  col-xs-6">
	                            <span><?= h($logisticFinishGood->address) ?></span>
	                        </div>
                        </div>

			<div class="row">
	                        <div class="col-sm-6  col-xs-6">
	                            <span><b>Collection date :</b></span>
	                        </div>
	                        <div class="col-sm-6 col-xs-6">
	                            <span><?= h($logisticFinishGood->coll_date) ?></span>
	                        </div>
                        </div>
                    </div>
                </div><!-- trf number 2 -->
            </div>

            <h3 class="title">Transport Requisition form Information-2</h3>

            <!-- trf number 3 -->
            <div class="col-sm-6  col-xs-12">
                <div class="trf-step">
                    <div class="row">
	                    <div class="col-sm-6  col-xs-6">
	                        <span><b>Collection From :</b></span>
	                    </div>
	                    <div class="col-sm-6  col-xs-6">
	                        <span><?= h($logisticFinishGood->coll_form) ?></span>
	                    </div>
                    </div>

                    <div class="row">
	                    <div class="col-sm-6  col-xs-6">
	                        <span><b>Qty :</b></span>
	                    </div>
	                    <div class="col-sm-6 col-xs-6">
	                        <span><?= h($logisticFinishGood->quantity) ?></span>
	                    </div>
                    </div>

                    <div class="row">
	                    <div class="col-sm-6  col-xs-6">
	                        <span><b>Product Name :</b></span>
	                    </div>
	                    <div class="col-sm-6 col-xs-6">
	                        <span><?= h($logisticFinishGood->part_name) ?></span>
	                    </div>
                    </div>

                    <div class="row">
	                    <div class="col-sm-6  col-xs-6">
	                        <span><b>Driver's Name :</b></span>
	                    </div>
	                    <div class="col-sm-6 col-xs-6">
	                        <span><?= h($logisticFinishGood->driver_name) ?></span>
	                    </div>
                    </div>
                    
                    <div class="row">
	                    <div class="col-sm-6  col-xs-6">
	                        <span><b>Driver's Contact No :</b></span>
	                    </div>
	                    <div class="col-sm-6 col-xs-6">
	                        <span><?= h($logisticFinishGood->driver_contact_no) ?></span>
	                    </div>
                    </div>

                    <div class="row">
	                    <div class="col-sm-6  col-xs-6">
	                        <span><b>Plat No :</b></span>
	                    </div>
	                    <div class="col-sm-6  col-xs-6">
	                        <span><?= h($logisticFinishGood->plat_no) ?></span>
	                    </div>
                    </div>
                </div>
            </div><!-- trf number 3 -->

            <!-- trf number 4 -->
            <div class="col-sm-6 col-xs-12">
                <div class="trf-step">
                 
                    <div class="row">
	                    <div class="col-sm-6  col-xs-6">
	                        <span><b> Consignment No :</b></span>
	                    </div>
	                    <div class="col-sm-6  col-xs-6">
	                        <span><?= h($logisticFinishGood->consaignment_no) ?></span>
	                    </div>
                    </div>

                    <div class="row">
	                    <div class="col-sm-6  col-xs-6">
	                        <span><b>Transport Type :</b></span>
	                    </div>
	                    <div class="col-sm-6  col-xs-6">
	                        <span><?= h($logisticFinishGood->vehicle) ?></span>
	                    </div>
                    </div>
                    
                    <div class="row">
	                    <div class="col-sm-6  col-xs-6">
	                        <span><b>Crane :</b></span>
	                    </div>
	                    <div class="col-sm-6  col-xs-6">
	                        <span><?= h($logisticFinishGood->crane) ?></span>
	                    </div>
                    </div>
                    
                    <div class="row">
	                    <div class="col-sm-6  col-xs-6">
	                        <span><b>Remarks :</b></span>
	                    </div>
	                    <div class="col-sm-6  col-xs-6">
	                        <span><?= h($logisticFinishGood->remarks) ?></span>
	                    </div>
                    </div>
                </div>
            </div><!-- trf number 4 -->
        </div>
    </div>
</div>