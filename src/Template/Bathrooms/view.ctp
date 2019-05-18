<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bathroom $bathroom
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Bathroom'), ['action' => 'edit', $bathroom->bathroom_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Bathroom'), ['action' => 'delete', $bathroom->bathroom_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bathroom->bathroom_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Bathrooms'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bathroom'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Buildings'), ['controller' => 'Buildings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Building'), ['controller' => 'Buildings', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="bathrooms view large-9 medium-8 columns content">
    <h3><?= h($bathroom->bathroom_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Building') ?></th>
            <td><?= $bathroom->has('building') ? $this->Html->link($bathroom->building->building_id, ['controller' => 'Buildings', 'action' => 'view', $bathroom->building->building_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Bathroom Id') ?></th>
            <td><?= $this->Number->format($bathroom->bathroom_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Floor') ?></th>
            <td><?= $this->Number->format($bathroom->floor) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Floor Room Str') ?></h4>
        <?= $this->Text->autoParagraph(h($bathroom->floor_room_str)); ?>
    </div>
    <div class="row">
        <h4><?= __('Room') ?></h4>
        <?= $this->Text->autoParagraph(h($bathroom->room)); ?>
    </div>
    <div class="row">
        <h4><?= __('Use Name') ?></h4>
        <?= $this->Text->autoParagraph(h($bathroom->use_name)); ?>
    </div>
</div>
