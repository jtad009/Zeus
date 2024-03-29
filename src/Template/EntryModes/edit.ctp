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
                ['action' => 'delete', $entryMode->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $entryMode->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Entry Modes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entryModes form large-9 medium-8 columns content">
    <?= $this->Form->create($entryMode) ?>
    <fieldset>
        <legend><?= __('Edit Entry Mode') ?></legend>
        <?php
            echo $this->Form->input('entry_mode');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
