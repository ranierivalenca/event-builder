<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \Cake\ORM\Association\HasMany $Registration
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Registration', [
            'foreignKey' => 'user_id'
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
            ->requirePresence('username', 'create')
            ->notEmpty('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('password', 'create')
            ->notEmpty('password');

        $validator
            ->requirePresence('role', 'create')
            ->notEmpty('role');

        $validator
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->requirePresence('telefone', 'create')
            ->notEmpty('telefone');

        $validator
            ->date('nascimento')
            ->requirePresence('nascimento', 'create')
            ->notEmpty('nascimento');

        $validator
            ->requirePresence('sexo', 'create')
            ->notEmpty('sexo');

        $validator
            ->requirePresence('cep', 'create')
            ->notEmpty('cep');

        $validator
            ->requirePresence('estado', 'create')
            ->notEmpty('estado');

        $validator
            ->requirePresence('cidade', 'create')
            ->notEmpty('cidade');

        $validator
            ->requirePresence('bairro', 'create')
            ->notEmpty('bairro');

        $validator
            ->requirePresence('logradouro', 'create')
            ->notEmpty('logradouro');

        $validator
            ->requirePresence('numero', 'create')
            ->notEmpty('numero');

        $validator
            ->requirePresence('complemento', 'create')
            ->notEmpty('complemento');

        $validator
            ->requirePresence('instituicao', 'create')
            ->notEmpty('instituicao');

        $validator
            ->requirePresence('instrucao', 'create')
            ->notEmpty('instrucao');

        $validator
            ->requirePresence('activation_code', 'create')
            ->notEmpty('activation_code');

        $validator
            ->boolean('ativo')
            ->requirePresence('ativo', 'create')
            ->notEmpty('ativo');

        $validator
            ->boolean('credenciado')
            ->requirePresence('credenciado', 'create')
            ->notEmpty('credenciado');

        $validator
            ->boolean('imp_certificado')
            ->requirePresence('imp_certificado', 'create')
            ->notEmpty('imp_certificado');

        $validator
            ->boolean('rec_certificado')
            ->requirePresence('rec_certificado', 'create')
            ->notEmpty('rec_certificado');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
