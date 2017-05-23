<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StudentsProject Entity
 *
 * @property string $id
 * @property int $student_id
 * @property string $project_id
 * @property \Cake\I18n\Time $assigned_date
 * @property \Cake\I18n\Time $completion_date
 * @property string $status
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\Project $project
 */
class StudentsProject extends Entity
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
