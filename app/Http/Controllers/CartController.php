<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //
     public function index(Request $request)
    {
        $cart = $request->session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    // Add product to cart
    public function add(Request $request)
    {
        $product = $request->input('product');

        $cart = $request->session()->get('cart', []);

        // Use product id as key to prevent duplicates
        $id = $product['id'];

        if(isset($cart[$id])) {
            $cart[$id]['quantity'] += 1;
        } else {
            $cart[$id] = [
                'title' => $product['title'],
                'price' => $product['price'],
                'thumbnail' => $product['thumbnail'],
                'quantity' => 1
            ];
        }

        $request->session()->put('cart', $cart);

         $request->session()->flash('success', 'Product added to cart!');
        return redirect()->back();
    }

    // Remove product from cart
    public function remove(Request $request)
    {
        $id = $request->input('id');
        $cart = $request->session()->get('cart', []);

        if(isset($cart[$id])) {
            unset($cart[$id]);
            $request->session()->put('cart', $cart);
        }

        $request->session()->flash('success', 'Product removed from cart.');
        return redirect()->back();
    }
}
