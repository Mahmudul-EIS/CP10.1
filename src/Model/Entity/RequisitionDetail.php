<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RequisitionDetail Entity
 *
 * @property int $id
 * @property string $driver_name
 * @property string $driver_contact_no
 * @property string $plat_no
 * @property string $consaignment_no
 * @property string $vehicle_type
 * @property string $crane
 */
class RequisitionDetail extends Entity
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
