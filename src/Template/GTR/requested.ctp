<div class="product-list">
    <div class="container">
        <div class="row">
            <div class="product-masterlist all-list-item finish-good-padding clearfix">
                <h2 class="text-cl tfrom"><b>GTR REPORTING</b></h2>
                <div class="product-list-table clearfix">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>Ref No</th>
                            <th>PIC Customer</th>
                            <th>Transporter</th>
                            <th>Vehicle No</th>
                            <th>FG Code</th>
                            <th>Seriel No</th>
                            <th>Approve</th>
                            <th>Qty</th>
                            <th>Purpose of Transferred</th>
                            <th>Remarks</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($gtr as $gd): ?>
                            <tr>
                                <td><?= $this->Number->format($gd->id) ?></td>
                                <td><?= h($gd->date) ?></td>
                                <td><?= h($gd->ref_no) ?></td>
                                <td><?= h($gd->prepared_by) ?></td>
                                <td><?= h($gd->transporter) ?></td>
                                <td><?= h($gd->veh_no) ?></td>
                                <td><?= h($gd->fg_code) ?></td>
                                <td><?= h($gd->ser_no) ?></td>
                                <td><?= $this->Html->link(__('Approve'), ['action' => 'approve', $gd->id], ['class' => 'btn btn-info']) ?></td>
                                <td><?= h($gd->qty) ?></td>
                                <td><?= h($gd->purpose_transfarred) ?></td>
                                <td><?= h($gd->remarks) ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>