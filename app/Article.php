<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //Define Custom Name for Pk
    protected $primaryKey = "article_id";
}
