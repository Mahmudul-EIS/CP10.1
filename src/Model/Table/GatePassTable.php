<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GatePass Model
 *
 * @method \App\Model\Entity\GatePas get($primaryKey, $options = [])
 * @method \App\Model\Entity\GatePas newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GatePas[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GatePas|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GatePas patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GatePas[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GatePas findOrCreate($search, callable $callback = null, $options = [])
 */
class GatePassTable extends Table
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

        $this->table('gate_pass');
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
            ->notEmpty('do_no', 'DO no field is required!');

        $validator
            ->allowEmpty('remarks');

        $validator
            ->allowEmpty('prepared_by');

        $validator
            ->allowEmpty('approved_by');

        $validator
            ->allowEmpty('stat');

        $validator
            ->notEmpty('remarks_prep', 'Remarks field is required!');

        return $validator;
    }
}
