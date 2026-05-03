<?php

namespace App\Http\Requests\Admin;

use App\Traits\ApiValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class PersonalRequest extends FormRequest
{
    use ApiValidationTrait;
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
            'name' => 'required|string|max:255',
            'email' => [
                'required',
                'email',
            ],
            'mobile_number' => 'required|string|max:11',
            'gender' => 'required|in:male,female,other',
            'date_of_birth' => 'required|date',
            'education' => 'required|in:ssc,hsc,bsc,msc',
            'hobby' => 'nullable|array',
            'office_start_time' => 'required',
            'office_end_time' => 'required|after:office_start_time',
            'present_address' => 'nullable|string',
            'permanent_address' => 'nullable|string',
        ];
    }
}
