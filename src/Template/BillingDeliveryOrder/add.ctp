<div class="product-list">
    <div class="container-fluid sm-fluid">
        <div class="row">
            <div class="all-list-item clearfix">
                <div class="list-item-title clearfix">
                    <div class="col-sm-6 padding-zero br-border text-center">
                        <h2 class="text-cl bg-cl">Indkom engineering Sdn Bhd</h2>
                    </div>
                    <div class="col-sm-6 padding-zero text-center">
                        <h2 class="text-cl bg-cl">Billing delivery order</h2>
                    </div>
                </div>
                <div class="product-details clearfix">
                    <div class="col-sm-8 col-md-6 col-xs-12 clearfix">
                        <form id="form-data">
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="date-bill">Date <span class="fright">:</span></label>
                                <input  type="text" name="date" class="form-control fright-input input-bill" id="date-bill" value="<?php echo date('Y/m/d'); ?>" data-validation="required">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="do-no-bill">DO No <span class="fright">:</span></label>
                                <input type="text" name="do_no" class="form-control fright-input input-bill" value="<?php echo $do_no; ?>" id="do-no-bill" readonly>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="deliver-to">Deliver To <span class="fright">:</span></label>
                                <textarea name="del_to" class="form-control fright-input input-bill input-text input-text-2" id="deliver-to" cols="20" rows="6" data-validation="required"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="po-no-bill">PO No <span class="fright">:</span></label>
                                <input type="text" name="po_no" class="form-control fright-input input-bill" id="po-no-bill">
                            </div>
                    </div>
                    <div class="col-sm-8 col-xs-12 col-md-5 clearfix">
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport" for="part-no-bill">Part No <span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input input-bill search-data" id="part_no" name="part_no" data-validation="required"/>
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport" for="part-name-bill">Part Name <span class="fright">:</span></label>
                                <input name="part_name" type="text" class="form-control input-bill fright-input search-data" id="part_name" data-validation="required">
                            </div>
                            <div class="form-group">
                                <label class="fleft-label fleft-label-transport " for="quantity-bill">Quantity <span class="fright">:</span></label>
                                <input type="text" class="form-control fright-input input-bill" id="quantity-bill" name="qty" data-validation="required"/>
                            </div>
                        <div class="form-group">
                            <label class="fleft-label fleft-label-transport " for="remark-to">Remark <span class="fright">:</span></label>
                            <textarea name="remarks" class="form-control fright-input input-bill input-text input-text-2" id="remark-to" cols="20" rows="4" data-validation="required"></textarea>
                        </div>
                    </form>
                        <button id="save-table" class="btn btn-info btn-bill">View</button>
                    </div>
                </div>
                <div class="hr-main hr-main-bill clearfix"></div>
                <div class="product-list-table clearfix">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>DO No</th>
                            <th>Deliver to</th>
                            <th>PO No</th>
                            <th>Part No</th>
                            <th>Part Name</th>
                            <th>Quantity</th>
                            <th>Remarks</th>
                        </tr>
                        </thead>
                        <tbody id="table-data">

                        </tbody>
                    </table>
                </div>
                <div id="all-modals"></div>
                <div class="checked-by-item">
                    <div class="col-sm-4 col-sm-offset-8">
                        <div class="preparetion-trasition clearfix">
                            <div class="prepared-by clearfix">
                                <h2>Prepared by</h2>
                                <button class="btn btn-danger btn-prepared ">Prepared</button>
                                <div class="logistic-office">
                                    <p>( <?php echo $pic; ?> )</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button id="final-submit" class="btn btn-info btn-submit-o clearfix">Create</button>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    $(document).ready(function(){
        var formObj = [];
        var finalData = [];
        var id_no = 1;
        $('#save-table').click(function(){
            var multData = [];
            var html_form = '<tr>';
            formObj['id'] = id_no;
            var inputs = $('#form-data').serializeArray();
            html_form+='<td>'+formObj['id']+'</td>';
            $.each(inputs, function(i, input){
                formObj[input.name] = input.value;
                html_form+='<td>'+input.value+'</td>';
                Cookies.set(input.name+id_no, input.value);
            });
            html_form+='</tr>';
            $('#table-data').append(html_form);
            multData[multData.length] = formObj;
            finalData.push(multData);
            var sds = '<div id="myModal'+formObj['id']+'" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">'+
                '<div class="modal-dialog modal-lg">'+
            '<div class="modal-content">'+
            '<div class="modal-header">'+
            '<div class="company">'+
            '<div class="container-fluid">'+
            '<div class="header-top clearfix">'+
            '<div class="col-sm-5">'+
            '<div class="office-details">'+
            '<p>Head Office & Factory:</br>'+
            'No 2, Jalan Asam Jawa 16/15 Seksyen 16,</br>'+
            'Kawasan Perindustrian Shah Alam.</br>'+
            '40200,Shah Alam, Selangor Darul Ehsan </br>'+
            'Tel;03-6541635</br>'+
            'Fax: 03-678756</br>'+
            'Email:indkom@tm.net.my</br>'+
            'Web:www.indkom.com</p>'+
            '</div>'+
            '</div>'+
            '<div class="col-sm-3 col-sm-offset-4">'+
            '<div class="logo logo-right"><h2>INDKOM</h2><p>ENGINEERING SDN . BHD</p></div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '<div class="modal-body">'+
            '<div class="product-list">'+
            '<div class="container-fluid">'+
            '<div class="row">'+
            '<div class="product-masterlist all-list-item finish-good-padding clearfix">'+
            '<div class="deviler-details clearfix">'+
            '<div class="col-sm-6">'+
            '<div class="deliver-item">'+
            '<h4>DELIVER TO :</h4>'+
            '<p>'+formObj['del_to']+'</p>'+
            '</div>'+
            '</div>'+
            '<div class="col-sm-4 col-sm-offset-2">'+
            '<div class="delivery-order">'+
            '<div class="order-btn">'+
            '<p class="order-no"><span>Delivery Order no :</span><span id="genarate-code"></span>'+formObj['do_no']+'</p>'+
            '<p class="biling">NON BILLING</p>'+
            '</div>'+
            '<div class="prepared-table">'+
            '<div class="prepared-by-item">'+
            '<h2>Prepared by</h2>'+
            '<h3 class="author-name" style="padding:10px 0px;"></h3>'+
            '</div>'+
            '<div class="prepared-by-item">'+
            '<h2>Date</h2>'+
            '<h3 class="date">'+formObj['date']+'</h3>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '<div class="product-list-table clearfix">'+
            '<table class="table table-bordered">'+
            '<thead>'+
            '<tr>'+
            '<th>ITEMS</th>'+
            '<th>QUANTITY</th>'+
            '<th>PART NAME</th>'+
            '</tr>'+
            '</thead>'+
            '<tbody>'+
            '<tr>'+
            '<td class="row-height">'+formObj['id']+'</td>'+
            '<td class="row-height">'+formObj['qty']+'</td>'+
            '<td class="row-height">'+formObj['part_name']+'</td>'+
            '</tr>'+
            '</tbody>'+
            '</table>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div><!--end model body-->'+
                '<div class="modal-footer" id="modal-footer-'+formObj['id']+'">'+
                '<form id="final-form'+formObj['id']+'">'+
                '<input name="date" type="hidden" value="'+formObj['date']+'">'+
                '<input name="do_no" type="hidden" value="'+formObj['do_no']+'">'+
                '<input name="part_no" type="hidden" value="'+formObj['part_no']+'">'+
                '<input name="part_name" type="hidden" value="'+formObj['part_name']+'">'+
                '<input name="del_to" type="hidden" value="'+formObj['del_to']+'">'+
                '<input name="po_no" type="hidden" value="'+formObj['po_no']+'">'+
                '<input name="qty" type="hidden" value="'+formObj['qty']+'">'+
                '<input name="remarks" type="hidden" value="'+formObj['remarks']+'">'+
                    '<input type="hidden" name="prepared_by" value="<?php echo $pic; ?>">'+
                    '<input type="hidden" name="stat" value="pending">'+
                '<input type="submit" class="btn btn-default" value="Submit"></form>'+
            '</div>'+
            '</div>'+
            '</div>'+
            '</div>';
            $('#all-modals').append(sds);
            id_no+=1;
        });

        $('#final-submit').on('click', function(e){
            $('.modal').modal('hide');
            for(var j = 1; j < id_no; j++){
                $('#myModal'+j).modal('show');
            }
            e.preventDefault();
            for(var k = 1; k < id_no; k++){
                $('#final-form'+k).on('submit', function(a){
                    a.preventDefault();
                    var formData = $(this).serialize();
                    var modalId = $(this).parent().attr('id');

                    $.ajax({
                        type: 'POST',
                        url: '<?php echo $this->Url->build(['Controller' => 'BillingDeliveryOrder', 'action' => 'addItems']); ?>',
                        data: formData,
                        dataType: 'text',
                        success: function(data, textStatus, xhr){
                            //alert(data);
                            $('#'+modalId).html(data+'<br><button class="btn btn-default" data-dismiss="modal">Close</button>');
                        },
                        error: function(xhr, textStatus, error){
                            //alert(textStatus);
                            $('#'+modalId).html(textStatus+'<br><button class="btn btn-default" data-dismiss="modal">Close</button>');
                        }
                    });
                    return false;
                });
            }
        });

        var po_no = [<?php echo $po_no; ?>];

        $('#po-no-bill').autocomplete({
            source : po_no,
            minLength : 0
        });

    });
</script>