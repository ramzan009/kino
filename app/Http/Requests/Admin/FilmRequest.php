<?php

namespace App\Http\Requests\Admin;

use App\Models\Admin\Country;
use App\Models\Admin\Type;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class FilmRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
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

            'description' => [
                'required',
                'string',
            ],

            'date_publication' => [
                'required',
                'date'
            ],
            'country'       => [
                'required',
                'integer',
                Rule::exists(Country::class, 'id'),
            ],

            'type' => [
                'required',
                'integer',
                Rule::exists(Type::class, 'id'),
            ]
        ];
    }
}
