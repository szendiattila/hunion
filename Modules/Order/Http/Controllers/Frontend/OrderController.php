<?php

namespace Modules\Order\Http\Controllers\Frontend;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use Modules\Order\Emails\OrderPlaced;
use Modules\Order\Entities\Order;
use Modules\Order\Http\Requests\OrderRequest;
use Modules\Product\Entities\Product;

class OrderController extends Controller
{
    public function create($id)
    {
        $product = Product::findOrFail($id);

        return view('order::frontend.create', compact('product'));
    }

    public function store(OrderRequest $request)
    {
        $order = Order::create($request->all());

        Mail::to('hunion@tolna.net')->send(new OrderPlaced($order));

        return redirect('sikeres-ajanlatkeres');
    }
}
