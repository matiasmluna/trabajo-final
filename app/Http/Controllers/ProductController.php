<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index($productId) {
        $product = Product::find($productId);

        return view('product', [
            'product' => $product
        ]);
    }
}
