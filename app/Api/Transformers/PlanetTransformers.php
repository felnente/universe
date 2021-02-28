<?php

namespace App\Api\Transformers;

use App\Models\Planet;
use League\Fractal\TransformerAbstract;

class PlanetTransformers extends TransformerAbstract
{

    /**
     * Transform a single item.
     *
     * @param Planet $brand
     * @return array
     */
    public function transform(Planet $planet): array
    {
        return [
            'id' => (int)$planet->id,
            'planet' => $planet->planet,
            'moons' => $planet->moons,
            'diameter' => $planet->diameter
        ];
    }
}
