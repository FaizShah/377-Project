<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bathrooms Model
 *
 * @property \App\Model\Table\BuildingsTable|\Cake\ORM\Association\BelongsTo $Buildings
 *
 * @method \App\Model\Entity\Bathroom get($primaryKey, $options = [])
 * @method \App\Model\Entity\Bathroom newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Bathroom[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Bathroom|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bathroom saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Bathroom patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Bathroom[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Bathroom findOrCreate($search, callable $callback = null, $options = [])
 */
class BathroomsTable extends Table
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

        $this->setTable('bathrooms');
        $this->setDisplayField('bathroom_id');
        $this->setPrimaryKey('bathroom_id');

        $this->belongsTo('Buildings', [
            'foreignKey' => 'building_id',
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
            ->integer('bathroom_id')
            ->allowEmptyString('bathroom_id', 'create');

        $validator
            ->requirePresence('floor', 'create')
            ->allowEmptyString('floor', false);

        $validator
            ->scalar('floor_room_str')
            ->requirePresence('floor_room_str', 'create')
            ->allowEmptyString('floor_room_str', false);

        $validator
            ->scalar('room')
            ->requirePresence('room', 'create')
            ->allowEmptyString('room', false);

        $validator
            ->scalar('use_name')
            ->requirePresence('use_name', 'create')
            ->allowEmptyString('use_name', false);

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
        $rules->add($rules->existsIn(['building_id'], 'Buildings'));

        return $rules;
    }
}
