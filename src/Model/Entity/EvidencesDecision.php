<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EvidencesDecision Entity
 *
 * @property int $id
 * @property int $evidence_id
 * @property int $decision_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property bool $active
 *
 * @property \App\Model\Entity\Evidence $evidence
 * @property \App\Model\Entity\Decision $decision
 */
class EvidencesDecision extends Entity
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
