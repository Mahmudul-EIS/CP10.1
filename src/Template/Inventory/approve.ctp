<div class="product-list">
    <div class="container">
        <div class="row">
            <div class="all-list-item clearfix">
                <div class="barcode clearfix">
                    <h2 class="text-cl tfrom"><b>Manual Stock Take</b></h2>
                    <div style="height:20px"></div>
                    <div class="col-sm-8 clearfix">
                        <form id="form-data" method="post" action="<?php echo $this->Url->build(['controller'=>'Inventory','action'=>'edit',$ms->id])?>">
                            <div class="form-group">
                                <label class="fleft-label" for="date" >Stock Take Date<span class="fright">:</span></label>
                                <input name="stock_take_date" type="text" class="form-control fright-input" id="date" value="<?= date('Y-m-d',strtotime($ms->stock_take_date)); ?>" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="date" >Open Balance Date<span class="fright">:</span></label>
                                <input name="open_balance_date" type="text" class="form-control fright-input" id="date" value="<?= date('Y-m-d',strtotime($ms->open_balance_date)); ?>" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="date" >Part No<span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input input-bill search-data" id="part_no" name="part_no" value="<?= $ms->part_no ?>" data-validation="required" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="date" >Part Name<span class="fright">:</span></label>
                                <input name="part_name" type="text" class="form-control input-bill fsearch-dataright-input search-data" id="part_name" value="<?= $ms->part_name ?>" data-validation="required" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="date" >Current Balance<span class="fright">:</span></label>
                                <input name="current_balance" type="text" class="form-control fright-input" id="current_balance" value="<?= $ms->current_balance ?>" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="date" >Balance Bring Forward<span class="fright">:</span></label>
                                <input name="balance_bring_forward" type="text" class="form-control fright-input" id="date" value="<?= $ms->balance_bring_forward ?>" readonly="readonly">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="date" >Remarks<span class="fright">:</span></label>
                                <textarea name="remarks" class="form-control fright-input"><?= $ms->remarks ?></textarea>
                            </div>
                            <input type="hidden" name="status" value="approved">
                            <button type="submit" class="btn btn-tues btn-submit-o clearfix">Approve</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('input[type="text"], textarea').attr('readonly','readonly');
    });
</script>