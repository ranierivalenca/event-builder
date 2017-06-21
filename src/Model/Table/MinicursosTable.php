<?php
namespace App\Model\Table;

use App\Model\Entity\Minicurso;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Minicursos Model
 *
 * @property \Cake\ORM\Association\HasMany $Userminicursos
 */
class MinicursosTable extends Table
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

        $this->table('minicursos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Userminicursos', [
            'foreignKey' => 'minicurso_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('titulo');

        $validator
            ->allowEmpty('nome_palestrante');

        $validator
            ->add('numero_vagas', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('numero_vagas');

        $validator
            ->allowEmpty('descricao');

        return $validator;
    }
}
