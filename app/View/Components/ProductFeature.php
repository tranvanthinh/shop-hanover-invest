<?php

declare(strict_types=1);

namespace App\View\Components;

use App\Services\ProductCacheService;
use Illuminate\View\Component;

class ProductFeature extends Component
{
    public $products;

    /**
     * ProductFeature constructor.
     * @param ProductCacheService $productCacheService
     */
    public function __construct(ProductCacheService $productCacheService)
    {
        $this->products = $productCacheService->paginate();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Closure|\Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.product-feature');
    }
}
