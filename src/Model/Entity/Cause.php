<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cause Entity
 *
 * @property int $id
 * @property int $category_id
 * @property string $number
 * @property \Cake\I18n\Time $dateregister
 * @property \Cake\I18n\Time $datepmh
 * @property \Cake\I18n\Time $datephs
 * @property \Cake\I18n\Time $dateppp
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $active
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Meeting[] $meetings
 * @property \App\Model\Entity\Assembly[] $assemblies
 * @property \App\Model\Entity\Client[] $clients
 */
class Cause extends Entity
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
