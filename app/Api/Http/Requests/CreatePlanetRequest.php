<?php

namespace App\Api\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlanetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'planet' => 'required',
            'moons' => 'required|numeric',
            'diameter' => 'required|numeric',
            'galaxy_id' => 'required|exists:galaxies,id'
        ];
    }
}
