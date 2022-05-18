<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Billing;
use App\Models\Product;
use App\Models\Category;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Models\ContactFormSubmit;
use Idemonbd\Notify\Facades\Notify;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index(){
        $explore_products = Product::where('category_id', 1)->inRandomOrder()->limit(4)->get();
        $blogs = Blog::inRandomOrder()->limit(3)->get();
        return view('index', compact('explore_products', 'blogs'));
    }

    public function food_details(){
        return view('food_details');
    }

    public function restaurant_details(){
        return view('restaurant_details');
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
