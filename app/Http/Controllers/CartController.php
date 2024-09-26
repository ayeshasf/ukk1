<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Toy;

use App\Models\Cart;



class CartController extends Controller
{
    public function index()
    {
        return view('cart.index');
    }

    public function add(Request $request)
    {
        $cart = session()->get('cart', []);
        $id = $request->id;

        // Jika item sudah ada di keranjang, tambah quantity
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            // Jika belum ada, tambahkan item baru
            $cart[$id] = [
                "name" => $request->name,
                "quantity" => 1,
                "price" => $request->price
            ];
        }

        session()->put('cart', $cart);
        session()->put('cart_total', array_sum(array_column($cart, 'price')));

        return redirect()->route('cart.index');
    }

    public function remove($id)
    {
        $cart = session()->get('cart');

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.index');
    }
    public function checkout()
{
    session()->forget('cart');
    return redirect()->route('cart.index')->with('success', 'Pesanan berhasil dibuat!');
}
}
