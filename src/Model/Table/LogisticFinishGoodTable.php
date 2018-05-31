<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * LogisticFinishGood Model
 *
 * @method \App\Model\Entity\LogisticFinishGood get($primaryKey, $options = [])
 * @method \App\Model\Entity\LogisticFinishGood newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\LogisticFinishGood[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\LogisticFinishGood|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\LogisticFinishGood patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\LogisticFinishGood[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\LogisticFinishGood findOrCreate($search, callable $callback = null, $options = [])
 */
class LogisticFinishGoodTable extends Table
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

        $this->table('logistic_finish_good');
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
            ->notEmpty('customer', 'Customer field is required!');

        $validator
            ->notEmpty('pic_contact', 'pic contact field is required!');

        $validator
            ->notEmpty('dest', 'Dest field is required!');

        $validator
            ->notEmpty('address', 'address field is required!');

        $validator
            ->notEmpty('del_date', 'del date field is required!');

        $validator
            ->notEmpty('del_order_no', 'del order no field is required!');

        $validator
            ->notEmpty('coll_date', 'coll date field is required!');

        $validator
            ->notEmpty('coll_time', 'coll time field is required!');

        $validator
            ->notEmpty('coll_form', 'coll from field is required!');

        $validator
            ->notEmpty('model', 'model field is required!');

        $validator
            ->notEmpty('part_name', 'part name field is required!');

        $validator
            ->integer('quantity', 'quantity should be numeric!')
            ->notEmpty('quantity', 'quantity field is required!');

        $validator
            ->notEmpty('driver_name', 'driver name field is required!');

        $validator
            ->notEmpty('driver_contact_no', 'driver contact no field is required!');

        $validator
            ->notEmpty('plat_no', 'plat no field is required!');

        $validator
            ->notEmpty('consaignment_no', 'consaignment no field is required!');

        $validator
            ->allowEmpty('vehicle');

        $validator
            ->notEmpty('crane', 'crane field is required!');

        $validator
            ->allowEmpty('prepared_by');

        $validator
            ->allowEmpty('approved_by');

        $validator
            ->allowEmpty('stat');
            
        $validator
            ->notEmpty('po_no', 'PN No is required!');

        return $validator;
    }
}
