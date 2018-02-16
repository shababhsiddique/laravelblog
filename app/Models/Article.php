<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Defined Primary Key
    protected $primaryKey = "article_id";
    
    public function Category()
    {
        //Each Article has one category
        return $this->hasOne('App\Models\Category', 'category_id', 'category_id');
    }
    
}
