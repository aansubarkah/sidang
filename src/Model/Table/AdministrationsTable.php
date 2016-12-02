<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Administrations Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Decisions
 *
 * @method \App\Model\Entity\Administration get($primaryKey, $options = [])
 * @method \App\Model\Entity\Administration newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Administration[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Administration|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Administration patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Administration[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Administration findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AdministrationsTable extends Table
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

        $this->table('administrations');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Decisions', [
            'foreignKey' => 'decision_id',
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
            ->date('date')
            ->requirePresence('date', 'create')
            ->notEmpty('date');

        $validator
            ->date('datepbt')
            ->allowEmpty('datepbt');

        $validator
            ->date('datebht')
            ->allowEmpty('datebht');

        $validator
            ->date('datephs')
            ->allowEmpty('datephs');

        $validator
            ->date('dateikrar')
            ->allowEmpty('dateikrar');

        $validator
            ->date('datesetor')
            ->allowEmpty('datesetor');

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
        $rules->add($rules->existsIn(['decision_id'], 'Decisions'));

        return $rules;
    }
}
