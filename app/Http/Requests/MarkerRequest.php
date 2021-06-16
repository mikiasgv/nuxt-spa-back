<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarkerRequest extends FormRequest
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
            'name' => ['required', 'max:191', 'unique:markers'],
            'address' => ['required'],
            'about_cafe' => ['required'],
            'about_barista' => ['required'],
            'Playlist' => ['required'],
            'latitude' => ['required', 'numeric'],
            'longitude' => ['required', 'numeric'],
        ];
    }
}
