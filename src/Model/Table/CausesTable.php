<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Causes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categories
 * @property \Cake\ORM\Association\HasMany $Meetings
 * @property \Cake\ORM\Association\BelongsToMany $Assemblies
 * @property \Cake\ORM\Association\BelongsToMany $Clients
 *
 * @method \App\Model\Entity\Cause get($primaryKey, $options = [])
 * @method \App\Model\Entity\Cause newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Cause[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Cause|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Cause patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Cause[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Cause findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CausesTable extends Table
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

        $this->table('causes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Meetings', [
            'foreignKey' => 'cause_id'
        ]);
        $this->belongsToMany('Assemblies', [
            'foreignKey' => 'cause_id',
            'targetForeignKey' => 'assembly_id',
            'joinTable' => 'assemblies_causes'
        ]);
        $this->belongsToMany('Clients', [
            'foreignKey' => 'cause_id',
            'targetForeignKey' => 'client_id',
            'joinTable' => 'causes_clients'
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
            ->requirePresence('number', 'create')
            ->notEmpty('number');

        $validator
            ->date('dateregister')
            ->allowEmpty('dateregister');

        $validator
            ->date('datepmh')
            ->allowEmpty('datepmh');

        $validator
            ->date('datephs')
            ->allowEmpty('datephs');

        $validator
            ->date('dateppp')
            ->allowEmpty('dateppp');

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
        $rules->add($rules->existsIn(['category_id'], 'Categories'));

        return $rules;
    }
}
