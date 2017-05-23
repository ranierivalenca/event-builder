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
            ->notEmpty('nome', 'Campo nome � obrigat�rio. ')
            ->notEmpty('sexo', 'Campo Sexo � obrigat�rio. ')
            ->notEmpty('cep', 'Campo CEP � obrigat�rio. ')
            ->notEmpty('estado', 'Campo Estado � obrigat�rio. ')
            ->notEmpty('nascimento', 'Campo Data de Nascimento. ')
            ->notEmpty('cidade', 'Campo Cidade � obrigat�rio. ')
            ->notEmpty('bairro', 'Campo Bairro � obrigat�rio. ')
            ->notEmpty('password', 'Campo Senha � obrigat�rio. ')
            ->notEmpty('confirm_password', 'Campo Confirma Senha � obrigat�rio. ')
            ->add('password',[
                    'match'=>[
                            'rule'=> ['compareWith','confirm_password'],
                            'message'=>'As senhas não conferem!',
                    ],
                    'minLength' => [
                        'rule' => ['minLength', 6],
                        'last' => true,
                        'message' => 'A senha deve ter no mínimo 6 caracteres'
                    ]
            ])
            ->add('confirm_password',[
                    'match'=>[
                            'rule'=> ['compareWith','password'],
                            'message'=>'As senhas não conferem!',
                    ]
            ])
            ->notEmpty('instrucao', 'Grau de Instrução � obrigat�rio. ')
            
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table'])
            ->requirePresence('username', 'create');



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
        return $rules;
    }
}
