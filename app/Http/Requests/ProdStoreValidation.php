<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdStoreValidation extends FormRequest
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
            'title' => 'required',
            'about' => 'required',
            'discription' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'instock' => 'required|numeric',
            'image' =>  'nullable|file|image|mimes:jpeg,png,jpg,gif|max:8192',
            'images' =>  'nullable'
        ];
    }
}
