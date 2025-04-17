<?php

namespace App\Http\Requests;


use App\Models\Country;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CountryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
              'required',
              'string',
            ],
            'alias' => [
                'required',
                'string',
                Rule::unique(Country::class, 'alias')->ignore($this->request->get('id')),
            ]
        ];
    }
}
