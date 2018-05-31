<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product Masterlist'), ['action' => 'edit', $productMasterlist->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product Masterlist'), ['action' => 'delete', $productMasterlist->id], ['confirm' => __('Are you sure you want to delete # {0}?', $productMasterlist->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Product Masterlist'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product Masterlist'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="productMasterlist view large-9 medium-8 columns content">
    <h3><?= h($productMasterlist->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Part No') ?></th>
            <td><?= h($productMasterlist->part_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Part Name') ?></th>
            <td><?= h($productMasterlist->part_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Zon') ?></th>
            <td><?= h($productMasterlist->zon) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rack') ?></th>
            <td><?= h($productMasterlist->rack) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bn') ?></th>
            <td><?= h($productMasterlist->bn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Level') ?></th>
            <td><?= h($productMasterlist->product_level) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Uom') ?></th>
            <td><?= h($productMasterlist->uom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Min Stock') ?></th>
            <td><?= h($productMasterlist->min_stock) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Max Stock') ?></th>
            <td><?= h($productMasterlist->max_stock) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($productMasterlist->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($productMasterlist->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($productMasterlist->modified) ?></td>
        </tr>
    </table>
</div>
