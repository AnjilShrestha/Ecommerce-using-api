<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    //
     public function index(Request $request)
    {
        $query = $request->input('search')??'';
        if ($query) {
            // Search products
            $response = Http::get("https://dummyjson.com/products/search", [
                'q' => $query,
            ]);
        } else {
            // Fetch products from DummyJSON API
            $response = Http::get('https://dummyjson.com/products');
        }
        $products = $response->json()['products']??[];
        // Pass to view
        return view('index', compact('products','query'));
    }

    public function show($id)
    {
        $response = Http::get("https://dummyjson.com/products/{$id}");
        if ($response->failed()) {
            abort(404);
        }
        $product = $response->json();
        return view('productdetails', compact('product'));
    }

}
