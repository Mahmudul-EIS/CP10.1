<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * MaterialIssueTicket Entity
 *
 * @property int $id
 * @property string $date
 * @property string $ref
 * @property string $mit_no
 * @property string $section
 * @property string $so_no
 * @property string $costomer
 * @property string $revision
 * @property string $qty
 * @property string $remarks
 * @property string $approve
 * @property string $stat
 */
class MaterialIssueTicket extends Entity
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
