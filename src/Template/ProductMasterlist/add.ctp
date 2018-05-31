<div class="product-list">
    <div class="container">
        <div class="row">
            <div class="product-list-item"><b>Create Product Master List</b></div>
            <div class="all-list-item clearfix">
                <div class="list-item-title clearfix">
                    <div class="col-sm-6 padding-zero br-border text-center">
                        <h2 class="text-cl bg-cl">Indkom engineering Sdn Bhd</h2>
                    </div>
                    <div class="col-sm-6 padding-zero text-center">
                        <h2 class="text-cl bg-cl">Product Master list</h2>
                    </div>
                </div>
                <div class="product-details clearfix">
                    <h2 class="text-cl tfrom"><b>Product  Details</b></h2>
                    <div style="height:40px"></div>
                    <div class="col-sm-10 col-md-8 col-xs-12 clearfix">
                        <form method="post" action="<?php echo $this->Url->build(['controller' => 'ProductMasterlist', 'action' => 'add']); ?>">
                            <div class="form-group">
                                <label class="fleft-label" for="part">Part No <span class="fright">:</span></label>
                                <input  type="text" name="part_no" class="form-control fright-input" id="part" data-validation="required">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="partn">Part Name <span class="fright">:</span></label>
                                <input type="text" name="part_name" class="form-control fright-input" id="partn" data-validation="required">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="zon">Zon <span class="fright">:</span></label>
                                <input type="text" name="zon" class="form-control fright-input" id="zon">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="rack">Rack <span class="fright">:</span></label>
                                <input  type="text" name="rack" class="form-control fright-input" id="rack">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="bn">Bn <span class="fright">:</span></label>
                                <input  type="text" name="bn" class="form-control fright-input" id="bn">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="level">Level <span class="fright">:</span></label>
                                <input  type="text" name="product_level" class="form-control fright-input" id="level">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="uom">UOM <span class="fright">:</span></label>
                                <select class="form-control" id="uom" name="uom">
                                    <option disabled>Select 1</option>
                                    <option value="pc">Pc</option>
                                    <option value="kg">Kg</option>
                                    <option value="box">Box</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="mslevel">Min Stock Level <span class="fright">:</span></label>
                                <input  type="text" name="min_stock" class="form-control fright-input" id="mslevel">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="maxlevel">Max Stock Level <span class="fright">:</span></label>
                                <input  type="text" name="max_stock" class="form-control fright-input" id="maxlevel">
                            </div>
                            <button type="submit" class="btn btn-info">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>