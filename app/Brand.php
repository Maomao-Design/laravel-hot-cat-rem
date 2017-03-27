<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    public function categoryId(){
        return $this->belongsTo(CategoryBrand::class);
    }

    public function productCategories()
    {
        return $this->hasMany('App\CategoryProduct','brand_id');
    }
}
