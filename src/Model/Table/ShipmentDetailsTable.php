<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ShipmentDetails Model
 *
 * @method \App\Model\Entity\ShipmentDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\ShipmentDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ShipmentDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ShipmentDetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ShipmentDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ShipmentDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ShipmentDetail findOrCreate($search, callable $callback = null, $options = [])
 */
class ShipmentDetailsTable extends Table
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

        $this->table('shipment_details');
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
            ->allowEmpty('customer');

        $validator
            ->allowEmpty('pic_contact');

        $validator
            ->allowEmpty('destination');

        $validator
            ->allowEmpty('address');

        $validator
            ->allowEmpty('delivery_date');

        $validator
            ->allowEmpty('delivery_order_no');

        $validator
            ->allowEmpty('collection_date');

        $validator
            ->allowEmpty('collection_time');

        $validator
            ->allowEmpty('collection_form');

        return $validator;
    }
}
