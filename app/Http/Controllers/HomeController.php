<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::all();

        return view('home', [
            'categories' => $categories
        ]);
    }

    // public function buscador(Request $req){
    //   $productos = Product::where("name","like",$req->texto."%")->get();
    //   return view("homebuscador",compact("nombres"));
    // }
}
