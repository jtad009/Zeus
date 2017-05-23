<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $disabilty->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $disabilty->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Disabilties'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="disabilties form large-9 medium-8 columns content">
    <?= $this->Form->create($disabilty) ?>
    <fieldset>
        <legend><?= __('Edit Disabilty') ?></legend>
        <?php
            echo $this->Form->input('disability');
            echo $this->Form->input('student_id', ['options' => $students]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
