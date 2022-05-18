<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandDeleteRequest;
use App\Http\Requests\BrandSaveRequest;
use App\Repositories\BrandRepository;

class BrandController extends Controller
{
    const PER_PAGE = 10;

    protected $brandRepository;

    public function __construct(BrandRepository $brandRepository)
    {
        $this->brandRepository = $brandRepository;
    }

    public function index()
    {
        return view('backend.brands.index', [
            'brands' => $this->brandRepository->paginate(self::PER_PAGE, ['products']),
        ]);
    }

    public function create()
    {
        return view('backend.brands.create');
    }

    public function store(BrandSaveRequest $request)
    {
        $this->brandRepository->save($request->all());

        return redirect(route('backend.brand.index'))->with(['success' => __('messages.created_success')]);
    }

    public function edit($id)
    {
        $brand = $this->brandRepository->find($id);

        if (!$brand) {
            return redirect(route('backend.brand.index'));
        }

        return view('backend.brands.edit', ['brand' => $brand]);
    }

    public function update(BrandSaveRequest $request, $id)
    {
        $brand = $this->brandRepository->find($id);

        if (!$brand) {
            return redirect(route('backend.brand.index'))->with(['error' => __('messages.record_404')]);
        }

        $this->brandRepository->save($request->all(), $id);

        return redirect(route('backend.brand.index'))->with(['success' => __('messages.updated_success')]);
    }

    public function destroy(BrandDeleteRequest $request, $id)
    {
        $this->brandRepository->delete([$id]);
        return redirect(route('backend.brand.index'))->with(['success' => __('messages.deleted_success')]);
    }
}
