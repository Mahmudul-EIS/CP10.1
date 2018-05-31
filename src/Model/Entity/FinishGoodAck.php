<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * FinishGoodAck Entity
 *
 * @property int $id
 * @property string $mod
 * @property string $vers
 * @property string $type
 * @property string $ser_no
 * @property string $quantity
 * @property string $date_manu
 * @property string $pi_date
 * @property string $pic_pi
 * @property string $date_deliver
 * @property string $do_no
 * @property string $destinate
 * @property string $loc
 * @property string $ttn
 * @property string $qr
 * @property string $ir
 * @property string $remarks
 */
class FinishGoodAck extends Entity
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
