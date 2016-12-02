<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AssembliesUsers Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Assemblies
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\AssembliesUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\AssembliesUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AssembliesUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AssembliesUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AssembliesUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AssembliesUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AssembliesUser findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AssembliesUsersTable extends Table
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

        $this->table('assemblies_users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Assemblies', [
            'foreignKey' => 'assembly_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
            ->integer('id')
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
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
