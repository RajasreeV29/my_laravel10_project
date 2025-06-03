<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackageUpdaterequst extends FormRequest
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
           'package_name' => 'required|string|max:255',
            'credits' => 'required|integer|min:0',
            'credit_due' => 'required|string|max:255',
            'status' => 'required|string|max:255',
        ];
    }
}
