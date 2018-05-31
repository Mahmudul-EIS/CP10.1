<div class="product-list">
    <div class="container">
        <div class="row">
            <div class="product-masterlist all-list-item finish-good-padding clearfix">
                <h2 class="text-cl tfrom"><b>SCN Reporting</b></h2>
                <div class="product-list-table clearfix">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>Ref No</th>
                            <th>PIC</th>
                            <th>Approve</th>
                            <th>Status</th>
                            <th>Remarks</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($scn as $sd): ?>
                            <tr>
                                <td><?= $this->Number->format($sd->id) ?></td>
                                <td><?= h($sd->date) ?></td>
                                <td><?= h($sd->ref_no) ?></td>
                                <td><?= h($sd->pic) ?></td>
                                <td><?= $this->Html->link(__('Approve'), ['action' => 'approve', $sd->id], ['class' => 'btn btn-info']) ?></td>
                                <td><?= h($sd->stat) ?></td>
                                <td><?= h($sd->remarks) ?></td>
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