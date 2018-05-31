<div class="company">
    <div class="container-fluid">
        <div class="header-top clearfix">
            <div class="col-sm-5">
                <div class="office-details">
                    <p>Head Office & Factory:</br>
                        No 2, Jalan Asam Jawa 16/15 Seksyen 16,</br>
                        Kawasan Perindustrian Shah Alam.</br>
                        40200,Shah Alam, Selangor Darul Ehsan </br>
                        Tel;03-6541635</br>
                        Fax: 03-678756</br>
                        Email:indkom@tm.net.my</br>
                        Web:www.indkom.com</p>
                </div>
            </div>
            <div class="col-sm-3 col-sm-offset-4">
                <div class="logo logo-right"><h2>INDKOM</h2><p>ENGINEERING SDN . BHD</p></div>
            </div>
        </div>
    </div>
</div>
<div class="product-list">
    <div class="container">
        <div class="row">
            <div class="product-masterlist all-list-item finish-good-padding clearfix">
                <div class="deviler-details clearfix">
                    <div class="col-sm-6">
                        <div class="deliver-item">
                            <h4>DELIVER TO :</h4>
                            <p><?= h($nbdo->del_to) ?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2">
                        <div class="delivery-order">
                            <div class="order-btn">
                                <p class="order-no"><span>Delivery Order no :</span> <?= h($nbdo->do_no) ?></p>
                                <p class="biling">NON BILLING</p>
                            </div>
                            <div class="prepared-table">
                                <div class="prepared-by-item">
                                    <h2>Prepared by</h2>
                                    <h3 class="author-name"><?= h($nbdo->prepared_by) ?></h3>
                                </div
                                    >
                                <div class="prepared-by-item">
                                    <h2>Date</h2>
                                    <h3 class="date"><?= h($nbdo->date) ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-list-table clearfix">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>PART NO</th>
                            <th>QUANTITY</th>
                            <th>PART NAME</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="row-height"><?= h($nbdo->part_no) ?></td>
                            <td class="row-height"><?= h($nbdo->qty) ?></td>
                            <td class="row-height"><?= h($nbdo->part_name) ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="checked-by-item">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="prepared-by clearfix">
                            <h2>Received by</h2>
                            <div class="create-items clearfix">
                                <form method="post" action="<?php echo $this->Url->build(['controller' => 'BillingDeliveryOrder', 'action' => 'approve', $nbdo->id]); ?>">
                                    <input type="hidden" name="approved_by" value="<?php echo $pic; ?>">
                                    <input type="hidden" name="stat" value="approved">
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
                <form method="post" action="<?php echo $this->Url->build(['controller' => 'BillingDeliveryOrder', 'action' => 'approve', $nbdo->id]); ?>">
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