<?php

declare(strict_types=1);

namespace App\Services;

use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Cache;

class ProductCacheService
{
    const PER_PAGE = 12;

    const CACHE_TIME = 1440;

    const CACHE_KEY = 'product:feature:page:';

    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function paginate()
    {
        $cacheKey = self::CACHE_KEY . request()->get('page') ?? 1;

        return Cache::get($cacheKey, function () use ($cacheKey) {
            $featureProducts = $this->productRepository->paginate(self::PER_PAGE);

            if ($featureProducts->total() > 0) {
                Cache::add($cacheKey, $featureProducts, self::CACHE_TIME);
            }

            return $featureProducts;
        });
    }

    public function clearAll(): void
    {
        Cache::flush();
    }
}
