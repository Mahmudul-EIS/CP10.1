<div class="product-list">
    <div class="container">
        <div class="row">
            <div class="product-masterlist all-list-item finish-good-padding clearfix">
                <h2 class="text-cl tfrom"><b>RTVN REPORTING</b></h2>
                <div class="product-list-table clearfix">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>RTVN No</th>
                            <th>MDR No</th>
                            <th>Vendor</th>
                            <th>Part No</th>
                            <th>Part Name</th>
                            <th>Qty</th>
                            <th>Qty Rec</th>
                            <th>Qty O/S</th>
                            <th>DO Date</th>
                            <th>Approve</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($rtvn as $ad): ?>
                            <tr>
                                <td><?= $this->Number->format($ad->id) ?></td>
                                <td><?= h($ad->date) ?></td>
                                <td><?= h($ad->rtvn_no) ?></td>
                                <td><?= h($ad->mdr_no) ?></td>
                                <td><?= h($ad->vendor) ?></td>
                                <td><?= h($ad->part_no) ?></td>
                                <td><?= h($ad->part_name) ?></td>
                                <td><?= h($ad->qty) ?></td>
                                <td><?= h($ad->qty_rec) ?></td>
                                <td><?= h($ad->qty_os) ?></td>
                                <td><?= h($ad->date) ?></td>
                                <td><?= $this->Html->link(__('Approve'), ['action' => 'approve', $ad->id], ['class' => 'btn btn-info']) ?></td>
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