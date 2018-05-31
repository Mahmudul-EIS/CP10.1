<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RtvnReport Entity
 *
 * @property int $id
 * @property string $date
 * @property string $rtvn_no
 * @property string $mdr_no
 * @property string $vendor
 * @property string $part_no
 * @property string $part_name
 * @property string $qty
 * @property string $qty_rec
 * @property string $qty_os
 * @property string $rtvn_start
 * @property string $cn_no
 * @property string $cn
 */
class RtvnReport extends Entity
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
