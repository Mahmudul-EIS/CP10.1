<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InStockCode Model
 *
 * @method \App\Model\Entity\InStockCode get($primaryKey, $options = [])
 * @method \App\Model\Entity\InStockCode newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InStockCode[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InStockCode|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InStockCode patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InStockCode[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InStockCode findOrCreate($search, callable $callback = null, $options = [])
 */
class InStockCodeTable extends Table
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

        $this->table('in_stock_code');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->notEmpty('id', 'create');

        $validator
            ->dateTime('date')
            ->notEmpty('date', 'Date is required!');

        $validator
            ->notEmpty('part_name', 'Part name is required!');

        $validator
            ->notEmpty('part_no', 'Part no is required!');

        $validator
            ->notEmpty('quantity', 'Quantity is required!')
            ->add('quantity', 'valid', [
                'rule' => 'numeric',
                'message' => 'The field must be numeric!'
            ]);

        $validator
            ->notEmpty('pic_store', 'PIC store is required!');

        $validator
            ->notEmpty('stock_code', 'Stock code is required!');

        return $validator;
    }

}
