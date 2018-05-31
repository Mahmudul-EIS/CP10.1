<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ReceiveAck Entity
 *
 * @property int $id
 * @property \Cake\I18n\Time $date
 * @property string $tender_no
 * @property string $vendor
 * @property string $part_name
 * @property string $part_no
 * @property string $total_received
 * @property string $store_received
 * @property string $zon
 * @property string $remarks
 */
class ReceiveAck extends Entity
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
