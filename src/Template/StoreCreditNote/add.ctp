<div class="product-list">
    <div class="container-fluid  sm-fluid">
        <div class="row">
            <div class="all-list-item clearfix">
                <div class="list-item-title clearfix">
                    <div class="col-sm-6 padding-zero br-border text-center">
                        <h2 class="text-cl bg-cl">Indkom engineering Sdn Bhd</h2>
                    </div>
                    <div class="col-sm-6 padding-zero text-center">
                        <h2 class="text-cl bg-cl">Store credit Note</h2>
                    </div>
                </div>
                <form id="form-data" method="post" action="<?php echo $this->Url->build(['controller' => 'StoreCreditNote', 'action' => 'addItems']); ?>">
                <div class="metarial-requisition clearfix">
                    <div class="col-sm-offset-1 col-sm-6 selection-padding clearfix">

                        <div class="ticket-item form-group">
                            <div class="label-date">
                                <p>Date <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><input class="form-control control-issue-ticket" type="text" name="date" value="<?php echo date('Y/m/d'); ?>"></p>
                            </div>
                        </div>
                        <div class="ticket-item form-group">
                            <div class="label-date">
                                <p>Ref No <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><input class="form-control control-issue-ticket" type="text" name="ref_no"></p>
                            </div>
                        </div>
                        <div class="ticket-item form-group">
                            <div class="label-date">
                                <p>Section <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><input class="form-control control-issue-ticket" type="text" name="section"></p>
                            </div>
                        </div>
                            <input value="<?php echo $pic; ?>" type="hidden" name="pic">
                            <input value="pending" type="hidden" name="stat">

                    </div>
                    <div class="col-sm-6 col-sm-offset-6 col-md-4 col-md-offset-8 col-lg-4 col-lg-offset-8 metarial-re clearfix">
                        <div class="prepared-by-item">
                            <h2>Requested by</h2>
                            <h3 class="author-name"><b><?php echo $pic; ?></b></h3>
                        </div>
                        <div class="prepared-by-item">
                            <h2>Planner</h2>
                            <h3 class="author-name"><b>EN KHAMAL</b></h3>
                        </div>
                    </div>
                </div>
                <div class="product-list-table clearfix">
                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Items Description</th>
                            <th>Quantity</th>
                            <th>Reason Code</th>
                            <th>Remarks</th>
                        </tr>
                        </thead>
                        <tbody id="table-data">
                        <tr>
                            <td>1</td>
                            <td><label for="shama1"></label><input id="shama1" type="text" class="form-control control-issue-ticket" name="item_desc1"></td>
                            <td><label for="shama2"></label><input id="shama2" type="text" class="form-control control-issue-ticket" name="qty1"></td>
                            <td><label for="shama3"></label><input id="shama3" type="text" class="form-control control-issue-ticket" name="reason_code1"></td>
                            <td><label for="shama4"></label><input id="shama4" type="text" class="form-control control-issue-ticket" name="remarks1"></td>
                            <input type="hidden" name="total" value="1">
                        </tr>
                        </tbody>
                    </table>

                </div>
                </form>
                <button id="btn-add" class="btn btn-default pull-right store-btn-add">Add item</button>
                <div class="checked-by-item">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="prepared-by clearfix">
                            <div class="create-items clearfix">
                                <button type="submit" form="form-data" class="btn btn-info btn-lex">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        var item_added = 1;
        var html_form = '';
        $('#btn-add').on('click', function(e){
            e.preventDefault();
            item_added++;
            html_form+='<tr>'+
            '<td>'+item_added+'</td>'+
            '<td><input type="text" class="form-control" name="item_desc'+item_added+'"></td>'+
            '<td><input type="text" class="form-control" name="qty'+item_added+'"></td>'+
            '<td><input type="text" class="form-control" name="reason_code'+item_added+'"></td>'+
            '<td><input type="text" class="form-control" name="remarks'+item_added+'"></td>'+
            '</tr><input type="hidden" name="total" value="'+item_added+'">';
            $('#table-data').append(html_form);
            html_form = '';
        });
    });
</script>