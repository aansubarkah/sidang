<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EvidencesPrograms Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Evidences
 * @property \Cake\ORM\Association\BelongsTo $Programs
 *
 * @method \App\Model\Entity\EvidencesProgram get($primaryKey, $options = [])
 * @method \App\Model\Entity\EvidencesProgram newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EvidencesProgram[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EvidencesProgram|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EvidencesProgram patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EvidencesProgram[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EvidencesProgram findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EvidencesProgramsTable extends Table
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

        $this->table('evidences_programs');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Evidences', [
            'foreignKey' => 'evidence_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Programs', [
            'foreignKey' => 'program_id',
            'joinType' => 'INNER'
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
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['evidence_id'], 'Evidences'));
        $rules->add($rules->existsIn(['program_id'], 'Programs'));

        return $rules;
    }
}
