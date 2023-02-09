<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $item = Item::paginate(10);
        return view('home', compact('item'));
    }

    public function detail($id)
    {
        $item = Item::findOrFail($id);
        return view('detail', compact('item'));
    }

    public function addCart(Request $request)
    {
        $data = new \App\Models\Order();
            $data->user_id = $request->input('user_id');
            $data->item_id = $request->input('item_id');
            $data->price = $request->input('price');
        $data->save();

        return redirect('cart')->with('success', 'Data berhasil dibuat');
    }

    public function cart()
    {
        $order = Order::where('user_id', Auth::user()->id)->get();
        return view('cart', compact('order'));
    }

    public function checkout()
    {
        // $order = Order::where('user_id', Auth::user()->id)->get();
        Order::where('user_id', Auth::user()->id)->delete();
        return view('checkout');
    }
}
