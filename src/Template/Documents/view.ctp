<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Document'), ['action' => 'edit', $document->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Document'), ['action' => 'delete', $document->id], ['confirm' => __('Are you sure you want to delete # {0}?', $document->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Documents'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Document Categories'), ['controller' => 'DocumentCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document Category'), ['controller' => 'DocumentCategories', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="documents view large-9 medium-8 columns content">
    <h3><?= h($document->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Student') ?></th>
            <td><?= $document->has('student') ? $this->Html->link($document->student->id, ['controller' => 'Students', 'action' => 'view', $document->student->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Document Category') ?></th>
            <td><?= $document->has('document_category') ? $this->Html->link($document->document_category->id, ['controller' => 'DocumentCategories', 'action' => 'view', $document->document_category->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Path To Document') ?></th>
            <td><?= h($document->path_to_document) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($document->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($document->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Document Type') ?></h4>
        <?= $this->Text->autoParagraph(h($document->document_type)); ?>
    </div>
</div>
