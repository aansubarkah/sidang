<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Decisions Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Meetings
 * @property \Cake\ORM\Association\HasMany $Administrations
 * @property \Cake\ORM\Association\BelongsToMany $Evidences
 *
 * @method \App\Model\Entity\Decision get($primaryKey, $options = [])
 * @method \App\Model\Entity\Decision newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Decision[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Decision|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Decision patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Decision[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Decision findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DecisionsTable extends Table
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

        $this->table('decisions');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Meetings', [
            'foreignKey' => 'meeting_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Administrations', [
            'foreignKey' => 'decision_id'
        ]);
        $this->belongsToMany('Evidences', [
            'foreignKey' => 'decision_id',
            'targetForeignKey' => 'evidence_id',
            'joinTable' => 'evidences_decisions'
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
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->requirePresence('number', 'create')
            ->notEmpty('number');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('content');

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
        $rules->add($rules->existsIn(['meeting_id'], 'Meetings'));

        return $rules;
    }
}
