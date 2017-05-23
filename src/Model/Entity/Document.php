<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Document Entity
 *
 * @property int $id
 * @property int $student_id
 * @property string $document_type
 * @property string $document_category_id
 * @property string $path_to_document
 * @property \Cake\I18n\Time $created
 *
 * @property \App\Model\Entity\Student $student
 * @property \App\Model\Entity\DocumentCategory $document_category
 */
class Document extends Entity
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
