<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Define Custom Name for Pk
    protected $primaryKey = "article_id";
    
    public function Category()
    {
        
        return $this->hasOne('App\Models\Category', 'category_id', 'category_id');
    }
    
}
