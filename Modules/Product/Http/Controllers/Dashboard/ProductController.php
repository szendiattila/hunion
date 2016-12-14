<?php

namespace Modules\Product\Http\Controllers\Dashboard;

use App\Http\Controllers\FileUploadController;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;
use Modules\Product\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate();

        return view('product::dashboard.index', compact('products'));
    }

    public function create()
    {
        return view('product::dashboard.create');
    }

    public function store(ProductRequest $request)
    {
        $this->handleStoreImage($request);

        Product::create($request->input());

        return redirect('dashboard/product');
    }

    public function edit(Product $product)
    {
        return view('product::dashboard.edit', compact('product'));
    }

    public function update(Product $product, ProductRequest $request)
    {
        $this->handleImage($product, $request);

        $product->update($request->input());

        return redirect('dashboard/product');
    }

    public function destroy(Product $product)
    {
        $this->deleteImage($product);

        $product->delete();

        return redirect('dashboard/product');
    }

    /**
     * @param Product $product
     * @param ProductRequest $request
     */
    private function handleImage(Product $product, ProductRequest $request)
    {
        if ($request->file('image')) {
            $this->deleteImage($product);

            $newImageName = FileUploadController::storeImage($request, 'image', 'product', true);

            $request->request->add(['image' => $newImageName]);
        }
    }

    /**
     * @param Product $product
     */
    private function deleteImage(Product $product)
    {
        FileUploadController::removeFile($product->image, 'product', true);
    }

    /**
     * @param ProductRequest $request
     */
    public function handleStoreImage(ProductRequest $request)
    {
        if ($request->file('image')) {
            $imageName = FileUploadController::storeImage($request, 'image', 'product', true, 200, 200);

            $request->request->add(['image' => $imageName]);
        }
    }


}
