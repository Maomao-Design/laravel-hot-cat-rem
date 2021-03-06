<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function categoryId(){
        return $this->belongsTo(CategoryProduct::class);
    }

    public function  brandId(){
        return $this->belongsTo(CategoryBrand::class);
    }
}
