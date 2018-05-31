<div class="product-list">
    <div class="container">
        <div class="row">
            <div class="product-masterlist all-list-item finish-good-padding clearfix">
                <h2 class="text-cl tfrom"><b>Gate Pass Reporting</b></h2>
                <div class="product-list-table clearfix">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Date</th>
                            <th>DO no</th>
                            <th>Product name</th>
                            <th>Approve</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($gp as $gp): ?>
                            <tr>
                                <td><?= $this->Number->format($gp->id) ?></td>
                                <td><?= h($gp->date) ?></td>
                                <td><?= h($gp->do_no) ?></td>
                                <td><?= h($gp->prod_name) ?></td>
                                <td><?= $this->Html->link(__('Approve'), ['action' => 'approve', $gp->id], ['class' => 'btn btn-info']) ?></td>
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