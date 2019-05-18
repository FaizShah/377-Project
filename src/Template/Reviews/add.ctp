<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Review $review
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Reviews'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Bathrooms'), ['controller' => 'Bathrooms', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Bathroom'), ['controller' => 'Bathrooms', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reviews form large-9 medium-8 columns content">
    <?= $this->Form->create($review) ?>
    <fieldset>
        <legend><?= __('Add Review') ?></legend>
        <?php
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('comment');
            echo $this->Form->control('cleanliness_score');
            echo $this->Form->control('odor_score');
            echo $this->Form->control('lighting_score');
            echo $this->Form->control('solitude_score');
            echo $this->Form->control('overall_rating');
            echo $this->Form->control('bathroom_id', ['options' => $bathrooms]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
