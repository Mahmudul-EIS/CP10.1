<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * MaterialIssueTicket Model
 *
 * @method \App\Model\Entity\MaterialIssueTicket get($primaryKey, $options = [])
 * @method \App\Model\Entity\MaterialIssueTicket newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\MaterialIssueTicket[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\MaterialIssueTicket|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\MaterialIssueTicket patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialIssueTicket[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\MaterialIssueTicket findOrCreate($search, callable $callback = null, $options = [])
 */
class MaterialIssueTicketTable extends Table
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

        $this->table('material_issue_ticket');
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
            ->notEmpty('ref', 'ref field is required!');

        $validator
            ->notEmpty('mit_no', 'mit no field is required!');

        $validator
            ->notEmpty('section', 'section field is required!');

        $validator
            ->notEmpty('so_no', 'so no field is required!');

        $validator
            ->notEmpty('costomer', 'costomer field is required!');

        $validator
            ->notEmpty('revision', 'revision field is required!');

        $validator
            ->integer('qty', 'quantity should be numeric!')
            ->notEmpty('qty', 'quantity field is required!');

        $validator
            ->allowEmpty('remarks');

        $validator
            ->allowEmpty('approve');

        $validator
            ->allowEmpty('stat');

        $validator
            ->allowEmpty('prepared_by');

        return $validator;
    }
}
