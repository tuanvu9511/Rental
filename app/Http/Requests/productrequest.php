<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productrequest extends FormRequest
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
            'input_newcategory' =>'unique:productcategories,namecategory|min:1',
            'input_newbrand'=>'unique:productbrands,namebrand|min:1',
            'input_newspecification'=>'unique:productspecifications,specification|min:1',
            'serialnumber'=>'unique:products|min:1',
        ];

    }
    public function messages()
    {
        return [
            'input_newcategory.unique' => 'Dữ liệu đã tồn tại, vui lòng kiểm tra lại!',
            'input_newbrand.unique' => 'Dữ liệu đã tồn tại, vui lòng kiểm tra lại!',
            'input_newspecification.unique' => 'Dữ liệu đã tồn tại, vui lòng kiểm tra lại!',
            'serialnumber.unique' => 'Dữ liệu đã tồn tại, vui lòng kiểm tra lại!',
            'input_newcategory.min' => 'Dữ liệu không được để trống',
            'input_newbrand.min' => 'Dữ liệu không được để trống',
            'input_newspecification.min' => 'Dữ liệu không được để trống',
            'serialnumber.min' => 'Dữ liệu không được để trống',
        ];
    }
}
