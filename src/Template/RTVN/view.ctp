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
                            <th>RTVN No</th>
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
                            <td><?= h($rtvn->rtvn_no) ?></td>
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
            </div>
        </div>
    </div>
</div>