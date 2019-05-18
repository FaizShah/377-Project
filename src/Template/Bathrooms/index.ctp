<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bathroom[]|\Cake\Collection\CollectionInterface $bathrooms
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Bathroom'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Buildings'), ['controller' => 'Buildings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Building'), ['controller' => 'Buildings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bathrooms index large-9 medium-8 columns content">
    <h3><?= __('Bathrooms') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('bathroom_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('floor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('building_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($bathrooms as $bathroom): ?>
            <tr>
                <td><?= $this->Number->format($bathroom->bathroom_id) ?></td>
                <td><?= $this->Number->format($bathroom->floor) ?></td>
                <td><?= $bathroom->has('building') ? $this->Html->link($bathroom->building->building_id, ['controller' => 'Buildings', 'action' => 'view', $bathroom->building->building_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $bathroom->bathroom_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $bathroom->bathroom_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $bathroom->bathroom_id], ['confirm' => __('Are you sure you want to delete # {0}?', $bathroom->bathroom_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
