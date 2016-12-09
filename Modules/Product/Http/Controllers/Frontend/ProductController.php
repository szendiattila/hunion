<?php

namespace Modules\Product\Http\Controllers\Frontend;

use Illuminate\Routing\Controller;
use Modules\Product\Entities\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(8);

        return view('product::frontend.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('product::frontend.show', compact('product'));
    }
}
