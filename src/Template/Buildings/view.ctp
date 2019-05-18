<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Building $building
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Building'), ['action' => 'edit', $building->building_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Building'), ['action' => 'delete', $building->building_id], ['confirm' => __('Are you sure you want to delete # {0}?', $building->building_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Buildings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Building'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="buildings view large-9 medium-8 columns content">
    <h3><?= h($building->building_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Building Id') ?></th>
            <td><?= $this->Number->format($building->building_id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Building Name') ?></h4>
        <?= $this->Text->autoParagraph(h($building->building_name)); ?>
    </div>
</div>
