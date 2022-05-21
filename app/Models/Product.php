<?php

namespace App\Models;

use App\Helpers\FileUploadHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, FileUploadHelper;

    protected $fillable = [
        'restaurant_id',
        'category_id',
        'name',
        'slug',
        'price',
        'image',
        'stock',
        'description',
        'user_id',
        'image',
        'status',
    ];

    protected $with = ['category', 'user', 'multipleimage', 'restaurant'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function multipleimage()
    {
        return $this->belongsTo(MultipleImage::class, 'product_id');
    }



}
