<div class="product-list">
    <div class="container">
        <div class="row">
            <div class="all-list-item clearfix">
                <div class="barcode clearfix">
                    <h2 class="text-cl tfrom"><b>Stock-Quarantine</b></h2>
                    <div style="height:20px"></div>
                    <div class="col-sm-7 clearfix">
                        <form id="form-data">
                            <div class="form-group">
                                <label class="fleft-label" for="date" >Date<span class="fright">:</span></label>
                                <input name="date" type="text" class="form-control control-issue-ticket-2 fright-input" id="date" value="<?php echo date('Y/m/d'); ?>" placeholder="<?php echo date('Y/m/d'); ?>">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="tender">Tender No <span class="fright">:</span></label>
                                <input name="tender_no" type="text" class="form-control control-issue-ticket-2 fright-input" id="tender">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="mitcode">PRN No <span class="fright">:</span></label>
                                <input name="prn_no" type="text" class="form-control control-issue-ticket-2 fright-input" id="mitcode">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="trs">TRS code <span class="fright">:</span></label>
                                <input name="trs_code" type="text" class="form-control  control-issue-ticket-2 fright-input" id="trs">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="part_no">Part No <span class="fright">:</span></label>
                                <input name="part_no" type="text" class="form-control control-issue-ticket-2 fright-input search-data" id="part_no">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="part_name">Part Name <span class="fright">:</span></label>
                                <input name="part_name" type="text" class="form-control control-issue-ticket-2 fright-input search-data" id="part_name">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="quantity-stock">Quantity<span class="fright">:</span></label>
                                <input name="quantity" type="text" class="form-control control-issue-ticket-2 fright-input" id="quantity-stock">
                            </div>
                            <div class="form-group button-add">
                                <label class="fleft-label" for="pstore">PIC Store <span class="fright">:</span></label>
                                <input name="pic_store" type="text" class="form-control control-issue-ticket-2 fright-input" id="pstore">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="psection">PIC Section <span class="fright">:</span></label>
                                <input name="pic_section" type="text" class="form-control control-issue-ticket-2 fright-input" id="psection">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="stock-rack">Rack <span class="fright">:</span></label>
                                <input name="rack" type="text" class="form-control control-issue-ticket-2 fright-input" id="stock-rack">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="stock-bin">Bin <span class="fright">:</span></label>
                                <input name="bin" type="text" class="form-control control-issue-ticket-2 fright-input" id="stock-bin">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="stock-level">Level <span class="fright">:</span></label>
                                <input name="level" type="text" class="form-control control-issue-ticket-2 fright-input" id="stock-level">
                            </div>
                        </form>
                        <button id="add-items" class="btn btn-succsss button-pstore">Add Item</button>
                    </div>
                    <div class="col-sm-3 col-sm-offset-2">
                        <div class="zon">
                            <h3>Section : <b></b></h3>
                            <table class="table table-bordered">
                                <tbody class="zon-details">
                                <tr>
                                    <td>Supervisor</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Contact No</td>
                                    <td></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="table-scan">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Date</th>
                                <th>Tender No</th>
                                <th>PRN No</th>
                                <th>TRS code</th>
                                <th>Part No</th>
                                <th>Part Name</th>
                                <th>Quantity</th>
                                <th>PIC Store</th>
                                <th>PIC Section</th>
                                <th>Rack</th>
                                <th>Bin</th>
                                <th>Level</th>
                            </tr>
                            </thead>
                            <tbody id="table-data">
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="final-form">
                    <form id="form-submit" method="post" action="<?php echo $this->Url->build(['controller' => 'QuarantineStocks', 'action' => 'addItems']); ?>"></form>
                </div>
                <div class="col-sm-4 col-sm-offset-8 col-md-4 col-md-offset-8 col-xs-4 col-xs-offset-8 button-ack">
                    <button type="submit" form="form-submit" class="btn btn-succsss">Save</button>
                    <button class="btn btn-danger">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        var formObj = [];
        var id_no = 1;
        var html_form = '';
        $('#add-items').click(function(){
            var html_table = '<tr>';
            formObj['id'] = id_no;
            var inputs = $('#form-data').serializeArray();
            html_table+='<td>'+formObj['id']+'</td>';
            $.each(inputs, function(i, input){
                formObj[input.name] = input.value;
                html_table+='<td>'+input.value+'</td>';
                html_form+='<input type="hidden" name="'+input.name+id_no+'" value="'+input.value+'">';
                Cookies.set(input.name+id_no, input.value);
            });
            html_table+='</tr>';
            html_form+='<input type="hidden" name="total" value="'+id_no+'">';
            $('#table-data').append(html_table);
            $('#form-submit').html(html_form);
            id_no+=1;
        });

    });
</script>