<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Gtr Entity
 *
 * @property int $id
 * @property string $date
 * @property string $gtr_from
 * @property string $gtr_to
 * @property string $transporter
 * @property string $veh_no
 * @property string $ref_no
 * @property string $cost_fund
 * @property string $purpose_transfarred
 * @property string $model_no
 * @property string $version
 * @property string $type
 * @property string $qty
 * @property string $fg_code
 * @property string $ser_no
 * @property string $desc
 * @property string $remarks
 * @property string $cust_remarks
 * @property string $pic_cust
 */
class Gtr extends Entity
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
