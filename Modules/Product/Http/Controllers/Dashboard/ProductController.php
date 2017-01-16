<?php

namespace Modules\Product\Http\Controllers\Dashboard;

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
        Product::create($request->input());

        return redirect('dashboard/product');
    }

    public function edit(Product $product)
    {
        return view('product::dashboard.edit', compact('product'));
    }

    public function update(Product $product, ProductRequest $request)
    {
        $product->update($request->input());

        return redirect('dashboard/product');
    }

    public function destroy(Product $product)
    {
        $this->deleteImage($product);

        $product->delete();

        return redirect('dashboard/product');
    }

}
