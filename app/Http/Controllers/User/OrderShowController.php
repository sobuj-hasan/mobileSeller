<?php

namespace App\Http\Controllers\User;

use App\Models\Order;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class OrderShowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::where('user_id', Auth::user()->id)->where('status', '!=', 5)->latest()->get();
        return view('dashboard/order/index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cancel_orders = Order::where('user_id', Auth::user()->id)->where('status', 5)->get();
        return view('dashboard.order.create', compact('cancel_orders'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order, $id)
    {
        $order = Order::where('id', $id)->first();
        $single_order = Order::where('id', $id)->firstOrFail();
        return view('dashboard.order.show', compact('single_order', 'order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order, $id)
    {
        $order = Order::find($id);
        $order->status = 5;
        $order->save();
        Notify::error('Cancel This Order', 'Successfully');
        return back();
    }
}
