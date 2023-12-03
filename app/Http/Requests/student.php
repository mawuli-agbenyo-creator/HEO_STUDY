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
            'full_name' => 'required|string|max:255',
            'date_of_birth' => 'required|date',
            'email' => 'required|email|max:255',
            'mobile_number' => 'required|numeric',
            'gender' => 'required|in:Male,Female',
            'zip' => 'required|string|max:255',
            'level' => 'required|in:100,200,300,400',
            'university' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'address_type' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'block_number' => 'required|numeric',
            'Passport' => 'required|file', // Add appropriate validation rules for file uploads
            'guardian_name' => 'required|string|max:255',
            'guardian_phone_number' => 'required|string|max:255',
            'emergency' => 'required|string|max:255',
        ];
    }
}
