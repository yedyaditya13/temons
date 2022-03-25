<?php

namespace App\Http\Requests\Admin\Member;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;

class StoreMember extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return Gate::allows('admin.member.create');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {

        return [
            'code_member' => ['required', Rule::unique('member', 'code_member'), 'string'],
            'address' => ['required', 'string'],
            'phone' => ['required', 'string'],
            'checkin' => ['required', 'string'],
            'checkout' => ['required', 'string'],
            'member_status' => ['required', 'boolean'],
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

    public function getMemberStatus() {
        $date = Carbon::now();
        $dateUser = $this->has('checkout');
        

        if ($date < $this->has('checkout')) {
            return $this->get('member_status') == 1;
        }
        return 1;
    }
}
