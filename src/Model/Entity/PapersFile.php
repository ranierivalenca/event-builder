<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PapersFile Entity
 *
 * @property int $id
 * @property int $paper_id
 * @property int $file_id
 * @property string $version
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Paper $paper
 * @property \App\Model\Entity\File $file
 */
class PapersFile extends Entity
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
