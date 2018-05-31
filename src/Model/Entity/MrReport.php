<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MrReport Entity
 *
 * @property int $id
 * @property string $date_issue
 * @property string $mr_no
 * @property string $ccar_no
 * @property string $sect
 * @property string $dept
 * @property string $approve
 * @property string $stat
 * @property string $job
 * @property string $docs
 * @property string $remarks
 */
class MrReport extends Entity
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
