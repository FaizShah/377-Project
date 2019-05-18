<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Review Entity
 *
 * @property int $review_id
 * @property string $first_name
 * @property string $last_name
 * @property string|null $comment
 * @property int $cleanliness_score
 * @property int $odor_score
 * @property int $lighting_score
 * @property int $solitude_score
 * @property int $overall_rating
 * @property int $bathroom_id
 *
 * @property \App\Model\Entity\Bathroom $bathroom
 */
class Review extends Entity
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
        'first_name' => true,
        'last_name' => true,
        'comment' => true,
        'cleanliness_score' => true,
        'odor_score' => true,
        'lighting_score' => true,
        'solitude_score' => true,
        'overall_rating' => true,
        'bathroom_id' => true,
        'bathroom' => true
    ];
}
