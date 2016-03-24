<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Menu Entity.
 *
 * @property string $id
 * @property string $parent_id
 * @property \App\Model\Entity\ParentMenu $parent_menu
 * @property string $name
 * @property string $url
 * @property int $lft
 * @property int $rght
 * @property int $active
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \Cake\I18n\Time $deleted
 * @property \App\Model\Entity\ChildMenu[] $child_menus
 */
class Menu extends Entity
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
        'id' => false,
    ];
}
