<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit State'), ['action' => 'edit', $state->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete State'), ['action' => 'delete', $state->id], ['confirm' => __('Are you sure you want to delete # {0}?', $state->id)]) ?> </li>
        <li><?= $this->Html->link(__('List States'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New State'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Lgas'), ['controller' => 'Lgas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lga'), ['controller' => 'Lgas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Students'), ['controller' => 'Students', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Student'), ['controller' => 'Students', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="states view large-9 medium-8 columns content">
    <h3><?= h($state->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($state->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($state->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lga Count') ?></th>
            <td><?= $this->Number->format($state->lga_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($state->created) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Lgas') ?></h4>
        <?php if (!empty($state->lgas)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($state->lgas as $lgas): ?>
            <tr>
                <td><?= h($lgas->id) ?></td>
                <td><?= h($lgas->state_id) ?></td>
                <td><?= h($lgas->name) ?></td>
                <td><?= h($lgas->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Lgas', 'action' => 'view', $lgas->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Lgas', 'action' => 'edit', $lgas->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Lgas', 'action' => 'delete', $lgas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lgas->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Students') ?></h4>
        <?php if (!empty($state->students)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Middle Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Faculty Id') ?></th>
                <th scope="col"><?= __('Department Id') ?></th>
                <th scope="col"><?= __('Program Id') ?></th>
                <th scope="col"><?= __('Program Type Id') ?></th>
                <th scope="col"><?= __('Level') ?></th>
                <th scope="col"><?= __('Student Type Id') ?></th>
                <th scope="col"><?= __('Gender') ?></th>
                <th scope="col"><?= __('Marital Status') ?></th>
                <th scope="col"><?= __('Date Of Birth') ?></th>
                <th scope="col"><?= __('Place Of Birth Id') ?></th>
                <th scope="col"><?= __('Home Town Id') ?></th>
                <th scope="col"><?= __('Lga Id') ?></th>
                <th scope="col"><?= __('State Id') ?></th>
                <th scope="col"><?= __('Country Id') ?></th>
                <th scope="col"><?= __('Contact Address') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Home Address') ?></th>
                <th scope="col"><?= __('Mobile Telephone No') ?></th>
                <th scope="col"><?= __('Kin First Name') ?></th>
                <th scope="col"><?= __('Kin Last Name') ?></th>
                <th scope="col"><?= __('Kin Address') ?></th>
                <th scope="col"><?= __('Kin Telephone') ?></th>
                <th scope="col"><?= __('Blood Group') ?></th>
                <th scope="col"><?= __('Genotype') ?></th>
                <th scope="col"><?= __('Disability Id') ?></th>
                <th scope="col"><?= __('Disability Count') ?></th>
                <th scope="col"><?= __('Sponsor') ?></th>
                <th scope="col"><?= __('Other Sponsor') ?></th>
                <th scope="col"><?= __('Entry Mode Id') ?></th>
                <th scope="col"><?= __('Sport Id') ?></th>
                <th scope="col"><?= __('Extra Cirricular Activities') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($state->students as $students): ?>
            <tr>
                <td><?= h($students->id) ?></td>
                <td><?= h($students->first_name) ?></td>
                <td><?= h($students->middle_name) ?></td>
                <td><?= h($students->last_name) ?></td>
                <td><?= h($students->faculty_id) ?></td>
                <td><?= h($students->department_id) ?></td>
                <td><?= h($students->program_id) ?></td>
                <td><?= h($students->program_type_id) ?></td>
                <td><?= h($students->level) ?></td>
                <td><?= h($students->student_type_id) ?></td>
                <td><?= h($students->gender) ?></td>
                <td><?= h($students->marital_status) ?></td>
                <td><?= h($students->date_of_birth) ?></td>
                <td><?= h($students->place_of_birth_id) ?></td>
                <td><?= h($students->home_town_id) ?></td>
                <td><?= h($students->lga_id) ?></td>
                <td><?= h($students->state_id) ?></td>
                <td><?= h($students->country_id) ?></td>
                <td><?= h($students->contact_address) ?></td>
                <td><?= h($students->email) ?></td>
                <td><?= h($students->home_address) ?></td>
                <td><?= h($students->mobile_telephone_no) ?></td>
                <td><?= h($students->kin_first_name) ?></td>
                <td><?= h($students->kin_last_name) ?></td>
                <td><?= h($students->kin_address) ?></td>
                <td><?= h($students->kin_telephone) ?></td>
                <td><?= h($students->blood_group) ?></td>
                <td><?= h($students->genotype) ?></td>
                <td><?= h($students->disability_id) ?></td>
                <td><?= h($students->disability_count) ?></td>
                <td><?= h($students->sponsor) ?></td>
                <td><?= h($students->other_sponsor) ?></td>
                <td><?= h($students->entry_mode_id) ?></td>
                <td><?= h($students->sport_id) ?></td>
                <td><?= h($students->extra_cirricular_activities) ?></td>
                <td><?= h($students->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Students', 'action' => 'view', $students->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Students', 'action' => 'edit', $students->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Students', 'action' => 'delete', $students->id], ['confirm' => __('Are you sure you want to delete # {0}?', $students->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
