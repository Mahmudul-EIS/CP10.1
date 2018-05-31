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
                    <div class="col-sm-8 clearfix">
                        <form action="<?php $this->Html->link(array('controller' => 'Uitest', 'action' => 'add')); ?>">
                            <div class="form-group">
                                <label class="fleft-label" for="part">Part No <span class="fright">:</span></label>
                                <input  type="text" class="form-control fright-input" name="part_no" id="part" data-validation="required">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="partn">Part Name <span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input" name="part_name" id="partn" data-validation="required">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="zon">Zon <span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input" id="zon" name="zon">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="rack">Rack <span class="fright">:</span></label>
                                <input  type="text" class="form-control fright-input" id="rack" name="rack">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="bn">Bn <span class="fright">:</span></label>
                                <input  type="text" class="form-control fright-input" id="bn" name="bn">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="level">Level <span class="fright">:</span></label>
                                <input  type="text" class="form-control fright-input" id="product_level" name="product_level">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="uom">UOM <span class="fright">:</span></label>
                                <select class="form-control" id="uom" name="uom">
                                    <option>Select 1</option>
                                    <option>Pc</option>
                                    <option>Kg</option>
                                    <option>Box</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="mslevel">Min Stock Level <span class="fright">:</span></label>
                                <input  type="text" class="form-control fright-input" id="mslevel" name="min_stock">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="maxlevel">Max Stock Level <span class="fright">:</span></label>
                                <input  type="text" class="form-control fright-input" id="maxlevel" name="max_stock">
                            </div>
                            <button type="submit" class="btn btn-info">Add</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>