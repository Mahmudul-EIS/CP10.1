<div class="product-list">
    <div class="container-fluid  sm-fluid">
        <div class="row">
            <div class="all-list-item clearfix">
                <div class="list-item-title clearfix">
                    <div class="col-sm-6 padding-zero br-border text-center">
                        <h2 class="text-cl bg-cl">Indkom engineering Sdn Bhd</h2>
                    </div>
                    <div class="col-sm-6 padding-zero text-center">
                        <h2 class="text-cl bg-cl">Gate Pass Single Report</h2>
                    </div>
                </div>
                <div class="metarial-requisition clearfix">
                    <div class="col-sm-offset-1 col-sm-6 selection-padding clearfix">
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>Date <span class="fright">:</span></p>
                            </div>
                            <?php foreach($finalData as $finalData): ?>
                            <div class="time-ticket">
                                <p><?php echo $finalData->date; ?></p>
                            </div>
                        </div>
                        <div class="ticket-item">
                            <div class="label-date">
                                <p>DO No <span class="fright">:</span></p>
                            </div>
                            <div class="time-ticket">
                                <p><?php echo $finalData->do_no; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-sm-offset-8 metarial-re clearfix">
                        <div class="prepared-by-item">
                            <h2>Requested by</h2>
                            <h3 class="author-name"><b><?php echo $finalData->prepared_by; ?></b></h3>
                        </div>
                        <div class="prepared-by-item">
                            <h2>Planner</h2>
                            <h3 class="author-name"><b><?php echo $finalData->approved_by; ?></b></h3>
                        </div>
                    </div>
                </div>
                <div class="product-list-table clearfix">
                    <table class="table table-bordered ">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Part name</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Remarks</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><?php echo $finalData->part_name; ?></td>
                            <td><?php echo $finalData->quantity; ?></td>
                            <td><?php echo $finalData->stat; ?></td>
                            <td><?php echo $finalData->remarks_prep; ?></td>
                        </tr>
                        </tbody>
                    </table>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>