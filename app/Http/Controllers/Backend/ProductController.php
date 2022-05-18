<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductSaveRequest;
use App\Repositories\BrandRepository;
use App\Repositories\ProductRepository;
use App\Services\ProductCacheService;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    const PER_PAGE = 10;

    protected $productRepository;

    protected $brandRepository;

    protected $productCacheService;

    public function __construct(ProductRepository $productRepository, BrandRepository $brandRepository, ProductCacheService $productCacheService)
    {
        $this->productRepository   = $productRepository;
        $this->brandRepository     = $brandRepository;
        $this->productCacheService = $productCacheService;
    }

    public function index()
    {
        return view('backend.products.index', [
            'products' => $this->productRepository->paginate(self::PER_PAGE, ['brand']),
        ]);
    }

    public function create()
    {
        return view('backend.products.create', [
            'brands' => $this->brandRepository->all(),
        ]);
    }

    public function store(ProductSaveRequest $request)
    {
        $request->request->add(['feature_image' => $this->getImageFeature()]);
        $this->productRepository->save($request->all());
        $this->productCacheService->clearAll();

        return redirect(route('backend.product.index'))->with(['success' => __('messages.created_success')]);
    }

    public function edit($id)
    {
        $product = $this->productRepository->find($id);

        if (!$product) {
            return redirect(route('backend.product.index'));
        }

        return view('backend.products.edit', [
            'product' => $product,
            'brands'  => $this->brandRepository->all(),
        ]);
    }

    public function update(ProductSaveRequest $request, $id)
    {
        $request->request->add(['feature_image' => $this->getImageFeature()]);
        $this->productRepository->save($request->all(), $id);
        $this->productCacheService->clearAll();

        return redirect(route('backend.product.index'))->with(['success' => __('messages.updated_success')]);
    }

    public function destroy($id)
    {
        $this->productRepository->delete([$id]);
        $this->productCacheService->clearAll();
        return redirect(route('backend.product.index'))->with(['success' => __('messages.deleted_success')]);
    }

    public function media($id)
    {
        $product = $this->productRepository->find($id);

        if (!$product) {
            return redirect(route('backend.product.index'));
        }

        return view('backend.products.medias.index', [
            'product' => $product,
        ]);
    }

    private function getImageFeature()
    {
        if (request()->hasFile('image')) {
            $file = request()->file('image')->store('public/images');
            return Storage::disk(config('filesystems.disks.local.driver'))->url($file);
        }

        return '';
    }
}
