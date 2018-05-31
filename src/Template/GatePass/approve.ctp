<div class="product-list">
    <div class="container-fluid  sm-fluid">
        <div class="row">
            <div class="all-list-item clearfix">
                <div class="list-item-title clearfix">
                    <div class="col-sm-6 padding-zero br-border text-center">
                        <h2 class="text-cl bg-cl">Indkom engineering Sdn Bhd</h2>
                    </div>
                    <div class="col-sm-6 padding-zero text-center">
                        <h2 class="text-cl bg-cl">Material issue Ticket</h2>
                    </div>
                </div>
                <div class="col-sm-7 selection-padding clearfix">
                    <div class="col-sm-6 ticket-padding">
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>Date <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($gp->date) ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>VERS <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($gp->vers) ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>DO No <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($gp->do_no) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-offset-1 col-sm-5 ticket-padding">
                        <div class="ticket-item cleafix">
                            <div class="label-date">
                                <p>Gate Pass No <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p ><?= h($gp->gate_pass_no) ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>Product Name <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($gp->prod_name) ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>Quantity <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($gp->qty) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 ticket-padding">
                    <div class="col-sm-6" style="padding-right:0px">
                        <div class="prepared-by-at clearfix">
                            <h2>Prepared by</h2>
                            <h3 class="prepared-name"><?= h($gp->prepared_by) ?></h3>
                            <h2 style="border-top:1px solid #ddd">Approved by</h2>
                            <h3 class="prepared-name">En Hanif</h3>
                        </div>
                    </div>
                </div>

                <div class="checked-by-item">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="prepared-by clearfix">
                            <h2>Prepared by</h2>
                            <div class="logistic-office">
                                <p><?= h($gp->prepared_by) ?></p>
                            </div>
                            <div class="create-items clearfix">
                                <form method="post" action="<?php echo $this->Url->build(['controller' => 'GatePass', 'action' => 'approve', $gp->id]) ?>">
                                    <input type="hidden" name="stat" value="approved">
                                    <input type="hidden" name="approved_by" value="<?php echo $pic; ?>">
                                    <button type="submit" class="btn btn-info btn-lex ">Approve</button>
                                </form>
                                <button class="btn btn-info btn-lex" style="margin-left:10px;" data-toggle="modal" data-target="#myModal">Reject</button>
                            </div>
                            <div class="logistic-office">
                                <p>( <?php echo $pic; ?> )</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup model -->
    <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <form method="post" action="<?php echo $this->Url->build(['controller' => 'GatePass', 'action' => 'approve', $gp->id]) ?>">
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