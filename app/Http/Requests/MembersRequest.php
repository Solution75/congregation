<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class MembersRequest extends FormRequest
{
    /**
     * stop on first failure
     * @var bool
     */
    protected $stopOnFirstFailure = true;
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'firstname' => 'required|string|max:255',
            'middlenames' => 'nullable|string|max:255',
            'lastname' => 'required|string|max:255',
            'dob' => 'required|date',
            'gender' => [
                'required',
                'string',
                'max:255',
                Rule::in(['male', 'female'])
            ],
            'phone' => 'nullable|string|max:255',
            'phone2' => 'nullable|string|max:255',
            'firstJoin' => 'nullable|date',
            'maritalStatus' => [
                'nullable',
                'string',
                'max:255',
                Rule::in(['single', 'married', 'divorced', 'widowed'])
            ],
            'spouse' => 'nullable|string|max:255',
            'spouseId' => 'nullable|string|max:255',
            'isSpouseAMember' => 'nullable|boolean',
            'isBaptised' => 'nullable|boolean',
            'churchOfBaptism' => 'nullable|string',
            'placeOfBaptism' => 'nullable|string',
            'dateOfBaptism' => 'nullable|date',
            'streetName' => 'nullable|string|max:255',
            'area' => 'required|string|max:255',
            'town' => 'required|string|max:255',
            'country' => 'nullable|string|max:255',
            'placeOfBirth' => 'nullable|string|max:255',
            'hometownName' => 'required|string|max:255',
            'hometownLocation' => 'nullable|string|max:255',
            'hometownRegion' => 'nullable|string|max:255',
            'nationality' => 'nullable|string|max:255',
            'isFatherAMember' => 'nullable|boolean',
            'fathersId' => 'nullable|string|max:255',
            'fathersName' => 'nullable|string|max:255',
            'fathersPhone' => 'nullable|string|max:255',
            'isMotherAMember' => 'nullable|boolean',
            'mothersId' => 'nullable|string|max:255',
            'mothersName' => 'nullable|string|max:255',
            'mothersPhone' => 'nullable|string|max:255',
            'isGuardianAMember' => 'nullable|boolean',
            'guardiansId' => 'nullable|string|max:255',
            'guardiansName' => 'nullable|string|max:255',
            'guardiansPhone' => 'nullable|string|max:255',
            'guardiansAddress' => 'nullable|string|max:255',
            'isFamilyMemberAMember' => 'nullable|boolean',
            'familyMembersId' => 'nullable|string|max:255',
            'familyMemberName' => 'nullable|string|max:255',
            'familyMembersPhone' => 'nullable|string|max:255',
            'familyMembersAddress' => 'nullable|string|max:255',
            'departments',
            'children',
            'role' => 'nullable|string|max:255',
            'designation' => 'nullable|string|max:255',
            'isEmailVerified' => 'nullable|boolean',
            'emailVerifiedAt' => 'nullable|date',
            'username' => 'nullable|string|max:255',
            'userpass' => 'nullable|string',
            'email' => 'nullable|string|email|max:255|unique:members,email',
            'lastVisit' => 'nullable|date',
            'updatedAt' => 'nullable|date',
            'firstLogin' => 'nullable|boolean',
            'lastLogin' => 'nullable|date',
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
