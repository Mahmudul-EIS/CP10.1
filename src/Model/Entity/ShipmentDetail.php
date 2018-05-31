<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ShipmentDetail Entity
 *
 * @property int $id
 * @property string $customer
 * @property string $pic_contact
 * @property string $destination
 * @property string $address
 * @property string $delivery_date
 * @property string $delivery_order_no
 * @property string $collection_date
 * @property string $collection_time
 * @property string $collection_form
 */
class ShipmentDetail extends Entity
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
