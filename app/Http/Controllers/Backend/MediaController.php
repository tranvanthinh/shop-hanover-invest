<?php

declare(strict_types=1);

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MediaUploadRequest;
use App\Repositories\MediaRepository;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Storage;

class MediaController extends Controller
{
    protected $productRepository;

    protected $mediaRepository;

    public function __construct(ProductRepository $productRepository, MediaRepository $mediaRepository)
    {
        $this->productRepository = $productRepository;
        $this->mediaRepository   = $mediaRepository;
    }

    public function assignToProduct(MediaUploadRequest $request, $productId)
    {
        $file    = $request->file('image')->store('public/images');
        $fileUrl = Storage::disk(config('filesystems.disks.local.driver'))->url($file);
        $product = $this->productRepository->find($productId);
        $product->thumbs()->create(['name' => $fileUrl]);

        return redirect()->back()->with(['success' => __('messages.uploaded_success')]);
    }

    public function destroy($id)
    {
        $this->mediaRepository->delete([$id]);
        return redirect()->back()->with(['success' => __('messages.deleted_success')]);
    }
}
