<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
        return [
           "title" =>"required|min:4|max:100",
           "image" =>"url|max:65535",
           "description" =>"required|min:5|max:65535",
           "type_id" => "exists:types,id",
           "technologies" => "nullable|exists:technologies,id"
        ];
    }

    public function messages()
    {
        return[
            "title.required"=> "il titolo è obbligatorio",
            "title.min"=> "il titolo deve avere almeno :min caratteri",

            "image.max"=>"il percorso img max 65535 caratteri",

            "description.min"=> "Descrizione di almeno :min caratteri",
            "description.max"=> "Descrizione di massimi :max caratteri",
        ];
    }
}
