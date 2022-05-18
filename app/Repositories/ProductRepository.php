<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    const PER_PAGE = 20;

    public function save(array $input, $id = null)
    {
        $data = [
            'name'        => $input['name'],
            'brand_id'    => $input['brand_id'],
            'price'       => $input['price'],
            'description' => $input['description'],
            'image'       => $input['feature_image'] ?? null,
        ];

        return Product::updateOrCreate(['id' => $id], array_filter($data));
    }

    public function paginate($limit = self::PER_PAGE, array $with = [], $orderBys = ['id' => 'desc'])
    {
        $query = Product::query();

        foreach ($orderBys as $column => $order) {
            $query->orderBy($column, $order);
        }

        if (!empty($with)) {
            $query->with($with);
        }

        return $query->paginate($limit);
    }

    public function find($id)
    {
        return Product::find($id);
    }

    public function countByBrandId($brandId)
    {
        return Product::where('brand_id', $brandId)->count();
    }

    public function delete(array $ids)
    {
        return Product::destroy($ids);
    }
}
