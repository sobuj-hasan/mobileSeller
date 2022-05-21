<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\MultipleImage;
use Idemonbd\Notify\Facades\Notify;
use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

use function PHPUnit\Framework\fileExists;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::get();
        $restaurants = Restaurant::get();
        return view('admin.products.create', compact('categories', 'restaurants'));
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
            'category_id' => ['required', 'numeric'],
            'restaurant_id' => ['required', 'numeric'],
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'price' => ['required', 'string', 'numeric'],
            'stock' => ['required', 'numeric'],
            'description' => ['required', 'string' ],
            'image' => 'required | mimes:jpg,jpeg,png,gif,svg,webp|max:2000',
        ]);
        $slug = Str::slug($request->name) . '-' . Str::random(5);
        $product = Product::create($request->all() + [
            'user_id' => Auth::id() ?? '',
            'slug' => $slug,
            'status' => 1,
        ]);

        if ($request->hasFile('image')) {
            $image_path = $this->upload($request->file('image'), "products", $product->id);
            $product->update([
                'image' => $image_path
            ]);
        }

        if ($request->hasFile('image_name')) {
            $flag = 1;

            foreach ($request->file('image_name') as $single_photo) {
                $image_path = $this->upload($single_photo, "products", $product->id . "-" . $flag++);
                MultipleImage::create([
                    'product_id' => $product->id,
                    'image_name' => $image_path,
                ]);

                if ($flag == 4) {
                    break;
                }
            }
        }
        Notify::success('Foods has been added !', 'Success');
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $multiple_image = MultipleImage::where('product_id', $product->id)->get();
        return view('admin.products.show', compact('product', 'multiple_image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::get();
        $restaurants = Restaurant::get();
        return view('admin.products.edit', compact('product', 'categories', 'restaurants'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'category_id' => ['required', 'numeric'],
            'restaurant_id' => ['required', 'numeric'],
            'name' => ['required', 'string', 'min:3', 'max:255'],
            'price' => ['required', 'string', 'numeric'],
            'stock' => ['required', 'numeric'],
            'description' => ['required', 'string'],
            'image' => 'mimes:jpg,jpeg,png,gif,svg,webp|max:2000',
        ]);
        $slug = Str::slug($request->name) . '-' . Str::random(5);
        $product->update($request->except('image', 'image_name') + [
            'slug' => $slug,
        ]);

        if ($request->hasFile('image')) {
            $image_path = $this->upload($request->file('image'), "products", $product->id);
            $product->update([
                'image' => $image_path
            ]);
        }

        if ($request->hasFile('image_name')) {

            $multiple_images = MultipleImage::where('product_id', $product->id)->get();

            foreach ($multiple_images as $multiple_image) {
                if ($multiple_image) {
                    $multiple_image->deleteWith('image_name');
                }
            }

            if ($request->hasFile('image_name')) {
                $flag = 1;

                foreach ($request->file('image_name') as $single_photo) {
                    $image_path = $this->upload($single_photo, "products", $product->id . "-" . $flag++);
                    MultipleImage::create([
                        'product_id' => $product->id,
                        'image_name' => $image_path,
                    ]);

                    if ($flag == 4) {
                        break;
                    }
                }
            }
        }
        Notify::success('Foods has been updated!', 'Success');
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Notify::error('Foods Deleted', 'Deleted');
        return back();
    }
}
