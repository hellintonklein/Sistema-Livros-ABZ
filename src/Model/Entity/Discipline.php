<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Discipline Entity
 *
 * @property int $id
 * @property string $disciplina
 * @property string $sigla
 *
 * @property \App\Model\Entity\Book[] $books
 */class Discipline extends Entity
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
