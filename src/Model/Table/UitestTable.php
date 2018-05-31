<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ProductMasterlist Model
 *
 * @method \App\Model\Entity\ProductMasterlist get($primaryKey, $options = [])
 * @method \App\Model\Entity\ProductMasterlist newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ProductMasterlist[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ProductMasterlist|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ProductMasterlist patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ProductMasterlist[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ProductMasterlist findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UitestTable extends Table
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

        $this->table('product_masterlist');
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
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('part_no');

        $validator
            ->allowEmpty('part_name');

        $validator
            ->allowEmpty('zon');

        $validator
            ->allowEmpty('rack');

        $validator
            ->allowEmpty('bn');

        $validator
            ->allowEmpty('product_level');

        $validator
            ->allowEmpty('uom');

        $validator
            ->allowEmpty('min_stock');

        $validator
            ->allowEmpty('max_stock');

        return $validator;
    }
}
