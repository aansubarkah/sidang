<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Meetings Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Assemblies
 * @property \Cake\ORM\Association\BelongsTo $Causes
 * @property \Cake\ORM\Association\HasMany $Decisions
 * @property \Cake\ORM\Association\HasMany $Programs
 *
 * @method \App\Model\Entity\Meeting get($primaryKey, $options = [])
 * @method \App\Model\Entity\Meeting newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Meeting[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Meeting|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Meeting patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Meeting[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Meeting findOrCreate($search, callable $callback = null)
 */
class MeetingsTable extends Table
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

        $this->table('meetings');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Assemblies', [
            'foreignKey' => 'assembly_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Causes', [
            'foreignKey' => 'cause_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Decisions', [
            'foreignKey' => 'meeting_id'
        ]);
        $this->hasMany('Programs', [
            'foreignKey' => 'meeting_id'
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
            ->date('datecancel')
            ->allowEmpty('datecancel');

        $validator
            ->allowEmpty('causingcancel');

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
