<div class="product-list">
    <div class="container-fluid sm-fluid">
        <div class="row">
            <div class="all-list-item clearfix">
                <div class="list-item-title clearfix">
                    <div class="col-sm-6 padding-zero br-border text-center">
                        <h2 class="text-cl bg-cl">Indkom engineering Sdn Bhd</h2>
                    </div>
                    <div class="col-sm-6 padding-zero text-center">
                        <h2 class="text-cl bg-cl">Goods transferred/return</h2>
                    </div>
                </div>
                <div class="product-details clearfix">
                    <div class="col-sm-6 clearfix">
                        <form action="#">
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="from-goods">From <span class="fright">:</span></label>
                                <textarea name="" class="goods-textarea" id="from-goods" cols="30" rows="5" disabled><?php echo h($gtr->gtr_from) ?></textarea>
                                <div class="icon-search-goods">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="to-goods">To<span class="fright">:</span></label>
                                <textarea name="" class="goods-textarea" id="to-goods" cols="30" rows="5" disabled><?php echo h($gtr->gtr_to) ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="date-goods">Date<span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input input-bill" id="date-goods" placeholder="auto generated" data-validation="required" value="<?php echo h($gtr->date) ?>" disabled>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-5 clearfix">
                        <form action="#">
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport" for="transporter-goods">Transporter<span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input" id="transporter-goods" name="date6" data-validation="required" value="<?php echo h($gtr->transporter) ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport" for="vehicle-goods">Vehicle No<span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input " id="vehicle-goods" data-validation="required" value="<?php echo h($gtr->veh_no) ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="ref-goods">Ref No <span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input" id="ref-goods" name="date6" data-validation="required" value="<?php echo h($gtr->ref_no) ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="goods-cost-label" for="costs-goods">Transportation costs will be funded by <span class="fright">:</span></label>
                                <textarea name="" class="textarea-costs" id="costs-goods" cols="30" rows="3" disabled><?php echo h($gtr->cost_fund) ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="goods-cost-label" for="quantity-os">Purpose of transferred/returned<span class="fright">:</span></label>
                                <div class="checkbox-goods">
                                    <label class="checkbox-inline"><?php echo h($gtr->ref_no) ?></label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr/>
                <div class="product-details clearfix">
                    <div class="col-sm-6 clearfix">
                        <form action="#">
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="model-goods">Model<span class="fright">:</span></label>
                                <select class="form-control" id="model-goods">
                                    <option><?php echo h($gtr->model_no) ?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="version-goods">Version<span class="fright">:</span></label>
                                <select class="form-control" id="version-goods">
                                    <option><?php echo h($gtr->version) ?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="type-goods">Type<span class="fright">:</span></label>
                                <select class="form-control" id="type-goods">
                                    <option><?php echo h($gtr->type) ?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport" for="quantity-goods">Quantity<span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input" id="quantity-goods" name="date6" data-validation="required" value="<?php echo h($gtr->qty) ?>" disabled>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-5 clearfix">
                        <form action="#">
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport" for="fg-code-goods">FG Code<span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input " id="fg-code-goods" data-validation="required" value="<?php echo h($gtr->fg_code) ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="seriel-goods">Seriel No <span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input" id="seriel-goods" name="date6" data-validation="required" value="<?php echo h($gtr->ser_no) ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="desc-goods">Desc<span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input" id="desc-goods" name="date6" data-validation="required" value="<?php echo h($gtr->description) ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="remarks-goods">Remarks<span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input" id="remarks-goods" name="date6" data-validation="required" value="<?php echo h($gtr->remarks) ?>" disabled>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="customer-remarks-table clearfix">
                    <div class="col-sm-8">
                        <div class="customer-remarks">
                            <h4>Customer Remarks</h4>
                            <textarea name="" id="customer-remarks-textarea" cols="30" rows="5" disabled><?php echo h($gtr->cust_remarks) ?></textarea>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="prepared-by-item item-pre-goods">
                            <h2>Approved by(Customer)</h2>
                            <h3 class="author-name"><?php echo h($gtr->prepared_by) ?></h3>
                            <div class="date-lo"><?php echo h($gtr->date) ?></div>
                        </div>
                    </div>
                </div>
                <div class="indcom-used clearfix"><h2>for indkom used</h2></div>
                <div class="checked-by-item">
                    <div class="col-sm-12">
                        <div class="prepared-table">
                            <div class="prepared-by-item item-pre-ac">
                                <h2>Returned by(Transporter)</h2>
                                <h3 class="author-name"><?= h($gtr->prepared_by) ?></h3>
                                <div class="date-lo"><?= h($gtr->date) ?></div>
                            </div>
                            <div class="prepared-by-item item-pre-ac">
                                <h2>Received by(Store)</h2>
                                <h3 class="author-name"><?php echo $pic; ?></h3>
                                <div class="date-lo"><?php echo date('Y/m/d'); ?></div>
                            </div>
                            <div class="prepared-by-item item-pre-ac">
                                <h2>Acknowledge by(QA)</h2>
                                <div class="info-button-ac clearfix">
                                    <form method="post" action="<?php echo $this->Url->build(['controller' => 'GTR', 'action' => 'approve', $gtr->id]) ?>">
                                        <input type="hidden" name="stat" value="approved">
                                        <input type="hidden" name="approved_by" value="<?php echo $pic; ?>">
                                        <button type="submit" class="btn btn-info btn-rt-ac" style="margin-right:10px;font-size:13px;">Ackonowledge</button>
                                    </form>
                                    <button class="btn btn-danger btn-rt-ac" style="font-size:13px;" data-toggle="modal" data-target="#myModal">Reject</button>
                                </div>
                                <div class="date-lo"><?php echo date('Y/m/d'); ?></div>
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
                    <form method="post" action="<?php echo $this->Url->build(['controller' => 'GTR', 'action' => 'approve', $gtr->id]) ?>">
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
</div>