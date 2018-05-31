<div class="product-list">
    <div class="container">
        <div class="row">
            <div class="product-masterlist all-list-item finish-good-padding clearfix">
                <h2 class="text-cl tfrom"><b>Non Billing Delivery order REPORTING</b></h2>
                <div class="product-list-table clearfix">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>Do No</th>
                            <th>Part No</th>
                            <th>Part Name</th>
                            <th>Quantity</th>
                            <th>Deliver To</th>
                            <th>Approve</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($nbdo as $nr): ?>
                            <tr>
                                <td><?= $this->Number->format($nr->id) ?></td>
                                <td><?= h($nr->date) ?></td>
                                <td><?= h($nr->do_no) ?></td>
                                <td><?= h($nr->part_no) ?></td>
                                <td><?= h($nr->part_name) ?></td>
                                <td><?= h($nr->qty) ?></td>
                                <td><?= h($nr->del_to) ?></td>
                                <td><?= $this->Html->link(__('Approve'), ['action' => 'approve', $nr->id], ['class' => 'btn btn-info']) ?></td>
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