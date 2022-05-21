<?php

namespace App\Http\Controllers\Admin;

use App\Models\Restaurant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['restaurants'] = Restaurant::latest()->get();
        return view('admin.restaurant.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.restaurant.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'res_name' => 'required|min:3|max:255',
            'trade_license' => 'required|min:3|max:50',
            'country' => 'required|max:100',
            'city' => 'required|max:100',
            'address' => 'required|max:255',
            'res_discount' => '',
            'description' => 'required',
            'res_image' => 'required|mimes:jpg,jpeg,png,gif,svg,webp|max:2000',
        ]);

        $slug = Str::slug($request->title) . '-' . Str::random(5);
        $restaurant = Restaurant::create($request->all() + [
            'user_id' => Auth::user()->id,
            'slug' => $slug,
            'status' => 1,
        ]);

        if ($request->hasFile('res_image')) {
            $image_path = $this->upload($request->file('res_image'), "restaurant", $restaurant->id);
            $restaurant->update([
                'res_image' => $image_path
            ]);
        }

        Notify::success('Created New Restaurant !', 'Success');
        return redirect()->route('restaurant.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['single_restaurant'] = Restaurant::where('id', $id)->firstOrFail();
        return view('admin.restaurant.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['single_restaurant'] = Restaurant::where('id', $id)->firstOrFail();
        return view('admin.restaurant.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        $request->validate([
            'res_name' => 'required|min:3|max:255',
            'trade_license' => 'required|min:3|max:50',
            'country' => 'required|max:100',
            'city' => 'required|max:100',
            'address' => 'required|max:255',
            'res_discount' => '',
            'description' => 'required',
            'res_image' => '',
        ]);

        $slug = Str::slug($request->res_name) . '-' . Str::random(5);
        $restaurant->update($request->except('_token', 'res_image') + [
            'user_id' => Auth::user()->id,
            'slug' => $slug,
        ]);

        if ($request->hasFile('res_image')) {
            $image_path = $this->upload($request->file('res_image'), "restaurant", $restaurant->id);
            $restaurant->update([
                'res_image' => $image_path
            ]);
        }
        Notify::success('Restaurant infomation Updated', 'Success');
        return redirect()->route('restaurant.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->deleteWith('res_image');
        Notify::error('This Restaurant successfully Deleted', 'Deleted');
        return back();
    }

    // pending restaurant
    public function pendingrestaurant(){
        $data['restaurants'] = Restaurant::where('status', 2)->latest()->get();
        return view('admin.restaurant.pending', $data);
    }

    // Pending Restaurant Published
    public function restaurantpublished(Request $request, $id)
    {
        Restaurant::where('id', $id)->update([
            'status' => $request->status,
        ]);
        Notify::success('Restaurant Published', 'Successfully');
        return redirect(route('restaurant.index'));
    }







}
