<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MarketsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'value'=>['required','numeric','min:100','max:999999'],
            'address'=>'required',
            'employees_quantity'=>['required','numeric','min:10','max:10000000'],
            'occupancy_rate'=>['required','numeric','min:1','max:100']
        ];
    }
}
