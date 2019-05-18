<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Review'), ['action' => 'edit', $review->review_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Review'), ['action' => 'delete', $review->review_id], ['confirm' => __('Are you sure you want to delete # {0}?', $review->review_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reviews'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Review'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Bathrooms'), ['controller' => 'Bathrooms', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Bathroom'), ['controller' => 'Bathrooms', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reviews view large-9 medium-8 columns content">
    <h3><?= h($review->review_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bathroom') ?></th>
            <td><?= $review->has('bathroom') ? $this->Html->link($review->bathroom->bathroom_id, ['controller' => 'Bathrooms', 'action' => 'view', $review->bathroom->bathroom_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Review Id') ?></th>
            <td><?= $this->Number->format($review->review_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cleanliness Score') ?></th>
            <td><?= $this->Number->format($review->cleanliness_score) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Odor Score') ?></th>
            <td><?= $this->Number->format($review->odor_score) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lighting Score') ?></th>
            <td><?= $this->Number->format($review->lighting_score) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Solitude Score') ?></th>
            <td><?= $this->Number->format($review->solitude_score) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Overall Rating') ?></th>
            <td><?= $this->Number->format($review->overall_rating) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('First Name') ?></h4>
        <?= $this->Text->autoParagraph(h($review->first_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Last Name') ?></h4>
        <?= $this->Text->autoParagraph(h($review->last_name)); ?>
    </div>
    <div class="row">
        <h4><?= __('Comment') ?></h4>
        <?= $this->Text->autoParagraph(h($review->comment)); ?>
    </div>
</div>
