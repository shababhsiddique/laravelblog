<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{    
    //Defined Primary Key
    protected $primaryKey = "category_id";
    
    public function Articles()
    {
        //Each category has many articles
        return $this->hasMany('App\Models\Article', 'category_id', 'category_id');
    }
    
   
}
