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
            'email' => 'required|email|max:255',
            'nationality' => 'nullable|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string|max:10',
            'marital_status' => 'required|string|max:20',
            'address' => 'required|string',
            'mother_name' => 'required|string|max:255',
            'parent_guardian_phone' => 'required|string|max:20',
            'parent_guardian_address' => 'required|string',
            'education_level' => 'required|string|max:255',
            'course_of_study' => 'nullable|string|max:255',
            'university' => 'nullable|string|max:255',
            'completion_status' => 'required|string|max:255',
            'job_title' => 'nullable|string|max:255',
            'industry' => 'nullable|string|max:255',
            'business_nature' => 'nullable|string|max:255',
            'career_path' => 'required|string|max:255',
            'statement' => 'required|string',
        ];
    }
}
