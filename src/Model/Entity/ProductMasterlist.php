<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ProductMasterlist Entity
 *
 * @property int $id
 * @property string $part_no
 * @property string $part_name
 * @property string $zon
 * @property string $rack
 * @property string $bn
 * @property string $product_level
 * @property string $uom
 * @property string $min_stock
 * @property string $max_stock
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class ProductMasterlist extends Entity
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
