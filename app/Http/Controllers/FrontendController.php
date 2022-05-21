<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Billing;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subscribe;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use App\Models\MultipleImage;
use App\Models\ContactFormSubmit;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $data['restaurants'] = Restaurant::where('status', 1)->latest()->limit(20)->get();
        $data['foods'] = Product::where('status', 1)->latest()->limit(40)->get();
        return view('index', $data);
    }

    public function food_details($slug){
        $data['single_food'] = Product::where('slug', $slug)->first();
        $data['multipleimage'] = MultipleImage::where('product_id', $data['single_food']->id)->get();
        $data['related_products'] = Product::where('category_id', $data['single_food']->category_id)->where('id', '!=', $data['single_food']->id)->get();
        return view('food_details', $data);
    }

    public function restaurant_details($id){
        $data['single_restaurant'] = Restaurant::where('id', $id)->where('status', 1)->firstOrFail();
        $data['restaurant_foods'] = Product::where('restaurant_id', $id)->latest()->limit(8)->get();
        return view('restaurant_details', $data);
    }

    public function search_result(){
        return view('search_result');
    }

    public function cart(){
        return view('cart');
    }

    public function contact(){
        return view('contact');
    }
    
    public function about(){
        return view('about');
    }
    
    public function subscribe(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);
        if (Auth::user()) {
            $user_id = Auth::user()->id;
            Subscribe::create($request->except('_token') + [
                'user_id' => $user_id,
            ]);
        } else {
            Subscribe::create($request->except('_token'));
        }
        Notify::success('Successfully Subscribed', 'Congrats, Dear');
        return back();
    }
    
    public function contactmessage(Request $request){
        $request->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        ContactFormSubmit::create($request->all());
        Notify::success('Message successfully Submited', 'Success');
        return back();
    }

    
    function checkout()
    {
        if (!Auth::user()) {
            Notify::error('Login first !', 'error');
            return redirect()->route('login');
        }

        $data['countb']  = Billing::where('user_id', Auth::user()->id)->count();
        $data['billing'] = Billing::where('user_id', Auth::user()->id)->first();


        return view('checkout', $data);
    }
    
    
    
    
    
}
