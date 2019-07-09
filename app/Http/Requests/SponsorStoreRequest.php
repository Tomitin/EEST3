<?php

namespace Chimbarongo\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SponsorStoreRequest extends FormRequest
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
            'name' => 'required',
            'slug' => 'required|unique:sponsors,slug',
        ];

        if($this->get('logo'))        
            $rules = array_merge($rules, ['logo'     
            => 'mimes:jpg,jpeg,png']);

        return $rules;
    }
}
