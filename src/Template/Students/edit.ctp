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
                ['action' => 'delete', $student->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $student->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Students'), ['action' => 'index']) ?></li>
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
<div class="students form large-9 medium-8 columns content">
    <?= $this->Form->create($student) ?>
    <fieldset>
        <legend><?= __('Edit Student') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('middle_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('faculty_id', ['options' => $faculties]);
            echo $this->Form->input('department_id', ['options' => $departments]);
            echo $this->Form->input('program_id', ['options' => $programs]);
            echo $this->Form->input('program_type_id', ['options' => $programTypes]);
            echo $this->Form->input('level');
            echo $this->Form->input('student_type_id', ['options' => $studentTypes]);
            echo $this->Form->input('gender');
            echo $this->Form->input('marital_status');
            echo $this->Form->input('date_of_birth');
            echo $this->Form->input('place_of_birth_id');
            echo $this->Form->input('home_town_id');
            echo $this->Form->input('lga_id', ['options' => $lgas]);
            echo $this->Form->input('state_id', ['options' => $states]);
            echo $this->Form->input('country_id', ['options' => $countries]);
            echo $this->Form->input('contact_address');
            echo $this->Form->input('email');
            echo $this->Form->input('home_address');
            echo $this->Form->input('mobile_telephone_no');
            echo $this->Form->input('kin_first_name');
            echo $this->Form->input('kin_last_name');
            echo $this->Form->input('kin_address');
            echo $this->Form->input('kin_telephone');
            echo $this->Form->input('blood_group');
            echo $this->Form->input('genotype');
            echo $this->Form->input('disability_id');
            echo $this->Form->input('disability_count');
            echo $this->Form->input('sponsor');
            echo $this->Form->input('other_sponsor');
            echo $this->Form->input('entry_mode_id', ['options' => $entryModes]);
            echo $this->Form->input('sport_id', ['options' => $sports]);
            echo $this->Form->input('extra_cirricular_activities');
            echo $this->Form->input('projects._ids', ['options' => $projects]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
