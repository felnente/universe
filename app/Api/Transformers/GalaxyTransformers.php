<?php

namespace App\Api\Transformers;

use App\Models\Galaxy;
use League\Fractal\TransformerAbstract;

class GalaxyTransformers extends TransformerAbstract
{

    /**
     * Transform a single item.
     *
     * @param Galaxy $brand
     * @return array
     */
    public function transform(Galaxy $galaxy): array
    {
        return [
            'id' => (int)$galaxy->id,
            'name' => $galaxy->name,
            'radius' => $galaxy->radius,
            'mass' => $galaxy->mass
        ];
    }
}
