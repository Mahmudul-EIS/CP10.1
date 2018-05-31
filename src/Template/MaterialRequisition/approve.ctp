<div class="product-list">
    <div class="container-fluid  sm-fluid">
        <div class="row">
            <div class="all-list-item clearfix">
                <div class="list-item-title clearfix">
                    <div class="col-sm-6 padding-zero br-border text-center">
                        <h2 class="text-cl bg-cl">Indkom engineering Sdn Bhd</h2>
                    </div>
                    <div class="col-sm-6 padding-zero text-center">
                        <h2 class="text-cl bg-cl">Material Requisition</h2>
                    </div>
                </div>
                <div class="metarial-requisition clearfix">
                    <div class="col-sm-offset-1 col-sm-6 selection-padding clearfix">
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>Date <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($mr->date_issue) ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>MR No <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($mr->mr_no) ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>CCAR No <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($mr->ccar_no) ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>Job <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($mr->job) ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>Section <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($mr->section) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-sm-offset-6 metarial-re clearfix">
                        <div class="prepared-by-item">
                            <h2>Requested by</h2>
                            <h3 class="author-name"><b><?= h($mr->prepared_by) ?></b></h3>
                            <div class="logistic-office">
                                <p>( Requestor )</p>
                            </div>
                        </div>
                        <div class="prepared-by-item">
                            <h2>Approved by</h2>
                            <h3 class="author-name"><b>En Hanif</b></h3>
                            <div class="logistic-office">
                                <p>( Head of the Dept )</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-list-table clearfix">
                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Part No</th>
                            <th>Part Name</th>
                            <th>Qty Requested</th>
                            <th>Qty Issued</th>
                            <th>Remarks</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <div class="checked-by-item">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="prepared-by clearfix">
                            <h2>Issued by</h2>
                            <div class="create-items clearfix">
                                <form method="post" action="<?php echo $this->Url->build(['controller' => 'MaterialRequisition', 'action' => 'approve', $mr->id]); ?>">
                                    <input type="hidden" name="approve" value="<?php echo $pic; ?>">
                                    <input type="hidden" name="stat" value="approved">
                                    <button type="submit" class="btn btn-info btn-lex ">Approve</button>
                                </form>
                                <button class="btn btn-info btn-lex" style="margin-left:10px;" data-toggle="modal" data-target="#myModal">Reject</button>
                            </div>
                            <div class="logistic-office">
                                <p>( Store )</p>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-info btn-sub-ticket">Submit</button>
            </div>
        </div>
        <!-- Popup model -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <form method="post" action="<?php echo $this->Url->build(['controller' => 'MaterialRequisition', 'action' => 'approve', $mr->id]); ?>">
                        <div class="modal-body transmition-model clearfix">
                            <p>Please key in Remarks Here</p>
                            <div class="text-area-body">
                                <textarea name="remarks" class="form-control fright-input" id="address" cols="20" rows="6" data-validation="required" required></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="approve" value="<?php echo $pic; ?>">
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