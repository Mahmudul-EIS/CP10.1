<div class="product-list">
    <div class="container-fluid  sm-fluid">
        <div class="row">
            <div class="all-list-item clearfix">
                <div class="list-item-title clearfix">
                    <div class="col-sm-6 padding-zero br-border text-center">
                        <h2 class="text-cl bg-cl">Indkom engineering Sdn Bhd</h2>
                    </div>
                    <div class="col-sm-6 padding-zero text-center">
                        <h2 class="text-cl bg-cl">Return to vendor notice</h2>
                    </div>
                </div>
                <div class="metarial-requisition clearfix">
                    <div class="col-sm-offset-1 col-sm-6 selection-padding clearfix">
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>Date <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($rtvn->date) ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>MDR No <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($rtvn->mdr_no) ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>Vendor <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($rtvn->vendor) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-list-table clearfix">
                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>MDR No</th>
                            <th>Parts Description</th>
                            <th>Qty</th>
                            <th>Qty Rec</th>
                            <th>Qty O/S</th>
                            <th>D.O Date</th>
                            <th>Remarks</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1.</td>
                            <td><?= h($rtvn->mdr_no) ?></td>
                            <td><?= h($rtvn->part_no) ?> <?= h($rtvn->part_name) ?></td>
                            <td><?= h($rtvn->qty) ?></td>
                            <td><?= h($rtvn->qty_rec) ?></td>
                            <td><?= h($rtvn->qty_os) ?></td>
                            <td><?= h($rtvn->date) ?></td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="checked-by-item">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="prepared-table">
                            <div class="prepared-by-item">
                                <h2>Date</h2>
                                <h3 class="author-name"><?= h($rtvn->date) ?></h3>
                            </div
                                >
                            <div class="prepared-by-item">
                                <h2>Issued by</h2>
                                <h3 class="author-name"><?= h($rtvn->prepared_by) ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="verify-item clearfix">
                    <div class="col-sm-4 col-sm-offset-8 clearfix">
                        <div class="prepared-by-item">
                            <h2>Date</h2>
                            <h3 class="author-name">10/5/2016</h3>
                        </div>
                        <div class="prepared-by-item">
                            <h2>Verified by</h2>
                            <div class="info-button-item clearfix">
                                <form method="post" action="<?php echo $this->Url->build(['controller' => 'RTVN', 'action' => 'approve', $rtvn->id]); ?>">
                                    <input type="hidden" name="approved_by" value="<?php echo $pic; ?>">
                                    <input type="hidden" name="stat" value="approved">
                                    <button type="submit" class="btn btn-info btn-rt-ver" style="margin-right:10px;">Verified</button>
                                </form>
                                <button class="btn btn-danger btn-rt-ver" data-toggle="modal" data-target="#myModal">Reject</button>
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
                <form method="post" action="<?php echo $this->Url->build(['controller' => 'RTVN', 'action' => 'approve', $rtvn->id]); ?>">
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