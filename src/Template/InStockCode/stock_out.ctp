<div class="product-list">
    <div class="container">
        <div class="row">
            <div class="all-list-item clearfix">
                <div class="barcode clearfix">
                    <h2 class="text-cl tfrom"><b>BARCODE- STOCK OUT</b></h2>
                    <div style="height:20px"></div>
                    <div class="col-sm-8 clearfix">
                        <form id="form-data">
                            <div class="form-group">
                                <label class="fleft-label" for="date" >Date<span class="fright">:</span></label>
                                <input name="date" type="text" class="form-control fright-input" id="date" value="<?php echo date('Y-m-d'); ?>">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="selected-value"> MIT / PRN / PR <span class="fright">:</span></label>
                                <select name="select_field" id="selected-field" class="fright-input">
                                    <option value="MIT">MIT</option>
                                    <option value="PRN">PRN</option>
                                    <option value="PR">PR</option>
                                </select>
                                <input type="text" name="select_val" id="selected-value" class=" fright-input">
                            </div>
                             <div id="hidden">
                             </div>
                            <div class="form-group">
                                <label class="fleft-label" for="tender">Tender No <span class="fright">:</span></label>
                                <input name="tender_no" type="text" class="form-control fright-input" id="tender">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="so_no">SO No <span class="fright">:</span></label>
                                <input name="so_no" type="text" class="form-control fright-input" id="so_no">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="part_no">Part No <span class="fright">:</span></label>
                                <input name="part_no" type="text" class="form-control fright-input search-data" id="part_no">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="part_name">Part Name <span class="fright">:</span></label>
                                <input name="part_name" type="text" class="form-control fright-input search-data" id="part_name">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="section">Section <span class="fright">:</span></label>
                                <select class="form-control" id="section" name="section">
                                    <option disabled>Select 1</option>
                                    <option value="pc">Pc</option>
                                    <option value="kg">Kg</option>
                                    <option value="box">Box</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="quatity">Quantity <span class="fright">:</span></label>
                                <input name="quantity" type="number" class="form-control fright-input" id="quantity">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label" for="pstore">PIC Store <span class="fright">:</span></label>
                                <input name="pic_store" type="text" class="form-control fright-input" id="pstore" value="<?php echo $pic_store; ?>" readonly>
                            </div>
                        </form>
                        <button id="save-table" class="btn btn-succsss button-pic button-trans">Add Item</button>
                    </div>
                    <div class="barcode-tabe clearfix">
                        <div class="col-sm-10">
                            <div class="table-part">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>Date</th>
                                        <th>MIT / PRN / PR</th>
                                        <th>Tender No</th>
                                        <th>SO No</th>
                                        <th>Part No</th>
                                        <th>Part Name</th>
                                        <th>Section</th>
                                        <th>Quantity</th>
                                        <th>PIC Store</th>
                                    </tr>
                                    </thead>
                                    <tbody id="table-data">
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <button id="generate-code" class="btn btn-succsss btn-code">Generate code</button>
                        </div>
                    </div>
                    <div style="display: none;" class="col-sm-5 col-sm-offset-3 col-xs-5 col-xs-offset-3 col-md-5 col-md-offset-4">
                        <div class="bar-code-preview clearfix" id="popup">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>TENDER NO</td>
                                    <td>TNB377/2013-404487055</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>IN STOCK CODE</td>
                                    <td>201605140001</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>DATE</td>
                                    <td>04/05/15</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>PART NO</td>
                                    <td>001</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>PART NAME</td>
                                    <td>SIDE WALL LEFT</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>QUANTITY</td>
                                    <td>1500</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>PIC STORE</td>
                                    <td>AMIR</td>
                                </tr>
                                </tbody>
                            </table>
                            <button class="btn btn-succsss btn-oky">Okay</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="all-modals"></div>
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Modal Header</h4>
            </div>
            <div class="modal-body" id="modal-data">
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        var sel_val = '';
        var sel_field = '';
        $('#selected-value').on('change',function (e) {
            e.preventDefault();
            sel_val = $(this).val();
            sel_field = $('#selected-field').val();
            if(sel_field == 'MIT'){
                $('#hidden').html('<input name="mit_no" type="hidden" value="'+sel_val+'">');
            }else if(sel_field =='PRN'){
                $('#hidden').html('<input name="prn_no" type="hidden" value="'+sel_val+'">');
            }else if(sel_field =='PR'){
                $('#hidden').html('<input name="pr_no" type="hidden" value="'+sel_val+'">');
            }
        });
        $('#selected-field').on('change',function (ev) {
            ev.preventDefault();
            if($(this).val() == 'MIT'){
                $('#hidden').html('<input name="mit_no" type="hidden" value="'+sel_val+'">');
            }else if($(this).val() =='PRN'){
                $('#hidden').html('<input name="prn_no" type="hidden" value="'+sel_val+'">');
            }else if($(this).val() =='PR'){
                $('#hidden').html('<input name="pr_no" type="hidden" value="'+sel_val+'">');
            }
        });
        $('#save-table').click(function(){
            var count = 1;
            var html_form = '<tr>'+
                            '<td>'+count+'</td>'+
                            '<td>'+$('#date').val()+'</td>'+
                            '<td>'+$('#selected-value').val()+'</td>'+
                            '<td>'+$('#tender').val()+'</td>'+
                            '<td>'+$('#so_no').val()+'</td>'+
                            '<td>'+$('#part_no').val()+'</td>'+
                            '<td>'+$('#part_name').val()+'</td>'+
                            '<td>'+$('#section').val()+'</td>'+
                            '<td>'+$('#quantity').val()+'</td>'+
                            '<td>'+$('#pstore').val()+'</td>'+
                            '</tr>';
                count +=1;
            $('#table-data').append(html_form);
            var htmlPopup = '<div class="clearfix" id="form-data'+formObj['id']+'">'+
                '<table class="table table-bordered">'+
                '<tbody>'+
                '<tr>'+
                '<td>1</td>'+
                '<td>TENDER NO</td>'+
                '<td>'+formObj['tender_no']+'</td>'+
                '</tr>'+
                '<td>2</td>'+
                '<td>TRANSACTION NO</td>'+
                '<td>'+formObj['mit_no']+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>3</td>'+
                '<td>IN STOCK CODE</td>'+
                '<td>201605140001</td>'+
                '</tr>'+
                '<tr>'+
                '<td>4</td>'+
                '<td>DATE</td>'+
                '<td>'+formObj['date']+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>5</td>'+
                '<td>PART NO</td>'+
                '<td>'+formObj['part_no']+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>6</td>'+
                '<td>PART NAME</td>'+
                '<td>'+formObj['part_name']+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>7</td>'+
                '<td>QUANTITY</td>'+
                '<td>'+formObj['quantity']+'</td>'+
                '</tr>'+
                '<tr>'+
                '<td>8</td>'+
                '<td>PIC STORE</td>'+
                '<td>'+formObj['pic_store']+'</td>'+
                '</tr>'+
                '</tbody>'+
                '</table>'+
                '<form id="final-form'+formObj['id']+'">'+
                '<input name="date" type="hidden" value="'+formObj['date']+'">'+
                '<input name="select_val" type="hidden" value="'+sel_val+'">'+
                '<input name="select_field" type="hidden" value="'+sel_field+'">'+
                '<input name="tender_no" type="hidden" value="'+formObj['tender_no']+'">'+
                '<input name="so_no" type="hidden" value="'+formObj['so_no']+'">'+
                '<input name="part_no" type="hidden" value="'+formObj['part_no']+'">'+
                '<input name="part_name" type="hidden" value="'+formObj['part_name']+'">'+
                '<input name="section" type="hidden" value="'+formObj['section']+'">'+
                '<input name="pic_store" type="hidden" value="'+formObj['pic_store']+'">'+
                '<input name="quantity" type="hidden" value="'+formObj['quantity']+'">'+
                '<input type="submit" class="btn btn-default pull-right" value="Submit"></form>'+
                '</div><br>';
            $('#modal-data').append(htmlPopup);
            id_no+=1;
        });

        $('#generate-code').on('click', function(e){
            $('.modal').modal('hide');
            $('#myModal').modal('show');
            e.preventDefault();
            for(var k = 1; k < id_no; k++){
                $('#final-form'+k).on('submit', function(a){
                    a.preventDefault();
                    var formData = $(this).serialize();
                    var formUrl = $(this).attr('action');
                    var modalId = $(this).parent().attr('id');

                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $this->Url->build(['Controller' => 'InStockCode', 'action' => 'addStockOut']); ?>',
                        data: formData,
                        dataType: 'text',
                        success: function(data, textStatus, xhr){
                            //alert(data);
                            $('#'+modalId).html(data);
                        },
                        error: function(xhr, textStatus, error){
                            //alert(textStatus);
                            $('#'+modalId).html(textStatus);
                        }
                    });
                    return false;
                });
            }
        });
        
        var so_no = [<?php echo $so_no; ?>];

        $('#so_no').autocomplete({
            source : so_no,
            minLength : 0
        });

    });
</script>