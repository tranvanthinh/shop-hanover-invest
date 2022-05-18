<?php

declare(strict_types=1);

namespace App\Rules;

use App\Repositories\ProductRepository;
use Illuminate\Contracts\Validation\Rule;

class CheckProductExist implements Rule
{
    protected $brandId;

    /**
     * Create a new rule instance.
     *
     * @param mixed $brandId
     */
    public function __construct($brandId)
    {
        $this->brandId = $brandId;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return app(ProductRepository::class)->countByBrandId($this->brandId) <= 0;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('messages.delete_brand_have_product_exists');
    }
}
