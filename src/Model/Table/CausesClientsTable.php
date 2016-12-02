<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CausesClients Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Causes
 * @property \Cake\ORM\Association\BelongsTo $Clients
 *
 * @method \App\Model\Entity\CausesClient get($primaryKey, $options = [])
 * @method \App\Model\Entity\CausesClient newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CausesClient[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CausesClient|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CausesClient patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CausesClient[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CausesClient findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CausesClientsTable extends Table
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

        $this->table('causes_clients');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Causes', [
            'foreignKey' => 'cause_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
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
            ->boolean('position')
            ->requirePresence('position', 'create')
            ->notEmpty('position');

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
        $rules->add($rules->existsIn(['cause_id'], 'Causes'));
        $rules->add($rules->existsIn(['client_id'], 'Clients'));

        return $rules;
    }
}
