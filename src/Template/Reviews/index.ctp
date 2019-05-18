<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review[]|\Cake\Collection\CollectionInterface $reviews
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Review'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Bathrooms'), ['controller' => 'Bathrooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bathroom'), ['controller' => 'Bathrooms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reviews index large-9 medium-8 columns content">
    <h3><?= __('Reviews') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('review_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cleanliness_score') ?></th>
                <th scope="col"><?= $this->Paginator->sort('odor_score') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lighting_score') ?></th>
                <th scope="col"><?= $this->Paginator->sort('solitude_score') ?></th>
                <th scope="col"><?= $this->Paginator->sort('overall_rating') ?></th>
                <th scope="col"><?= $this->Paginator->sort('bathroom_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($reviews as $review): ?>
            <tr>
                <td><?= $this->Number->format($review->review_id) ?></td>
                <td><?= $this->Number->format($review->cleanliness_score) ?></td>
                <td><?= $this->Number->format($review->odor_score) ?></td>
                <td><?= $this->Number->format($review->lighting_score) ?></td>
                <td><?= $this->Number->format($review->solitude_score) ?></td>
                <td><?= $this->Number->format($review->overall_rating) ?></td>
                <td><?= $review->has('bathroom') ? $this->Html->link($review->bathroom->bathroom_id, ['controller' => 'Bathrooms', 'action' => 'view', $review->bathroom->bathroom_id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $review->review_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $review->review_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $review->review_id], ['confirm' => __('Are you sure you want to delete # {0}?', $review->review_id)]) ?>
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
