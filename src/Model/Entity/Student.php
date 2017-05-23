<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Student Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $middle_name
 * @property string $last_name
 * @property string $faculty_id
 * @property string $department_id
 * @property string $program_id
 * @property string $program_type_id
 * @property string $level
 * @property int $student_type_id
 * @property string $gender
 * @property string $marital_status
 * @property \Cake\I18n\Time $date_of_birth
 * @property int $place_of_birth_id
 * @property int $home_town_id
 * @property int $lga_id
 * @property int $state_id
 * @property int $country_id
 * @property string $contact_address
 * @property string $email
 * @property string $home_address
 * @property string $mobile_telephone_no
 * @property string $kin_first_name
 * @property string $kin_last_name
 * @property string $kin_address
 * @property string $kin_telephone
 * @property string $blood_group
 * @property string $genotype
 * @property int $disability_id
 * @property int $disability_count
 * @property string $sponsor
 * @property string $other_sponsor
 * @property int $entry_mode_id
 * @property int $sport_id
 * @property string $extra_cirricular_activities
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\Faculty $faculty
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\Program $program
 * @property \App\Model\Entity\ProgramType $program_type
 * @property \App\Model\Entity\StudentType $student_type
 * @property \App\Model\Entity\PlaceOfBirth $place_of_birth
 * @property \App\Model\Entity\HomeTown $home_town
 * @property \App\Model\Entity\Lga $lga
 * @property \App\Model\Entity\State $state
 * @property \App\Model\Entity\Country $country
 * @property \App\Model\Entity\Disability $disability
 * @property \App\Model\Entity\EntryMode $entry_mode
 * @property \App\Model\Entity\Sport $sport
 * @property \App\Model\Entity\Disabilty[] $disabilties
 * @property \App\Model\Entity\Document[] $documents
 * @property \App\Model\Entity\Project[] $projects
 */
class Student extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
