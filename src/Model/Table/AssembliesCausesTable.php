<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AssembliesCauses Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Assemblies
 * @property \Cake\ORM\Association\BelongsTo $Causes
 *
 * @method \App\Model\Entity\AssembliesCause get($primaryKey, $options = [])
 * @method \App\Model\Entity\AssembliesCause newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AssembliesCause[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AssembliesCause|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AssembliesCause patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AssembliesCause[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AssembliesCause findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AssembliesCausesTable extends Table
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

        $this->table('assemblies_causes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Assemblies', [
            'foreignKey' => 'assembly_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Causes', [
            'foreignKey' => 'cause_id',
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
        $rules->add($rules->existsIn(['assembly_id'], 'Assemblies'));
        $rules->add($rules->existsIn(['cause_id'], 'Causes'));

        return $rules;
    }
}
