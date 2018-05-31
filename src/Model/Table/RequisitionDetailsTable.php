<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RequisitionDetails Model
 *
 * @method \App\Model\Entity\RequisitionDetail get($primaryKey, $options = [])
 * @method \App\Model\Entity\RequisitionDetail newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RequisitionDetail[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RequisitionDetail|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RequisitionDetail patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RequisitionDetail[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RequisitionDetail findOrCreate($search, callable $callback = null, $options = [])
 */
class RequisitionDetailsTable extends Table
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

        $this->table('requisition_details');
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
            ->allowEmpty('driver_name');

        $validator
            ->allowEmpty('driver_contact_no');

        $validator
            ->allowEmpty('plat_no');

        $validator
            ->allowEmpty('consaignment_no');

        $validator
            ->allowEmpty('vehicle_type');

        $validator
            ->allowEmpty('crane');

        return $validator;
    }
}
