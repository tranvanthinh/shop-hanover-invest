<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function show($id)
    {
        $product = $this->productRepository->find($id);

        if (!$product) {
            abort(404);
        }

        return view('frontend.products.show', ['product' => $product]);
    }
}
