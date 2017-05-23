<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Disabilty'), ['action' => 'edit', $disabilty->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Disabilty'), ['action' => 'delete', $disabilty->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disabilty->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Disabilties'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disabilty'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="disabilties view large-9 medium-8 columns content">
    <h3><?= h($disabilty->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Disability') ?></th>
            <td><?= h($disabilty->disability) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Student') ?></th>
            <td><?= $disabilty->has('student') ? $this->Html->link($disabilty->student->id, ['controller' => 'Students', 'action' => 'view', $disabilty->student->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($disabilty->id) ?></td>
        </tr>
    </table>
</div>
