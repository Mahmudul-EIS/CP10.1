<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ScnReport Model
 *
 * @method \App\Model\Entity\ScnReport get($primaryKey, $options = [])
 * @method \App\Model\Entity\ScnReport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ScnReport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ScnReport|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ScnReport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ScnReport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ScnReport findOrCreate($search, callable $callback = null, $options = [])
 */
class ScnReportTable extends Table
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

        $this->table('scn_report');
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
            ->notEmpty('ref_no', 'ref no field is required!');

        $validator
            ->notEmpty('pic', 'pic field is required!');

        $validator
            ->allowEmpty('approve');

        $validator
            ->allowEmpty('stat');

        $validator
            ->allowEmpty('remarks');

        $validator
            ->notEmpty('section', 'section field is required!');

        $validator
            ->notEmpty('item_desc', 'item_desc field is required!');

        $validator
            ->integer('qty', 'qty must be numeric!')
            ->notEmpty('qty', 'qty field is required!');

        $validator
            ->notEmpty('reason_code', 'reason code field is required!');

        return $validator;
    }
}
