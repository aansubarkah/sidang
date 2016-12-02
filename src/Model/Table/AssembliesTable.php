<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Assemblies Model
 *
 * @property \Cake\ORM\Association\HasMany $Meetings
 * @property \Cake\ORM\Association\BelongsToMany $Causes
 * @property \Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Assembly get($primaryKey, $options = [])
 * @method \App\Model\Entity\Assembly newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Assembly[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Assembly|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Assembly patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Assembly[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Assembly findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AssembliesTable extends Table
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

        $this->table('assemblies');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Meetings', [
            'foreignKey' => 'assembly_id'
        ]);
        $this->belongsToMany('Causes', [
            'foreignKey' => 'assembly_id',
            'targetForeignKey' => 'cause_id',
            'joinTable' => 'assemblies_causes'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'assembly_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'assemblies_users'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        return $validator;
    }
}
