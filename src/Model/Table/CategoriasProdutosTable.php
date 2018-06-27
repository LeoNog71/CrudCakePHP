<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CategoriasProdutos Model
 *
 * @method \App\Model\Entity\CategoriasProduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\CategoriasProduto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CategoriasProduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasProduto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriasProduto|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CategoriasProduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasProduto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CategoriasProduto findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CategoriasProdutosTable extends Table
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

        $this->setTable('categorias_produtos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
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
            ->scalar('nome_categoria')
            ->maxLength('nome_categoria', 220)
            ->allowEmpty('nome_categoria');

        $validator
            ->dateTime('modificado')
            ->allowEmpty('modificado');

        return $validator;
    }
}
