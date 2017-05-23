<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Student'), ['action' => 'edit', $student->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Student'), ['action' => 'delete', $student->id], ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Faculties'), ['controller' => 'Faculties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Faculty'), ['controller' => 'Faculties', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departments'), ['controller' => 'Departments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Department'), ['controller' => 'Departments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Programs'), ['controller' => 'Programs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Program'), ['controller' => 'Programs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Program Types'), ['controller' => 'ProgramTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Program Type'), ['controller' => 'ProgramTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Student Types'), ['controller' => 'StudentTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student Type'), ['controller' => 'StudentTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lgas'), ['controller' => 'Lgas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lga'), ['controller' => 'Lgas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['controller' => 'States', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['controller' => 'States', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Countries'), ['controller' => 'Countries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Country'), ['controller' => 'Countries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Entry Modes'), ['controller' => 'EntryModes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entry Mode'), ['controller' => 'EntryModes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sports'), ['controller' => 'Sports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sport'), ['controller' => 'Sports', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Disabilties'), ['controller' => 'Disabilties', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Disabilty'), ['controller' => 'Disabilties', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Documents'), ['controller' => 'Documents', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Document'), ['controller' => 'Documents', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Projects'), ['controller' => 'Projects', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Project'), ['controller' => 'Projects', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="students view large-9 medium-8 columns content">
    <h3><?= h($student->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($student->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Middle Name') ?></th>
            <td><?= h($student->middle_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($student->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Faculty') ?></th>
            <td><?= $student->has('faculty') ? $this->Html->link($student->faculty->name, ['controller' => 'Faculties', 'action' => 'view', $student->faculty->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= $student->has('department') ? $this->Html->link($student->department->name, ['controller' => 'Departments', 'action' => 'view', $student->department->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Program') ?></th>
            <td><?= $student->has('program') ? $this->Html->link($student->program->id, ['controller' => 'Programs', 'action' => 'view', $student->program->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Program Type') ?></th>
            <td><?= $student->has('program_type') ? $this->Html->link($student->program_type->id, ['controller' => 'ProgramTypes', 'action' => 'view', $student->program_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Student Type') ?></th>
            <td><?= $student->has('student_type') ? $this->Html->link($student->student_type->id, ['controller' => 'StudentTypes', 'action' => 'view', $student->student_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Marital Status') ?></th>
            <td><?= h($student->marital_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lga') ?></th>
            <td><?= $student->has('lga') ? $this->Html->link($student->lga->name, ['controller' => 'Lgas', 'action' => 'view', $student->lga->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= $student->has('state') ? $this->Html->link($student->state->name, ['controller' => 'States', 'action' => 'view', $student->state->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= $student->has('country') ? $this->Html->link($student->country->id, ['controller' => 'Countries', 'action' => 'view', $student->country->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Address') ?></th>
            <td><?= h($student->contact_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($student->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home Address') ?></th>
            <td><?= h($student->home_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile Telephone No') ?></th>
            <td><?= h($student->mobile_telephone_no) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kin First Name') ?></th>
            <td><?= h($student->kin_first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kin Last Name') ?></th>
            <td><?= h($student->kin_last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kin Address') ?></th>
            <td><?= h($student->kin_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kin Telephone') ?></th>
            <td><?= h($student->kin_telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sponsor') ?></th>
            <td><?= h($student->sponsor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Other Sponsor') ?></th>
            <td><?= h($student->other_sponsor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entry Mode') ?></th>
            <td><?= $student->has('entry_mode') ? $this->Html->link($student->entry_mode->id, ['controller' => 'EntryModes', 'action' => 'view', $student->entry_mode->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sport') ?></th>
            <td><?= $student->has('sport') ? $this->Html->link($student->sport->id, ['controller' => 'Sports', 'action' => 'view', $student->sport->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Extra Cirricular Activities') ?></th>
            <td><?= h($student->extra_cirricular_activities) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($student->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Place Of Birth Id') ?></th>
            <td><?= $this->Number->format($student->place_of_birth_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Home Town Id') ?></th>
            <td><?= $this->Number->format($student->home_town_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disability Id') ?></th>
            <td><?= $this->Number->format($student->disability_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Disability Count') ?></th>
            <td><?= $this->Number->format($student->disability_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date Of Birth') ?></th>
            <td><?= h($student->date_of_birth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($student->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Level') ?></h4>
        <?= $this->Text->autoParagraph(h($student->level)); ?>
    </div>
    <div class="row">
        <h4><?= __('Gender') ?></h4>
        <?= $this->Text->autoParagraph(h($student->gender)); ?>
    </div>
    <div class="row">
        <h4><?= __('Blood Group') ?></h4>
        <?= $this->Text->autoParagraph(h($student->blood_group)); ?>
    </div>
    <div class="row">
        <h4><?= __('Genotype') ?></h4>
        <?= $this->Text->autoParagraph(h($student->genotype)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Disabilties') ?></h4>
        <?php if (!empty($student->disabilties)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Disability') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($student->disabilties as $disabilties): ?>
            <tr>
                <td><?= h($disabilties->id) ?></td>
                <td><?= h($disabilties->disability) ?></td>
                <td><?= h($disabilties->student_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Disabilties', 'action' => 'view', $disabilties->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Disabilties', 'action' => 'edit', $disabilties->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Disabilties', 'action' => 'delete', $disabilties->id], ['confirm' => __('Are you sure you want to delete # {0}?', $disabilties->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Documents') ?></h4>
        <?php if (!empty($student->documents)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Student Id') ?></th>
                <th scope="col"><?= __('Document Type') ?></th>
                <th scope="col"><?= __('Document Category Id') ?></th>
                <th scope="col"><?= __('Path To Document') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($student->documents as $documents): ?>
            <tr>
                <td><?= h($documents->id) ?></td>
                <td><?= h($documents->student_id) ?></td>
                <td><?= h($documents->document_type) ?></td>
                <td><?= h($documents->document_category_id) ?></td>
                <td><?= h($documents->path_to_document) ?></td>
                <td><?= h($documents->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Documents', 'action' => 'view', $documents->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Documents', 'action' => 'edit', $documents->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Documents', 'action' => 'delete', $documents->id], ['confirm' => __('Are you sure you want to delete # {0}?', $documents->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Projects') ?></h4>
        <?php if (!empty($student->projects)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Topic') ?></th>
                <th scope="col"><?= __('Staff Id') ?></th>
                <th scope="col"><?= __('Completed') ?></th>
                <th scope="col"><?= __('Expected Completion Date') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($student->projects as $projects): ?>
            <tr>
                <td><?= h($projects->id) ?></td>
                <td><?= h($projects->topic) ?></td>
                <td><?= h($projects->staff_id) ?></td>
                <td><?= h($projects->completed) ?></td>
                <td><?= h($projects->expected_completion_date) ?></td>
                <td><?= h($projects->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Projects', 'action' => 'view', $projects->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Projects', 'action' => 'edit', $projects->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Projects', 'action' => 'delete', $projects->id], ['confirm' => __('Are you sure you want to delete # {0}?', $projects->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
