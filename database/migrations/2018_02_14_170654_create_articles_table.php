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
            $table->text('article_body',100);
            $table->string('article_slug',100);
            
            $table->integer('category_id');
            
            $table->tinyInteger('publication_status');
            $table->tinyInteger('deletion_status');
            
            $table->timestamps();
        });
        
        DB::table('articles')->insert(
                array(
                    'article_title' => 'Someday I will master laravel',
                    'article_slug' => 'someday-i-will-master-laravel',
                    'article_body' => 'That day wont be far',
                    'category_id' => 1,
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
