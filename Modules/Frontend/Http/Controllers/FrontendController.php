<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;


class FrontendController extends Controller
{
    public function index()
    {
//        $categories = Category::with('products')->whereHas('products')->get();
//
//        return view('frontend::frontend.product', compact('categories'));
    }

}
