<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Rules\CheckProductExist;
use Illuminate\Foundation\Http\FormRequest;

class BrandDeleteRequest extends FormRequest
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
            'product_exists' => [new CheckProductExist($this->brand)],
        ];
    }

    public function all($keys = null)
    {
        $data                   = parent::all($keys);
        $data['product_exists'] =  $this->route('brand');
        return $data;
    }
}
