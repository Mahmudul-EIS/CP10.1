<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rtvn Model
 *
 * @method \App\Model\Entity\Rtvn get($primaryKey, $options = [])
 * @method \App\Model\Entity\Rtvn newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Rtvn[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rtvn|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rtvn patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Rtvn[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rtvn findOrCreate($search, callable $callback = null, $options = [])
 */
class RtvnTable extends Table
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

        $this->table('rtvn');
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
            ->allowEmpty('do_date');

        $validator
            ->allowEmpty('mdr_no');

        $validator
            ->allowEmpty('parts_desc');

        $validator
            ->allowEmpty('qty');

        $validator
            ->allowEmpty('qty_rec');

        $validator
            ->allowEmpty('qty_os');

        $validator
            ->allowEmpty('remarks');

        return $validator;
    }
}
