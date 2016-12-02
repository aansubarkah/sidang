<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Administration Entity
 *
 * @property int $id
 * @property int $decision_id
 * @property \Cake\I18n\Time $date
 * @property \Cake\I18n\Time $datepbt
 * @property \Cake\I18n\Time $datebht
 * @property \Cake\I18n\Time $datephs
 * @property \Cake\I18n\Time $dateikrar
 * @property \Cake\I18n\Time $datesetor
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $active
 *
 * @property \App\Model\Entity\Decision $decision
 */
class Administration extends Entity
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
