<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_description',
        'long_description',
        'brand_id',
        'category_id',
        'unit_id',
        'unit_cost',
        'unit_price',
        'image_0',
        'image_1',
        'image_2',
        'image_3',
        'image_4',
        'video_link',
        'is_published',
    ];

}