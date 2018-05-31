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
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xs-12 clearfix">
                        <form action="#">
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="from-goods">From <span class="fright">:</span></label>
                                <textarea name="" class="goods-textarea input-bill" id="from-goods" cols="30" rows="5" disabled><?php echo h($gtr->gtr_from) ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="to-goods">To<span class="fright">:</span></label>
                                <textarea name="" class="goods-textarea input-bill" id="to-goods" cols="30" rows="5" disabled><?php echo h($gtr->gtr_to) ?></textarea>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="date-goods">Date<span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input input-bill" id="date-goods" placeholder="auto generated" data-validation="required" value="<?php echo h($gtr->date) ?>" disabled>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-5 col-xs-12 clearfix">
                        <form action="#">
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport" for="transporter-goods">Transporter<span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input input-bill" id="transporter-goods" name="date6" data-validation="required" value="<?php echo h($gtr->transporter) ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport" for="vehicle-goods">Vehicle No<span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input input-bill" id="vehicle-goods" data-validation="required" value="<?php echo h($gtr->veh_no) ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="ref-goods">Ref No <span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input input-bill" id="ref-goods" name="date6" data-validation="required" value="<?php echo h($gtr->ref_no) ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="goods-cost-label" for="quantity-os">Purpose of transferred/returned<span class="fright">:</span></label>
                                <div class="checkbox-goods input-bill">
                                    <label class="checkbox-inline"><?php echo h($gtr->ref_no) ?></label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <hr/>
                <div class="product-details clearfix">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xs-12 clearfix">
                        <form action="#">
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="model-goods">Model<span class="fright">:</span></label>
                                <select class="form-control input-bill" id="model-goods">
                                    <option><?php echo h($gtr->model_no) ?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="version-goods">Version<span class="fright">:</span></label>
                                <select class="form-control input-bill" id="version-goods">
                                    <option><?php echo h($gtr->version) ?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="type-goods">Type<span class="fright">:</span></label>
                                <select class="form-control input-bill" id="type-goods">
                                    <option><?php echo h($gtr->type) ?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport" for="quantity-goods">Quantity<span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input input-bill" id="quantity-goods" name="date6" data-validation="required" value="<?php echo h($gtr->qty) ?>" disabled>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-5 col-lg-5 col-xs-12 clearfix">
                        <form action="#">
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport" for="fg-code-goods">FG Code<span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input input-bill" id="fg-code-goods" data-validation="required" value="<?php echo h($gtr->fg_code) ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="seriel-goods">Seriel No <span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input input-bill" id="seriel-goods" name="date6" data-validation="required" value="<?php echo h($gtr->ser_no) ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="desc-goods">Desc<span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input input-bill" id="desc-goods" name="date6" data-validation="required" value="<?php echo h($gtr->description) ?>" disabled>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="remarks-goods">Remarks<span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input input-bill" id="remarks-goods" name="date6" data-validation="required" value="<?php echo h($gtr->remarks) ?>" disabled>
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
            </div>
        </div>
    </div>
</div>
</div>