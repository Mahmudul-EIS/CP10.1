<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QuarantineStocks Model
 *
 * @method \App\Model\Entity\QuarantineStock get($primaryKey, $options = [])
 * @method \App\Model\Entity\QuarantineStock newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\QuarantineStock[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\QuarantineStock|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\QuarantineStock patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\QuarantineStock[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\QuarantineStock findOrCreate($search, callable $callback = null, $options = [])
 */
class QuarantineStocksTable extends Table
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

        $this->table('quarantine_stocks');
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
            ->allowEmpty('id', 'create');

        $validator
            ->notEmpty('date', 'date field is required!');

        $validator
            ->notEmpty('tender_no', 'tender no field is required!');

        $validator
            ->notEmpty('prn_no', 'prn no field is required!');

        $validator
            ->notEmpty('trs_code', 'trs code field is required!');

        $validator
            ->notEmpty('part_no', 'part no field is required!');

        $validator
            ->allowEmpty('part_name', 'part name field is required!');

        $validator
            ->integer('quantity', 'quantity should be numeric!')
            ->notEmpty('quantity', 'quantity field is required!');

        $validator
            ->notEmpty('pic_store', 'pic store field is required!');

        $validator
            ->notEmpty('pic_section', 'pic section field is required!');

        $validator
            ->notEmpty('rack', 'rack field is required!');

        $validator
            ->notEmpty('bin', 'bin field is required!');

        $validator
            ->notEmpty('level', 'level field is required!');

        return $validator;
    }
}
