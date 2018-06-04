<div class="product-list">
    <div class="container">
        <div class="row">
            <div class="product-masterlist all-list-item finish-good-padding clearfix">
                <h2 class="text-cl tfrom"><b>Manual Stock Take</b></h2>
                <div class="product-list-table clearfix">
                    <table class="table table-bordered table2excel">
                        <thead>
                        <tr>
                            <th>NO</th>
                            <th>PART NO</th>
                            <th>PART NAME</th>
                            <th>STOCK TAKE DATE</th>
                            <th>CURRENT BALANCE</th>
                            <th>BALANCE BRING FORWARD</th>
                            <th>STOCK TAKE</th>
                            <th>DONE BY</th>
                            <th>REMARKS</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($stocks as $stock): ?>
                            <tr>
                                <td><?= $this->Number->format($stock->id) ?></td>
                                <td><?= h($stock->part_no) ?></td>
                                <td><?= h($stock->part_name) ?></td>
                                <td><?= h($stock->stock_take_date) ?></td>
                                <td><?= h($stock->current_balance) ?></td>
                                <td><?= h($stock->balance_bring_forward) ?></td>
                                <td>Manual</td>
                                <td><?= h($stock->pic) ?></td>
                                <td><?= h($stock->remarks) ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="pagination-indkom pull-right">
        <nav aria-label="Page navigation example">
          <ul class="pagination">
            <?php
                            echo $this->Paginator->prev(__('<<'), array('tag' => 'li', 'class' => 'page-item'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                            echo $this->Paginator->numbers(array('separator' => '','currentTag' => 'a', 'currentClass' => 'page-link active','tag' => 'li','first' => 1));
                            echo $this->Paginator->next(__('>>'), array('tag' => 'li','currentClass' => 'disabled'), null, array('tag' => 'li','class' => 'disabled','disabledTag' => 'a'));
                            ?>
          </ul>
        </nav>
    </div>
    </div>
</div>
</div>
