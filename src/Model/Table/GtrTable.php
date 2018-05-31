<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gtr Model
 *
 * @method \App\Model\Entity\Gtr get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gtr newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gtr[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gtr|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gtr patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gtr[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gtr findOrCreate($search, callable $callback = null, $options = [])
 */
class GtrTable extends Table
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

        $this->table('gtr');
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
            ->notEmpty('date', 'Date field is required!');

        $validator
            ->notEmpty('gtr_from', 'GTR from field is required!');

        $validator
            ->notEmpty('gtr_to', 'GTR to field is required!');

        $validator
            ->notEmpty('transporter', 'Transporter field is required!');

        $validator
            ->notEmpty('veh_no', 'Veh no field is required!');

        $validator
            ->notEmpty('ref_no', 'Ref no field is required!');

        $validator
            ->notEmpty('purpose_transfarred', 'Purpose transfer field is required!');

        $validator
            ->notEmpty('model_no', 'Model no field is required!');

        $validator
            ->notEmpty('version', 'Version field is required!');

        $validator
            ->notEmpty('type', 'Type field is required!');

        $validator
            ->notEmpty('qty', 'Quantity field is required!');

        $validator
            ->notEmpty('fg_code', 'FG code field is required!');

        $validator
            ->notEmpty('ser_no', 'Ser no field is required!');

        $validator
            ->notEmpty('description', 'Description field is required!');

        $validator
            ->allowEmpty('remarks');

        $validator
            ->allowEmpty('cust_remarks');

        $validator
            ->allowEmpty('pic_cust');

        $validator
            ->allowEmpty('prepared_by');

        $validator
            ->allowEmpty('approved_by');

        $validator
            ->allowEmpty('stat');

        return $validator;
    }
}
