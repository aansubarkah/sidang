<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Meeting Entity
 *
 * @property int $id
 * @property int $assembly_id
 * @property int $cause_id
 * @property \Cake\I18n\Time $date
 * @property \Cake\I18n\Time $datecancel
 * @property string $causingcancel
 * @property bool $active
 *
 * @property \App\Model\Entity\Assembly $assembly
 * @property \App\Model\Entity\Cause $cause
 * @property \App\Model\Entity\Decision[] $decisions
 * @property \App\Model\Entity\Program[] $programs
 */
class Meeting extends Entity
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
