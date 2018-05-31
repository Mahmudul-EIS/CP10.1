<div class="product-list">
    <div class="container">
        <div class="row">
            <div class="product-masterlist all-list-item finish-good-padding clearfix">
                <h2 class="text-cl tfrom"><b>MR Reporting</b></h2>
                <div class="product-list-table clearfix">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Date Issued</th>
                            <th>MR No</th>
                            <th>CCAR No</th>
                            <th>Section</th>
                            <th>Department</th>
                            <th>Approval</th>
                            <th>Status</th>
                            <th>Job</th>
                            <th>Document</th>
                            <th>Remarks</th>
                            <th>Approve</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($mr as $data): ?>
                            <tr>
                                <td><?= $this->Number->format($data->id) ?></td>
                                <td><?= h($data->date_issue) ?></td>
                                <td><?= $this->Number->format($data->id) ?></td>
                                <td><?= h($data->ccar_no) ?></td>
                                <td><?= h($data->sect) ?></td>
                                <td><?= h($data->dept) ?></td>
                                <td><?= h($data->approve) ?></td>
                                <td><?= h($data->stat) ?></td>
                                <td><?= h($data->job) ?></td>
                                <td><?= h($data->docs) ?></td>
                                <td><?= h($data->remarks) ?></td>
                                <td><?= $this->Html->link(__('Approve'), ['action' => 'approve', $data->id], ['class' => 'btn btn-info']) ?></td>
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