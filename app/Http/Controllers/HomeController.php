<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Order;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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

    public function destroyCart($id)
    {
        Order::destroy($id);

        return redirect()->back();
    }

    public function checkout()
    {
        // $order = Order::where('user_id', Auth::user()->id)->get();
        Order::where('user_id', Auth::user()->id)->delete();
        return view('checkout');
    }

    public function profile()
    {
        return view('profile');
    }

    public function updateProfile(Request $request)
    {
        if(request()->hasfile('display_picture_link')){

            $display_picture_link_name = time().'.'.request()->display_picture_link->getClientOriginalExtension();

            request()->display_picture_link->move(public_path('display_picture'), $display_picture_link_name);

        } else {
            $display_picture_link_name = Auth::user()->display_picture_link;
        }
        
        $data = \App\Models\User::find(Request()->input('id'));
            $data->first_name = $request->input('first_name');
            $data->last_name = $request->input('last_name');
            $data->email = $request->input('email');
            $data->gender_id = $request->input('gender_id');
            $data->display_picture_link = $display_picture_link_name;
            $data->password = Hash::make($request->input('password'));
            
        $data->save();

      return redirect('saved')->with('msg', 'Data berhasil diperbaharui');
    }

    public function accMaintenance()
    {
        $account = User::get();
        return view('acc_maintenance', compact('account'));
    }

    public function accRole($id)
    {
        $account = User::findOrFail($id);
        return view('acc_role', compact('account'));
    }

    public function updateRole(Request $request)
    {
        
        $data = User::find(Request()->input('id'));
            $data->role_id = $request->input('role_id');
        $data->save();

      return redirect('saved')->with('msg', 'Data berhasil diperbaharui');
    }

    public function destroyUser($id)
    {
        User::destroy($id);

        return redirect('saved');
    }

    public function saved()
    {
        return view('saved_notif');
    }
}
