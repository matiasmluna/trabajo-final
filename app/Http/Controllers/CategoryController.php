<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index($categorySlug) {
        $category = Category::where('slug', $categorySlug)->first();

        return view('category', [
            'category' => $category
        ]);
    }
}
