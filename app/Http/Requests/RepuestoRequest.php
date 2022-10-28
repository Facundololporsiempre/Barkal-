<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RepuestoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // if ($this->user_id == auth()->user()->id) {
        //     return true;
        // }else{
        //     return false;
        // }
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $repuesto = $this->route()->parameter("repuesto");
        $rules = [
            "name" => "required",
            "slug" => "required|unique:repuestos",
            "description" => "required",
            "stock" => "required",
            "price" => "required",
            "marca_id" => "required",
            "modelo_id" => "required",
            "categoria_id" => "required",
            "file" => "image"
        ];

        if ($repuesto) {
            $rules["slug"] = "required|unique:repuestos,slug," . $repuesto->id;
        }
        return $rules;
    }
}
