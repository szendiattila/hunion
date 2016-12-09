<?php

namespace Modules\Order\Http\Controllers\Dashboard;

use Illuminate\Routing\Controller;
use Modules\Order\Entities\Order;
use Modules\Order\Http\Requests\OrderRequest;
use Modules\Product\Entities\Product;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::paginate();

        return view('order::dashboard.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::pluck('name', 'id');

        return view('order::dashboard.create', compact('products'));
    }

    public function store(OrderRequest $request)
    {
        Order::create($request->all());

        return redirect('dashboard/order');
    }

    public function edit(Order $order)
    {
        $products = Product::pluck('name', 'id');

        return view('order::dashboard.edit', compact('order', 'products'));
    }

    public function update(OrderRequest $request, Order $order)
    {
        $order->update($request->all());

        return redirect('dashboard/order');
    }

    public function destroy(Order $order)
    {
        $order->delete();

        return redirect('dashboard/order');
    }
}
