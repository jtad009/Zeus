<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property string $id
 * @property string $topic
 * @property string $staff_id
 * @property string $completed
 * @property \Cake\I18n\Time $expected_completion_date
 * @property string $status
 *
 * @property \App\Model\Entity\Staff $staff
 * @property \App\Model\Entity\Student[] $students
 */
class Project extends Entity
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
