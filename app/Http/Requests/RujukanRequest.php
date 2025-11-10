<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RujukanRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Allow all users to make this request
    }

    public function rules()
    {
        return [
            'field_name_1' => 'required|string|max:255', // Replace with actual field names and validation rules
            'field_name_2' => 'required|integer', // Replace with actual field names and validation rules
            // Add more fields as necessary
        ];
    }

    public function messages()
    {
        return [
            'field_name_1.required' => 'Field Name 1 is required.',
            'field_name_2.required' => 'Field Name 2 is required.',
            // Add more custom messages as necessary
        ];
    }
}