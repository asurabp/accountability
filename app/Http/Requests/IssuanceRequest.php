<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IssuanceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'item_id' => 'required|int',
            'employee_id' => 'required|int',
            'quantity' => 'required|numeric',
            'amount' => 'nullable',
            'remark' => 'nullable',
        ];
    }
}
