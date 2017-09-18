<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity
 *
 * @property int $id
 * @property int $shelf_id
 * @property int $sumario
 * @property string $title
 * @property string $author
 * @property string $editor
 * @property int $pages
 * @property int $quantity
 * @property string $classification
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Shelf $shelf
 * @property \App\Model\Entity\Reservation[] $reservations
 * @property \App\Model\Entity\Discipline[] $disciplines
 */class Book extends Entity
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
