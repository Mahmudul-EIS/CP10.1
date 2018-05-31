<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RtvnReport Model
 *
 * @method \App\Model\Entity\RtvnReport get($primaryKey, $options = [])
 * @method \App\Model\Entity\RtvnReport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RtvnReport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RtvnReport|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RtvnReport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RtvnReport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RtvnReport findOrCreate($search, callable $callback = null, $options = [])
 */
class RtvnReportTable extends Table
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

        $this->table('rtvn_report');
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
            ->notEmpty('date', ' field is required!');

        $validator
            ->notEmpty('rtvn_no', ' field is required!');

        $validator
            ->notEmpty('mdr_no', ' field is required!');

        $validator
            ->notEmpty('vendor', ' field is required!');

        $validator
            ->notEmpty('part_no', ' field is required!');

        $validator
            ->notEmpty('part_name', ' field is required!');

        $validator
            ->integer('qty')
            ->notEmpty('qty', 'qty field is required!');

        $validator
            ->integer('qty_rec')
            ->notEmpty('qty_rec', 'qty rec field is required!');

        $validator
            ->integer('qty_os')
            ->notEmpty('qty_os', 'qty os field is required!');

        $validator
            ->allowEmpty('cn_no');

        $validator
            ->allowEmpty('cn');

        $validator
            ->allowEmpty('prepared_by');

        $validator
            ->allowEmpty('approved_by');

        $validator
            ->allowEmpty('stat');

        return $validator;
    }
}
