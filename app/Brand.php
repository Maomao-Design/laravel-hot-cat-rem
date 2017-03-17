<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Brand extends Model
{
    public function categoryId(){
        return $this->belongsTo(CategoryBrand::class);
    }
}
