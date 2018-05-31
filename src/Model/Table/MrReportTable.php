<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MrReport Model
 *
 * @method \App\Model\Entity\MrReport get($primaryKey, $options = [])
 * @method \App\Model\Entity\MrReport newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MrReport[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MrReport|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MrReport patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MrReport[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MrReport findOrCreate($search, callable $callback = null, $options = [])
 */
class MrReportTable extends Table
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

        $this->table('mr_report');
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
            ->notEmpty('date_issue', 'date issue field is required!');

        $validator
            ->notEmpty('mr_no', 'mr no field is required!');

        $validator
            ->notEmpty('ccar_no', 'ccar no field is required!');

        $validator
            ->notEmpty('sect', 'sect field is required!');

        $validator
            ->notEmpty('dept', 'dept field is required!');

        $validator
            ->allowEmpty('approve');

        $validator
        ->allowEmpty('stat');

        $validator
            ->notEmpty('job', 'job field is required!');

        $validator
            ->allowEmpty('remarks');

        $validator
            ->allowEmpty('prepared_by');

        $validator
            ->notEmpty('part_no', 'part no field is required!');

        $validator
            ->notEmpty('part_name', 'part name field is required!');

        $validator
            ->integer('qty_req', 'qty req must be numeric!')
            ->notEmpty('qty_req', 'qty req field is required!');

        $validator
            ->integer('qty_issued', 'qty issued must be numeric!')
            ->notEmpty('qty_issued', 'qty issued field is required!');

        return $validator;
    }
}
