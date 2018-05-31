<div class="product-list">
    <div class="container">
        <div class="row">
            <div class="all-list-item clearfix">
                <h2 class="text-cl tfrom"><b>Product MasterList</b></h2>
                <div class="col-sm-8">
                    <form action="#">
                        <div class="form-group form-group-search clearfix">
                            <label class="fleft-label" for="search">Search By <span class="fright">:</span></label>
                            <select class="form-control form-control-search" id="search">
                                <option>Please Select</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                            <button type="submit" class="btn btn-default">
                                search
                            </button>
                        </div>
                    </form>
                </div>
                <div class="product-list-table clearfix">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('part_no') ?></th>
                            <th><?= $this->Paginator->sort('part_name') ?></th>
                            <th><?= $this->Paginator->sort('zon') ?></th>
                            <th><?= $this->Paginator->sort('rack') ?></th>
                            <th><?= $this->Paginator->sort('bn') ?></th>
                            <th><?= $this->Paginator->sort('product_level') ?></th>
                            <th><?= $this->Paginator->sort('uom') ?></th>
                            <th><?= $this->Paginator->sort('min_stock') ?></th>
                            <th><?= $this->Paginator->sort('max_stock') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($uitest as $uitest): ?>
                        <tr>
                            <td><?= $this->Number->format($uitest->id) ?></td>
                            <td><?= h($uitest->part_no) ?></td>
                            <td><?= h($uitest->part_name) ?></td>
                            <td><?= h($uitest->zon) ?></td>
                            <td><?= h($uitest->rack) ?></td>
                            <td><?= h($uitest->bn) ?></td>
                            <td><?= h($uitest->product_level) ?></td>
                            <td><?= h($uitest->uom) ?></td>
                            <td><?= h($uitest->min_stock) ?></td>
                            <td><?= h($uitest->max_stock) ?></td>
                        </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>