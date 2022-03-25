<?php

namespace App\Http\Requests\Admin\Member;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class UpdateMember extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.member.edit', $this->member);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'code_member' => ['sometimes', Rule::unique('member', 'code_member')->ignore($this->member->getKey(), $this->member->getKeyName()), 'string'],
            'address' => ['sometimes', 'string'],
            'phone' => ['sometimes', 'string'],
            'checkin' => ['sometimes', 'string'],
            'checkout' => ['sometimes', 'string'],
            'member_status' => ['sometimes', 'boolean'],
        ];
    }

    /**
     * Modify input data
     *
     * @return array
     */
    public function getSanitized(): array
    {
        $sanitized = $this->validated();


        //Add your code for manipulation with request data here

        return $sanitized;
    }
}
