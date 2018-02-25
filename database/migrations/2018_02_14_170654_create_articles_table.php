<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            
            $table->increments('article_id');
            
            $table->string('article_title',100);
            $table->string('article_image',100)->nullable();
            $table->text('article_body')->nullable();
            $table->text('article_preface')->nullable();
            $table->string('article_slug',100);
            
            $table->string('article_author',100);
            
            $table->integer('category_id');
            
            $table->tinyInteger('favourite_status')->default(0);
            $table->tinyInteger('publication_status')->default(1);
            $table->tinyInteger('deletion_status')->default(0);
            
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
