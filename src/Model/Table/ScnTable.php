<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Scn Model
 *
 * @method \App\Model\Entity\Scn get($primaryKey, $options = [])
 * @method \App\Model\Entity\Scn newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Scn[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Scn|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Scn patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Scn[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Scn findOrCreate($search, callable $callback = null, $options = [])
 */
class ScnTable extends Table
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

        $this->table('scn');
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
            ->allowEmpty('items_desc');

        $validator
            ->allowEmpty('qty');

        $validator
            ->allowEmpty('reason_code');

        $validator
            ->allowEmpty('remarks');

        return $validator;
    }
}
