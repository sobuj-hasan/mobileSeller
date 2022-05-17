<?php

namespace App\Http\Controllers;

use App\Models\SaveLater;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;
use Laravel\Sail\SailServiceProvider;

class SaveProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $savelater_products = SaveLater::where('user_id', Auth::user()->id)->get();
        return view('dashboard.savelater_product', compact('savelater_products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!Auth::user()) {
            Notify::error('Please Login first !', 'error');
            return redirect()->route('login');
        }

        $result = SaveLater::where('user_id', Auth::user()->id)->where('product_id', $request->product_id)->count();
        if ($result != 0) {
            Notify::error('Already saved this product', 'Error');
            return back();
        }

        SaveLater::create($request->all() + [
            'user_id' => Auth::id(),
        ]);
        Notify::success('Product save in your profile', 'Success');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        SaveLater::where('id', $id)->first()->delete();
        Notify::success('This Savelater Product Deleted', 'Deleted');
        return back();
    }
}
