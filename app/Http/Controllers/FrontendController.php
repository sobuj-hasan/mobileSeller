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

    public function shop(){
        $explore_products = Product::where('category_id', 1)->inRandomOrder()->limit(4)->get();
        $categories = Category::limit(20)->get();
        $topsell_products = Product::inRandomOrder()->limit(48)->get();
        $newarrivals = Product::latest()->limit(48)->get();
        $blogs = Blog::inRandomOrder()->limit(3)->get();
        return view('shop', compact('categories', 'topsell_products', 'newarrivals', 'explore_products', 'blogs'));
    }

    public function category_wise_shop(Request $request, $id){
        $categories = Category::limit(20)->get();
        $explore_products = Product::where('category_id', 1)->inRandomOrder()->limit(4)->get();
        $category_product = Product::where('category_id', $id)->get();
        return view('category_wise_shop', compact('categories', 'explore_products', 'category_product'));
    }

    public function productdetails(Request $request,$slug){
        $explore_products = Product::where('category_id', 1)->inRandomOrder()->limit(4)->get();
        $singleproduct = Product::where('slug', $slug)->firstOrFail();
        $related_products = Product::where('category_id', $singleproduct->category_id)->where('id', '!=', $singleproduct->id)->get();
        $bestsell_products = Product::inRandomOrder()->limit(48)->get();
        $blogs = Blog::inRandomOrder()->limit(3)->get();
        return view('product_details', compact('singleproduct', 'related_products', 'bestsell_products', 'blogs', 'explore_products'));
    }

    public function blogdetails($slug){
        $blogs = Blog::inRandomOrder()->limit(3)->get();
        $single_blog = Blog::where('slug', $slug)->firstOrFail();
        return view('blog_details', compact('single_blog', 'blogs'));
    }

    public function cart(){
        return view('cart');
    }

    
    public function training(){
        return view('training');
    }
    
    public function finance(){
        return view('finance');
    }
    
    public function safetymanagement(){
        return view('safety_management');
    }
    
    public function securityresearch(){
        return view('security_research');
    }
    
    public function mediacenter(){
        return view('media_center');
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
