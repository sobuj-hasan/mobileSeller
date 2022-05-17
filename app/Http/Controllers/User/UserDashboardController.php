<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\SaveLater;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::user()->id)->count();
        $wishlists = Wishlist::where('user_id', Auth::user()->id)->count();
        $saveproducts = SaveLater::where('user_id', Auth::user()->id)->count();
        $cancel_orders = Order::where('user_id', Auth::user()->id)->where('status', 5)->count();
        return view('dashboard.index', compact('orders', 'cancel_orders', 'saveproducts', 'wishlists'));
    }

    public function logout()
    {
        Auth::logout();

        $notification = array(
            'message' => 'Logout!',
            'alert-type' => 'success'
        );

        return redirect()->route('login')->with($notification);
    }

}
