<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class student extends FormRequest
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
            'full_name' => 'required|string',
            'date_of_birth' => 'required|date',
            'email' => 'required|email',
            'mobile_number' => 'required|numeric',
            'gender' => 'required|in:Male,Female',
            'zip' => 'required|string',
            'level' => 'required|numeric',
            'university' => 'required|string',
            'course' => 'required|string',
            'address_type' => 'required|string',
            'nationality' => 'required|string',
            'state' => 'required|string',
            'district' => 'required|string',
            'block_number' => 'required|numeric',
            'ward_number' => 'required|numeric',
            'father_name' => 'required|string',
            'mother_name' => 'required|string',
            'grandfather_name' => 'required|string',
            'spouse_name' => 'nullable|string',
            'father_in_law_name' => 'nullable|string',
            'mother_in_law_name' => 'nullable|string',
        ];
    }
}
