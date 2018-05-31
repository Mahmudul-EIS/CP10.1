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
                                <p><?= h($mit->date) ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>REF <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($mit->ref) ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>MIT No <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($mit->mit_no) ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>Section <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($mit->section) ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-offset-1 col-sm-5 ticket-padding">
                        <div class="ticket-item cleafix">
                            <div class="label-date">
                                <p>So No <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p ><?= h($mit->so_no) ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>Customer <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($mit->customer) ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>Revision <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($mit->revision) ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>Quantity <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?= h($mit->qty) ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-5 ticket-padding">
                    <div class="col-sm-6 ticket-version">
                        <table class="table table-bordered ">
                            <thead>
                            <tr>
                                <th>Version</th>
                                <th>Qty</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>ZZT O/D</td>
                                <td>15</td>
                            </tr>
                            <tr>
                                <td>ZTTT I/D</td>
                                <td>10</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-6" style="padding-right:0px">
                        <div class="prepared-by-at clearfix">
                            <h2>Prepared by</h2>
                            <h3 class="prepared-name"><?= h($mit->prepared_by) ?></h3>
                            <h2 style="border-top:1px solid #ddd">Approved by</h2>
                            <h3 class="prepared-name">En Hanif</h3>
                        </div>
                    </div>
                </div>


                <div class="product-list-table clearfix">
                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th rowspan="3">No</th>
                            <th rowspan="3">Model</th>
                            <th rowspan="3">Version</th>
                            <th rowspan="3">Type</th>
                            <th rowspan="3">Part No</th>
                            <th rowspan="3">Part Descriptions</th>
                            <th rowspan="3">Usages</th>
                            <th rowspan="3">Request Qty</th>
                            <th rowspan="3">Issued Qty</th>
                            <th rowspan="3">Outstanding Qty</th>
                            <th colspan="5">Issuing date</th>
                        </tr>
                        <tr class="table-cells">
                            <td>1</td>
                            <td>2</td>
                            <td>3</td>
                            <td>4</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td class="td-blank-row"></td>
                            <td class="td-blank-row"></td>
                            <td class="td-blank-row"></td>
                            <td class="td-blank-row"></td>
                            <td class="td-blank-row"></td>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
                <div class="checked-by-item">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="prepared-by clearfix">
                            <h2>Prepared by</h2>
                            <div class="logistic-office">
                                <p><?= h($mit->prepared_by) ?></p>
                            </div>
                            <div class="create-items clearfix">
                                <form method="post" action="<?php echo $this->Url->build(['controller' => 'MaterialIssueTicket', 'action' => 'approve', $mit->id]) ?>">
                                    <input type="hidden" name="stat" value="approved">
                                    <input type="hidden" name="approve" value="<?php echo $pic; ?>">
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
        <!-- Popup model -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <form method="post" action="<?php echo $this->Url->build(['controller' => 'MaterialIssueTicket', 'action' => 'approve', $mit->id]) ?>">
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