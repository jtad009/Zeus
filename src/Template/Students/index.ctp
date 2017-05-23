<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Programs'), ['controller' => 'Programs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Program'), ['controller' => 'Programs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Program Types'), ['controller' => 'ProgramTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Program Type'), ['controller' => 'ProgramTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Student Types'), ['controller' => 'StudentTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Student Type'), ['controller' => 'StudentTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Lgas'), ['controller' => 'Lgas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Lga'), ['controller' => 'Lgas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Entry Modes'), ['controller' => 'EntryModes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Entry Mode'), ['controller' => 'EntryModes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sports'), ['controller' => 'Sports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sport'), ['controller' => 'Sports', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Disabilties'), ['controller' => 'Disabilties', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Disabilty'), ['controller' => 'Disabilties', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="students index large-9 medium-8 columns content">
    <h3><?= __('Students') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('middle_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('faculty_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('department_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('program_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('program_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('student_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('marital_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date_of_birth') ?></th>
                <th scope="col"><?= $this->Paginator->sort('place_of_birth_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_town_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lga_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('home_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile_telephone_no') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kin_first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kin_last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kin_address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('kin_telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disability_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('disability_count') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sponsor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('other_sponsor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('entry_mode_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sport_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('extra_cirricular_activities') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
            <tr>
                <td><?= $this->Number->format($student->id) ?></td>
                <td><?= h($student->first_name) ?></td>
                <td><?= h($student->middle_name) ?></td>
                <td><?= h($student->last_name) ?></td>
                <td><?= $student->has('faculty') ? $this->Html->link($student->faculty->name, ['controller' => 'Faculties', 'action' => 'view', $student->faculty->id]) : '' ?></td>
                <td><?= $student->has('department') ? $this->Html->link($student->department->name, ['controller' => 'Departments', 'action' => 'view', $student->department->id]) : '' ?></td>
                <td><?= $student->has('program') ? $this->Html->link($student->program->id, ['controller' => 'Programs', 'action' => 'view', $student->program->id]) : '' ?></td>
                <td><?= $student->has('program_type') ? $this->Html->link($student->program_type->id, ['controller' => 'ProgramTypes', 'action' => 'view', $student->program_type->id]) : '' ?></td>
                <td><?= $student->has('student_type') ? $this->Html->link($student->student_type->id, ['controller' => 'StudentTypes', 'action' => 'view', $student->student_type->id]) : '' ?></td>
                <td><?= h($student->marital_status) ?></td>
                <td><?= h($student->date_of_birth) ?></td>
                <td><?= $this->Number->format($student->place_of_birth_id) ?></td>
                <td><?= $this->Number->format($student->home_town_id) ?></td>
                <td><?= $student->has('lga') ? $this->Html->link($student->lga->name, ['controller' => 'Lgas', 'action' => 'view', $student->lga->id]) : '' ?></td>
                <td><?= $student->has('state') ? $this->Html->link($student->state->name, ['controller' => 'States', 'action' => 'view', $student->state->id]) : '' ?></td>
                <td><?= $student->has('country') ? $this->Html->link($student->country->id, ['controller' => 'Countries', 'action' => 'view', $student->country->id]) : '' ?></td>
                <td><?= h($student->contact_address) ?></td>
                <td><?= h($student->email) ?></td>
                <td><?= h($student->home_address) ?></td>
                <td><?= h($student->mobile_telephone_no) ?></td>
                <td><?= h($student->kin_first_name) ?></td>
                <td><?= h($student->kin_last_name) ?></td>
                <td><?= h($student->kin_address) ?></td>
                <td><?= h($student->kin_telephone) ?></td>
                <td><?= $this->Number->format($student->disability_id) ?></td>
                <td><?= $this->Number->format($student->disability_count) ?></td>
                <td><?= h($student->sponsor) ?></td>
                <td><?= h($student->other_sponsor) ?></td>
                <td><?= $student->has('entry_mode') ? $this->Html->link($student->entry_mode->id, ['controller' => 'EntryModes', 'action' => 'view', $student->entry_mode->id]) : '' ?></td>
                <td><?= $student->has('sport') ? $this->Html->link($student->sport->id, ['controller' => 'Sports', 'action' => 'view', $student->sport->id]) : '' ?></td>
                <td><?= h($student->extra_cirricular_activities) ?></td>
                <td><?= h($student->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $student->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $student->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?>
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
