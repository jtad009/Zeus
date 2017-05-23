<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Students Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Faculties
 * @property \Cake\ORM\Association\BelongsTo $Departments
 * @property \Cake\ORM\Association\BelongsTo $Programs
 * @property \Cake\ORM\Association\BelongsTo $ProgramTypes
 * @property \Cake\ORM\Association\BelongsTo $StudentTypes
 * @property \Cake\ORM\Association\BelongsTo $PlaceOfBirths
 * @property \Cake\ORM\Association\BelongsTo $HomeTowns
 * @property \Cake\ORM\Association\BelongsTo $Lgas
 * @property \Cake\ORM\Association\BelongsTo $States
 * @property \Cake\ORM\Association\BelongsTo $Countries
 * @property \Cake\ORM\Association\BelongsTo $Disabilities
 * @property \Cake\ORM\Association\BelongsTo $EntryModes
 * @property \Cake\ORM\Association\BelongsTo $Sports
 * @property \Cake\ORM\Association\HasMany $Disabilties
 * @property \Cake\ORM\Association\HasMany $Documents
 * @property \Cake\ORM\Association\BelongsToMany $Projects
 *
 * @method \App\Model\Entity\Student get($primaryKey, $options = [])
 * @method \App\Model\Entity\Student newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Student[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Student|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Student patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Student[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Student findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 * @mixin \Cake\ORM\Behavior\CounterCacheBehavior
 */
class StudentsTable extends Table
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

        $this->table('students');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('CounterCache', ['Departments' => ['student_count']]);

        $this->belongsTo('Faculties', [
            'foreignKey' => 'faculty_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Departments', [
            'foreignKey' => 'department_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Programs', [
            'foreignKey' => 'program_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('ProgramTypes', [
            'foreignKey' => 'program_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('StudentTypes', [
            'foreignKey' => 'student_type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('PlaceOfBirths', [
            'foreignKey' => 'place_of_birth_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('HomeTowns', [
            'foreignKey' => 'home_town_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Lgas', [
            'foreignKey' => 'lga_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('States', [
            'foreignKey' => 'state_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Countries', [
            'foreignKey' => 'country_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Disabilities', [
            'foreignKey' => 'disability_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('EntryModes', [
            'foreignKey' => 'entry_mode_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Sports', [
            'foreignKey' => 'sport_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Disabilties', [
            'foreignKey' => 'student_id'
        ]);
        $this->hasMany('Documents', [
            'foreignKey' => 'student_id'
        ]);
        $this->belongsToMany('Projects', [
            'foreignKey' => 'student_id',
            'targetForeignKey' => 'project_id',
            'joinTable' => 'students_projects'
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
            ->requirePresence('first_name', 'create')
            ->notEmpty('first_name');

        $validator
            ->requirePresence('middle_name', 'create')
            ->notEmpty('middle_name');

        $validator
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name');

        $validator
            ->requirePresence('level', 'create')
            ->notEmpty('level');

        $validator
            ->requirePresence('gender', 'create')
            ->notEmpty('gender');

        $validator
            ->requirePresence('marital_status', 'create')
            ->notEmpty('marital_status');

        $validator
            ->date('date_of_birth')
            ->requirePresence('date_of_birth', 'create')
            ->notEmpty('date_of_birth');

        $validator
            ->requirePresence('contact_address', 'create')
            ->notEmpty('contact_address');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->requirePresence('home_address', 'create')
            ->notEmpty('home_address');

        $validator
            ->requirePresence('mobile_telephone_no', 'create')
            ->notEmpty('mobile_telephone_no');

        $validator
            ->requirePresence('kin_first_name', 'create')
            ->notEmpty('kin_first_name');

        $validator
            ->requirePresence('kin_last_name', 'create')
            ->notEmpty('kin_last_name');

        $validator
            ->requirePresence('kin_address', 'create')
            ->notEmpty('kin_address');

        $validator
            ->requirePresence('kin_telephone', 'create')
            ->notEmpty('kin_telephone');

        $validator
            ->requirePresence('blood_group', 'create')
            ->notEmpty('blood_group');

        $validator
            ->requirePresence('genotype', 'create')
            ->notEmpty('genotype');

        $validator
            ->integer('disability_count')
            ->requirePresence('disability_count', 'create')
            ->notEmpty('disability_count');

        $validator
            ->requirePresence('sponsor', 'create')
            ->notEmpty('sponsor');

        $validator
            ->requirePresence('other_sponsor', 'create')
            ->notEmpty('other_sponsor');

        $validator
            ->requirePresence('extra_cirricular_activities', 'create')
            ->notEmpty('extra_cirricular_activities');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['faculty_id'], 'Faculties'));
        $rules->add($rules->existsIn(['department_id'], 'Departments'));
        $rules->add($rules->existsIn(['program_id'], 'Programs'));
        $rules->add($rules->existsIn(['program_type_id'], 'ProgramTypes'));
        $rules->add($rules->existsIn(['student_type_id'], 'StudentTypes'));
        $rules->add($rules->existsIn(['place_of_birth_id'], 'PlaceOfBirths'));
        $rules->add($rules->existsIn(['home_town_id'], 'HomeTowns'));
        $rules->add($rules->existsIn(['lga_id'], 'Lgas'));
        $rules->add($rules->existsIn(['state_id'], 'States'));
        $rules->add($rules->existsIn(['country_id'], 'Countries'));
        $rules->add($rules->existsIn(['disability_id'], 'Disabilities'));
        $rules->add($rules->existsIn(['entry_mode_id'], 'EntryModes'));
        $rules->add($rules->existsIn(['sport_id'], 'Sports'));

        return $rules;
    }
}
