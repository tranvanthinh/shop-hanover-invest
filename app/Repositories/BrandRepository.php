<?php

declare(strict_types=1);

namespace App\Repositories;

use App\Models\Brand;

class BrandRepository
{
    public function save(array $input, $id = null)
    {
        return Brand::updateOrCreate(
            ['id' => $id],
            ['name' => $input['name']]
        );
    }

    public function all()
    {
        return Brand::all();
    }

    public function paginate($limit, array $withCount = [], $orderBys = ['id' => 'desc'])
    {
        $query = Brand::query();

        foreach ($orderBys as $column => $order) {
            $query->orderBy($column, $order);
        }

        if (!empty($withCount)) {
            $query->withCount($withCount);
        }

        return $query->paginate($limit);
    }

    public function find($id)
    {
        return Brand::find($id);
    }

    public function delete(array $ids)
    {
        return Brand::destroy($ids);
    }
}
