<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Bathroom $bathroom
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Bathrooms'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Buildings'), ['controller' => 'Buildings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Building'), ['controller' => 'Buildings', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="bathrooms form large-9 medium-8 columns content">
    <?= $this->Form->create($bathroom) ?>
    <fieldset>
        <legend><?= __('Add Bathroom') ?></legend>
        <?php
            echo $this->Form->control('floor');
            echo $this->Form->control('floor_room_str');
            echo $this->Form->control('room');
            echo $this->Form->control('use_name');
            echo $this->Form->control('building_id', ['options' => $buildings]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
