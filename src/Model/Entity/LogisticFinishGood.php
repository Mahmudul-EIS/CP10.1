<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * LogisticFinishGood Entity
 *
 * @property int $id
 * @property string $customer
 * @property string $pic_contact
 * @property string $dest
 * @property string $address
 * @property string $del_date
 * @property string $del_order_no
 * @property string $coll_date
 * @property string $coll_time
 * @property string $coll_form
 * @property string $model
 * @property string $part_name
 * @property string $quantity
 * @property string $driver_name
 * @property string $driver_contact_no
 * @property string $plat_no
 * @property string $consaignment_no
 * @property string $vehicle
 * @property string $crane
 */
class LogisticFinishGood extends Entity
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
        '*' => true,
        'id' => false
    ];
}
