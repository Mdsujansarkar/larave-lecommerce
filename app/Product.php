<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id','brand_id','product_name','product_price','product_quantity','product_long_desc','product_short_desc',/*'product_image',*/'publication_status'];
}
