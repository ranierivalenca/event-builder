<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PapersFiles Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Papers
 * @property \Cake\ORM\Association\BelongsTo $Files
 *
 * @method \App\Model\Entity\PapersFile get($primaryKey, $options = [])
 * @method \App\Model\Entity\PapersFile newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PapersFile[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PapersFile|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PapersFile patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PapersFile[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PapersFile findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PapersFilesTable extends Table
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

        $this->setTable('papers_files');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Papers', [
            'foreignKey' => 'paper_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Files', [
            'foreignKey' => 'file_id',
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
            ->requirePresence('version', 'create')
            ->notEmpty('version');

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
        $rules->add($rules->existsIn(['paper_id'], 'Papers'));
        $rules->add($rules->existsIn(['file_id'], 'Files'));

        return $rules;
    }
}
