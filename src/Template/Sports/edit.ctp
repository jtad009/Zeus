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
                ['action' => 'delete', $sport->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sport->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Sports'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="sports form large-9 medium-8 columns content">
    <?= $this->Form->create($sport) ?>
    <fieldset>
        <legend><?= __('Edit Sport') ?></legend>
        <?php
            echo $this->Form->input('sport');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
