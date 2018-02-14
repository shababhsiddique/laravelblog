<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('category_id');
            $table->string("category_name");
            $table->text("category_description");
            $table->tinyInteger("publication_status");
            $table->timestamps();
        });


        // Create Sample Categories
        DB::table('category')->insert(
                array(
                    'category_name' => 'Education',
                    'category_description' => 'Investment for the next generation',
                    'publication_status' => 1
                )
        );

        DB::table('category')->insert(
                array(
                    'category_name' => 'Economy',
                    'category_description' => 'Are we really that rich?',
                    'publication_status' => 1
                )
        );

        DB::table('category')->insert(
                array(
                    'category_name' => 'Technology',
                    'category_description' => 'It cant wait',
                    'publication_status' => 1
                )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('category');
    }

}
