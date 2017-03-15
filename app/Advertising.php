<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Advertising extends Model
{
    public function authorId(){
        return $this->belongsTo(User::class);
    }

    public function categoryId(){
        return $this->belongsTo(CategoryAdvertising::class);
    }

    
}
