<?php

namespace App\Http\Requests;

use App\Http\Requests\StoreCategory;
use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
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
            'name'=>'required|min:3|max:200',
            'description'=>'required|min:2',
            'posted'=>'required'
        ];
    }
}
