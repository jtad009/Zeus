<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Staff Entity
 *
 * @property string $id
 * @property string $first_name
 * @property string $last_name
 * @property string $staff_type_id
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\StaffType $staff_type
 * @property \App\Model\Entity\Department[] $departments
 * @property \App\Model\Entity\Faculty[] $faculties
 * @property \App\Model\Entity\Project[] $projects
 */
class Staff extends Entity
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
