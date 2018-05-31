<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProdMitReport Entity
 *
 * @property int $id
 * @property int $prod_mit_id
 * @property string $date
 * @property string $ack_status
 * @property string $del_status
 * @property string $received_by
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\ProdMit $prod_mit
 */
class ProdMitReport extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'prod_mit_id' => true,
        'date' => true,
        'ack_status' => true,
        'del_status' => true,
        'received_by' => true,
        'created' => true,
        'modified' => true,
        'prod_mit' => true
    ];
}
