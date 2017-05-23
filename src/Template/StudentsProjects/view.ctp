<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Students Project'), ['action' => 'edit', $studentsProject->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Students Project'), ['action' => 'delete', $studentsProject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studentsProject->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Students Projects'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Students Project'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="studentsProjects view large-9 medium-8 columns content">
    <h3><?= h($studentsProject->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($studentsProject->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Student') ?></th>
            <td><?= $studentsProject->has('student') ? $this->Html->link($studentsProject->student->id, ['controller' => 'Students', 'action' => 'view', $studentsProject->student->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Project') ?></th>
            <td><?= $studentsProject->has('project') ? $this->Html->link($studentsProject->project->id, ['controller' => 'Projects', 'action' => 'view', $studentsProject->project->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assigned Date') ?></th>
            <td><?= h($studentsProject->assigned_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Completion Date') ?></th>
            <td><?= h($studentsProject->completion_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($studentsProject->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($studentsProject->status)); ?>
    </div>
</div>
