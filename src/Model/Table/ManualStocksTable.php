<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StockOut Model
 *
 * @method \App\Model\Entity\StockOut get($primaryKey, $options = [])
 * @method \App\Model\Entity\StockOut newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\StockOut[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\StockOut|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\StockOut patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\StockOut[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\StockOut findOrCreate($search, callable $callback = null, $options = [])
 */
class ManualStocksTable extends Table
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

        $this->table('manual_stocks');
        $this->displayField('id');
        $this->primaryKey('id');

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

        return $validator;
    }
}
