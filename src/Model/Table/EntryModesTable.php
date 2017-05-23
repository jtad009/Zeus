<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EntryModes Model
 *
 * @property \Cake\ORM\Association\HasMany $Students
 *
 * @method \App\Model\Entity\EntryMode get($primaryKey, $options = [])
 * @method \App\Model\Entity\EntryMode newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EntryMode[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EntryMode|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EntryMode patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EntryMode[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EntryMode findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EntryModesTable extends Table
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

        $this->table('entry_modes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Students', [
            'foreignKey' => 'entry_mode_id'
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
            ->requirePresence('entry_mode', 'create')
            ->notEmpty('entry_mode');

        return $validator;
    }
}
