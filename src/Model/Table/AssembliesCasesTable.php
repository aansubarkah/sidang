<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AssembliesCases Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Assemblies
 * @property \Cake\ORM\Association\BelongsTo $Cases
 *
 * @method \App\Model\Entity\AssembliesCase get($primaryKey, $options = [])
 * @method \App\Model\Entity\AssembliesCase newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AssembliesCase[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AssembliesCase|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AssembliesCase patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AssembliesCase[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AssembliesCase findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AssembliesCasesTable extends Table
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

        $this->table('assemblies_cases');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Assemblies', [
            'foreignKey' => 'assembly_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Cases', [
            'foreignKey' => 'case_id',
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
        $rules->add($rules->existsIn(['case_id'], 'Cases'));

        return $rules;
    }
}