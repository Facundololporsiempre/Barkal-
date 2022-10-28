<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FormularioRequest extends FormRequest
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
        $rules = [
            "status" => "required|in:1,2",
            "street" => "max:50",
            "number" => "max:4",
            "flat" => "",
            "department" => "max:50",
            "cpl" => "max:4",
            "province" => "required",
            "city" => "required",
            "payment" => "required|in:1,2,3",
            "name" => "required|string|regex:/^[\pL\s\-]+$/u|between:5,25",
            "surname" => "required|string|regex:/^[\pL\s\-]+$/u|between:5,25",
            "dni" => "required|max:8",
            "phone" => "required|max:10",
            "email" => "required|email:rfc,dns",
            "birth" => "required",
            "numberT" => "required|between:16,18",
            "headline" => "required|string|regex:/^[\pL\s\-]+$/u|between:5,25",
            "validM" => "required",
            "validA" => "required",
            // "codeT" => "required",
            "codeS" => "required|max:3",
        ];
        if ($this->status == 2) {
            $rules = array_merge($rules, [
                "status" => "required|in:1,2",
                "street" => "required|between:5,50",
                "number" => "required|max:4",
                "flat" => "",
                "department" => "max:50",
                "cpl" => "required|between:4,8",
                "province" => "required",
                "city" => "required",
                "payment" => "required|in:1,2,3",
                "name" => "required|string|regex:/^[\pL\s\-]+$/u|between:5,25",
                "surname" => "required|string|regex:/^[\pL\s\-]+$/u|between:5,25",
                "dni" => "required|max:8",
                "phone" => "required|max:10",
                "email" => "required|email:rfc,dns",
                "birth" => "required",
                "numberT" => "required|between:16,18",
                "headline" => "required|string|regex:/^[\pL\s\-]+$/u|between:5,25",
                "validM" => "required",
                "validA" => "required",
                // "codeT" => "required",
                "codeS" => "required|max:3",
                "repuestoname" => "",
                "repuestomarca" => "",
                "repuestomodelo" => "",
                "repuestocategoria" => "",
                "cantidad" => "",
                "precio" => ""
            ]);
        }
        return $rules;
    }
}
