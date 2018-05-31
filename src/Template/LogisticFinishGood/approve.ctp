<div class="product-list">
    <div class="container-fluid sm-fluid">
        <div class="row">
            <div class="all-list-item clearfix">
                <div class="list-item-title clearfix">
                    <div class="col-sm-6 padding-zero br-border text-center">
                        <h2 class="text-cl bg-cl">Indkom engineering Sdn Bhd</h2>
                    </div>
                    <div class="col-sm-6 padding-zero text-center">
                        <h2 class="text-cl bg-cl">Transport Requisition Form</h2>
                    </div>
                </div>
                <div class="no-genareted"><h3>No : <span>7632</span></h3></div>
                <div class="product-details clearfix">
                    <h2 class="text-cl tfrom transport"><b>Shipment Details</b></h2>
                    <div class="col-sm-6 clearfix">
                        <form action="#">
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="customer">Customer <span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->customer) ?>" type="text" class="form-control fright-input" id="customer" data-validation="required">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="pic-contact">PIC Contact <span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->pic_contact) ?>" type="text" class="form-control fright-input" id="pic-contact" data-validation="required">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="destination">Destination <span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->dest) ?>" type="text" class="form-control fright-input" id="destination" data-validation="required">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="address">Address <span class="fright">:</span></label>
                                <textarea disabled name="" class="form-control fright-input" id="address" cols="20" rows="6" data-validation="required"><?= h($lfg->address) ?></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-offset-1 col-sm-5 clearfix">
                        <form action="#">
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="d-date">Delivery Date <span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->del_date) ?>" type="text" class="datepicker-f form-control fright-input" id="d-date" name="date6" data-validation="required"/>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="de-order">Delivery Order No <span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->del_order_no) ?>" type="text" class="form-control fright-input" id="de-order" data-validation="required">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="col-date">Collection Date <span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->coll_date) ?>" type="text" class="datepicker-f form-control fright-input" id="d-date" name="date6" data-validation="required"/>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="col-time">Collection time <span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->coll_time) ?>" type="text" class="timepicker-f form-control fright-input" id="col-time" name="time1" data-validation="required">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="col-form">Collection Form <span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->coll_form) ?>" type="text" class="form-control fright-input" id="col-form" data-validation="required">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="product-details clearfix">
                    <h2 class="text-cl tfrom transport"><b>Products Details</b></h2>
                    <div class="col-sm-6">
                        <form action="#">
                            <div class="form-group clearfix">
                                <label class="fleft-label fleft-label-transport " for="col-form">Model<span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->model) ?>" type="text" class="form-control fright-input" id="col-form" data-validation="required">
                            </div>
                            <div class="form-group clearfix">
                                <label class="fleft-label fleft-label-transport " for="quan-form">Part name <span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->part_name) ?>" type="text" class="form-control fright-input" id="quan-form" data-validation="required">
                            </div>
                            <div class="form-group clearfix">
                                <label class="fleft-label fleft-label-transport " for="part-form">Quantity <span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->quantity) ?>" type="text" class="form-control fright-input" id="part-form" data-validation="required">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="product-details clearfix">
                    <h2 class="text-cl tfrom transport"><b>Requisition Details</b></h2>
                    <div class="col-sm-6 clearfix">
                        <form action="#">
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="d-name">Driver's Name <span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->driver_name) ?>" type="text" class="form-control fright-input" id="d-name" data-validation="required">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="dr-contact">Driver's Contact No<span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->driver_contact_no) ?>" type="text" class="form-control fright-input" id="dr-contact" data-validation="required">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="plat-no">Plat No <span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->plat_no) ?>" type="text" class="form-control fright-input" id="plat-no" data-validation="required">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="cos-no">Consaingment No <span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->consaignment_no) ?>" type="text" class="form-control fright-input" id="cos-no" data-validation="required">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-offset-1 col-sm-5 clearfix">
                        <form action="#">
                            <div class="checkbox-lory">
                                <label class="fleft-label fleft-label-transport " for="vehicle">Vehicle <span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->vehicle) ?>" type="text" class="form-control fright-input" id="vehicle">
                            </div>
                            <div class="checkbox-lory">
                                <label class="fleft-label fleft-label-transport " for="crane">Crane <span class="fright">:</span></label>
                                <input disabled value="<?= h($lfg->crane) ?>" type="text" class="form-control fright-input" id="crane">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="preparetion-trasition clearfix">
                    <div class="col-sm-6 col-sm-offset-6 ">
                        <div class="prepared-by-item">
                            <h2>Prepared by</h2>
                            <h3 class="author-name"><b><?= h($lfg->prepared_by) ?></b></h3>
                            <div class="logistic-office">
                                <p>( Logistic officer )</p>
                            </div>
                        </div>
                        <div class="prepared-by-item">
                            <h2>Checked by</h2>
                            <h3 class="author-name"><b>Checked</b></h3>
                            <div class="logistic-office">
                                <p>( Store Executive )</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hr-main clearfix"></div>
                <div class="checked-by-item">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="prepared-by clearfix">
                            <h2>Approved by</h2>
                            <div class="create-items clearfix">
                                <form method="post" action="<?php echo $this->Url->build(['controller' => 'LogisticFinishGood', 'action' => 'approve', $lfg->id]); ?>">
                                    <input type="hidden" name="approved_by" value="<?php echo $pic; ?>">
                                    <input type="hidden" name="stat" value="approved">
                                    <button type="submit" class="btn btn-info btn-lex ">Approve</button>
                                </form>
                                <button class="btn btn-danger btn-lex" style="margin-left:10px;" data-toggle="modal" data-target="#myModal">Reject</button>
                            </div>
                            <div class="logistic-office">
                                <p>( <?php echo $pic; ?> )</p>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-tues btn-submit-o clearfix">Submit</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup model -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <form method="post" action="<?php echo $this->Url->build(['controller' => 'LogisticFinishGood', 'action' => 'approve', $lfg->id]); ?>">
                    <div class="modal-body transmition-model clearfix">
                        <p>Please key in Remarks Here</p>
                        <div class="text-area-body">
                            <textarea name="remarks" class="form-control fright-input" id="address" cols="20" rows="6" data-validation="required" required></textarea>
                        </div>
                    </div>
                    <input type="hidden" name="approved_by" value="<?php echo $pic; ?>">
                    <input type="hidden" name="stat" value="rejected">
                    <div class="modal-footer clearfix">
                        <input type="submit" class="btn btn-info btn-text-tran" value="Okay">
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
</div>