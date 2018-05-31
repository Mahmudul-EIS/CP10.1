<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BdoReport Model
 *
 * @method \App\Model\Entity\BdoReport get($primaryKey, $options = [])
 * @method \App\Model\Entity\BdoReport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BdoReport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BdoReport|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BdoReport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BdoReport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BdoReport findOrCreate($search, callable $callback = null, $options = [])
 */
class BdoReportTable extends Table
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

        $this->table('bdo_report');
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
            ->notEmpty('date', 'date field is required');

        $validator
            ->notEmpty('do_no', 'do no field is required');

        $validator
            ->notEmpty('po_no', 'po no field is required');

        $validator
            ->notEmpty('part_no', 'part no field is required');

        $validator
            ->notEmpty('part_name', 'part name field is required');

        $validator
            ->integer('qty', 'quantity should be numeric!')
            ->notEmpty('qty', 'quantity field is required');

        $validator
            ->notEmpty('del_to', 'del to field is required');

        $validator
            ->allowEmpty('remarks');

        $validator
            ->allowEmpty('prepared_by');

        $validator
            ->allowEmpty('approved_by');

        $validator
            ->allowEmpty('stat');

        return $validator;
    }
}
