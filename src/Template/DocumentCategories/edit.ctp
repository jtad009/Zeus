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
                ['action' => 'delete', $documentCategory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $documentCategory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Document Categories'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="documentCategories form large-9 medium-8 columns content">
    <?= $this->Form->create($documentCategory) ?>
    <fieldset>
        <legend><?= __('Edit Document Category') ?></legend>
        <?php
            echo $this->Form->input('category');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>