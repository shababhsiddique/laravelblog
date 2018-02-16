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
            $table->text('article_body',100)->nullable();
            $table->string('article_slug',100);
            
            $table->integer('category_id');
            
            $table->tinyInteger('favourite_status')->default(0);
            $table->tinyInteger('publication_status')->default(1);
            $table->tinyInteger('deletion_status')->default(0);
            
            $table->timestamps();
        });
        
        DB::table('articles')->insert(
                array(
                    'article_title' => 'Someday I will master laravel',
                    'article_slug' => 'someday-i-will-master-laravel',
                    'article_body' => 'That day wont be far',
                    'category_id' => 1,
                    'favourite_status' => 0,
                    'publication_status' => 1,
                    'deletion_status' => 0
                )
        );
        
        
        DB::table('articles')->insert(
                array(
                    'article_title' => 'That Day Is Near',
                    'article_slug' => 'that-day',
                    'article_body' => 'That day wont be far',
                    'category_id' => 2,
                    'favourite_status' => 0,
                    'publication_status' => 1,
                    'deletion_status' => 0
                )
        );
        
        
        DB::table('articles')->insert(
                array(
                    'article_title' => 'Are We There Yet',
                    'article_slug' => 'are-we-there',
                    'article_body' => 'That day wont be far',
                    'category_id' => 3,
                    'favourite_status' => 0,
                    'publication_status' => 1,
                    'deletion_status' => 0
                )
        );
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
