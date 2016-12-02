<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Evidences Model
 *
 * @property \Cake\ORM\Association\BelongsToMany $Decisions
 * @property \Cake\ORM\Association\BelongsToMany $Programs
 *
 * @method \App\Model\Entity\Evidence get($primaryKey, $options = [])
 * @method \App\Model\Entity\Evidence newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Evidence[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Evidence|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Evidence patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Evidence[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Evidence findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EvidencesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('evidences');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Decisions', [
            'foreignKey' => 'evidence_id',
            'targetForeignKey' => 'decision_id',
            'joinTable' => 'evidences_decisions'
        ]);
        $this->belongsToMany('Programs', [
            'foreignKey' => 'evidence_id',
            'targetForeignKey' => 'program_id',
            'joinTable' => 'evidences_programs'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        return $validator;
    }
}
