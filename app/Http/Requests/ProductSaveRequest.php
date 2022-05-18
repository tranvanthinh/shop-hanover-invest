<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductSaveRequest extends FormRequest
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
            'brand_id' => 'required',
            'name'     => 'required|max:255',
            'price'    => 'required|numeric|number_max_length:6',
            'image'    => 'nullable|mimes:jpg,bmp,png,jpeg|max:3000',
        ];
    }
}
