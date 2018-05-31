<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FinishGoodAck Model
 *
 * @method \App\Model\Entity\FinishGoodAck get($primaryKey, $options = [])
 * @method \App\Model\Entity\FinishGoodAck newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FinishGoodAck[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FinishGoodAck|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FinishGoodAck patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FinishGoodAck[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FinishGoodAck findOrCreate($search, callable $callback = null, $options = [])
 */
class FinishGoodAckTable extends Table
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

        $this->table('finish_good_ack');
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
            ->allowEmpty('mod');

        $validator
            ->allowEmpty('vers');

        $validator
            ->allowEmpty('type');

        $validator
            ->allowEmpty('ser_no');

        $validator
            ->allowEmpty('quantity');

        $validator
            ->allowEmpty('date_manu');

        $validator
            ->allowEmpty('pi_date');

        $validator
            ->allowEmpty('pic_pi');

        $validator
            ->allowEmpty('date_deliver');

        $validator
            ->allowEmpty('do_no');

        $validator
            ->allowEmpty('destinate');

        $validator
            ->allowEmpty('loc');

        $validator
            ->allowEmpty('ttn');

        $validator
            ->allowEmpty('qr');

        $validator
            ->allowEmpty('ir');

        $validator
            ->allowEmpty('remarks');

        return $validator;
    }
}
