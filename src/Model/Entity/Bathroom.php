<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bathroom Entity
 *
 * @property int $bathroom_id
 * @property int $floor
 * @property string $floor_room_str
 * @property string $room
 * @property string $use_name
 * @property int $building_id
 *
 * @property \App\Model\Entity\Building $building
 */
class Bathroom extends Entity
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
        'floor' => true,
        'floor_room_str' => true,
        'room' => true,
        'use_name' => true,
        'building_id' => true,
        'building' => true
    ];
}
