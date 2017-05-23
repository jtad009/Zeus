<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Students Project'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="studentsProjects index large-9 medium-8 columns content">
    <h3><?= __('Students Projects') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('student_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('project_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assigned_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('completion_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($studentsProjects as $studentsProject): ?>
            <tr>
                <td><?= h($studentsProject->id) ?></td>
                <td><?= $studentsProject->has('student') ? $this->Html->link($studentsProject->student->id, ['controller' => 'Students', 'action' => 'view', $studentsProject->student->id]) : '' ?></td>
                <td><?= $studentsProject->has('project') ? $this->Html->link($studentsProject->project->id, ['controller' => 'Projects', 'action' => 'view', $studentsProject->project->id]) : '' ?></td>
                <td><?= h($studentsProject->assigned_date) ?></td>
                <td><?= h($studentsProject->completion_date) ?></td>
                <td><?= h($studentsProject->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $studentsProject->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $studentsProject->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $studentsProject->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studentsProject->id)]) ?>
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
