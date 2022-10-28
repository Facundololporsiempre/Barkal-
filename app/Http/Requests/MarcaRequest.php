<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarcaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        $marca = $this->route()->parameter("marca");
        $rules = [
            "name" => "required",
            "slug" => "required|unique:marcas",
            // "file" => "image"
        ];
        if ($marca) {
            $rules["slug"] = "required|unique:marcas,slug," . $marca->id;
        }
        return $rules;
    }
}
