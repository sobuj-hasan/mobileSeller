<?php

namespace App\Models;

use App\Helpers\FileUploadHelper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory, FileUploadHelper;

    protected $fillable = [
        'res_name',
        'user_id',
        'trade_license',
        'country',
        'city',
        'address',
        'res_discount',
        'description',
        'res_image',
        'status',
    ];

    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
