<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class DepartmentsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'=> 'required|string|unique:departments,name|max:255',
            'savedBy' => 'required|string|uuid|'
        ];
    }

    protected function failedValidation(Validator $validator)
    {
        if ($this->wantsJson()) {
            $response = response()->json([
                'responseCode' => '000',
                'responseMessage' => 'Success'
            ]);
        } else {
            $response = response()->json([
                'success' => false,
                'message' => 'Oops! Errors occurred',
                'errors' => $validator->errors()
            ], 422);
        }

        throw new ValidationException($validator, $response);
    }
}
