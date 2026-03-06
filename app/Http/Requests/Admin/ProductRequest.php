<?php

namespace App\Http\Requests\Admin;

use App\Traits\ApiValidationTrait;
use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
        if($this->id){
            return [

            ];
        }

        return [
            //
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'stock' => 'required|numeric|min:0',
            'unit' => 'required|string',
            'description' => 'nullable|string',
            'buying_price' => 'required|numeric|min:0',
            'selling_price' => 'required|numeric|min:0',
            'status' => 'required|boolean',
            'image' => 'required|mimes:jpg,jpeg,png|max:2048',
        ];
    }
}
