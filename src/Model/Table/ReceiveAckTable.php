<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ReceiveAck Model
 *
 * @method \App\Model\Entity\ReceiveAck get($primaryKey, $options = [])
 * @method \App\Model\Entity\ReceiveAck newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ReceiveAck[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ReceiveAck|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ReceiveAck patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ReceiveAck[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ReceiveAck findOrCreate($search, callable $callback = null, $options = [])
 */
class ReceiveAckTable extends Table
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

        $this->table('receive_ack');
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
            ->dateTime('date')
            ->allowEmpty('date');

        $validator
            ->allowEmpty('tender_no');

        $validator
            ->allowEmpty('vendor');

        $validator
            ->allowEmpty('part_name');

        $validator
            ->allowEmpty('part_no');

        $validator
            ->allowEmpty('total_received');

        $validator
            ->allowEmpty('store_received');

        $validator
            ->allowEmpty('zon');

        $validator
            ->allowEmpty('remarks');

        return $validator;
    }
}
