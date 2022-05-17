<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\User\UserProfileController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth'])->name('dashboard');


// Fontend Controller Routes
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('shop', [FrontendController::class, 'shop'])->name('shop');
Route::get('category/wise/shop/{id}', [FrontendController::class, 'category_wise_shop'])->name('category.shop');
Route::get('product/details/{slug}', [FrontendController::class, 'productdetails'])->name('product.details');
Route::get('cart', [FrontendController::class, 'cart'])->name('cart');
Route::get('checkout', [FrontendController::class, 'checkout'])->name('checkout');
Route::get('training', [FrontendController::class, 'training'])->name('training');
Route::get('finance', [FrontendController::class, 'finance'])->name('finance');
Route::get('safety/management', [FrontendController::class, 'safetymanagement'])->name('safety.management');
Route::get('security/research', [FrontendController::class, 'securityresearch'])->name('security.research');
Route::get('media/centers', [FrontendController::class, 'mediacenter'])->name('media.center');
Route::get('aboutus', [FrontendController::class, 'about'])->name('about');
Route::get('contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('subscribe', [FrontendController::class, 'subscribe'])->name('subscribe');
Route::get('contact/message', [FrontendController::class, 'contactmessage'])->name('contact.message');
Route::get('blog/details/{slug}', [FrontendController::class, 'blogdetails'])->name('blog.details');


Route::post('add_to_cart', [CartController::class, 'add_to_cart'])->name('add_to_cart');
Route::post('details_add_to_cart', [CartController::class, 'details_add_to_cart'])->name('details_add_to_cart');

Route::get('cart/product/count', [CartController::class, 'cartproductcount'])->name('cart.count');

Route::get('cart/content', [CartController::class, 'cartcontent'])->name('cart.content');
Route::get('cart/summary', [CartController::class, 'cartsummary'])->name('cart.summary');

Route::post('order/store', [OrderController::class, 'store'])->name('order.store');
Route::get('checkout', [FrontendController::class, 'checkout'])->name('checkout');

// resoursefull controller
Route::resources([
    'wishlist' => 'WishlistController',
    'savelater' => 'SaveProductController',
]);



// Dashboard Routes
Route::group(
    ['namespace' => 'User', 'middleware' => 'auth'],
    function () {
        Route::get('dashboard', 'UserDashboardController@index')->name('dashboard.index');
        Route::get('user/logout', 'UserDashboardController@logout')->name('user.logout');
        Route::resources([
            'myorder' => 'OrderShowController',
            'transection' => 'TransectionController',
            // 'marriage/profile' => 'UserFormController',
            // 'myorder' => 'UserOrderController',
        ]);

        Route::get('user/profile', 'UserProfileController@index')->name('user.profile');
        Route::get('user/profile/edit', 'UserProfileController@edit')->name('user.profile.edit');
        Route::post('user/profile/update', 'UserProfileController@update')->name('user.profile.update');
        Route::get('user/setting', 'UserProfileController@setting')->name('user.setting');
        Route::post('user/setting/update', 'UserProfileController@changepassword')->name('user.setting.update');

        // for user profile
        // Route::get('create/marriage/profile', [UserProfileController::class, 'accountinfo'])->name('account.info');
    }
);



require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
