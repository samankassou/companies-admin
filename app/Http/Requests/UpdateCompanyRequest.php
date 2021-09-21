<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCompanyRequest extends FormRequest
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
            'name' => 'required|unique:companies,name,'.$this->company->id,
            'email' => 'nullable|email',
            'website' => 'nullable|url',
            'logo' => 'nullable|mimes:jpeg,jpg,png|dimensions:min_width=100,min_height=100'
        ];
    }
}
