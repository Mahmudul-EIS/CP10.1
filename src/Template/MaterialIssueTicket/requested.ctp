<div class="product-list">
    <div class="container">
        <div class="row">
            <div class="product-masterlist all-list-item finish-good-padding clearfix">
                <h2 class="text-cl tfrom"><b>Mit Reporting</b></h2>
                <div class="product-list-table clearfix">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>Section</th>
                            <th>MIT No</th>
                            <th>Ref</th>
                            <th>Tender No/SO No</th>
                            <th>Prepared by</th>
                            <th>Status</th>
                            <th>Approve</th>
                            <th>Remarks</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($mit as $mit): ?>
                            <tr>
                                <td><?= $this->Number->format($mit->id) ?></td>
                                <td><?= h($mit->date) ?></td>
                                <td><?= h($mit->section) ?></td>
                                <td><?= h($mit->mit_no) ?></td>
                                <td><?= h($mit->ref) ?></td>
                                <td><?= h($mit->so_no) ?></td>
                                <td><?= h($mit->prepared_by) ?></td>
                                <td><?= h($mit->stat) ?></td>
                                <td><?= $this->Html->link(__('Approve'), ['action' => 'approve', $mit->id], ['class' => 'btn btn-info']) ?></td>
                                <td><?= h($mit->remarks) ?></td>
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