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
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('category_id');
            $table->string("category_name");
            $table->text("category_description");
            $table->tinyInteger("publication_status");
            $table->timestamps();
        });


        // Create Sample Categories
        DB::table('categories')->insert(
                array(
                    'category_name' => 'বাংলাদেশ',
                    'category_description' => 'বাংলাদেশ বাংলাদেশ',
                    'publication_status' => 1,
                    'created_at' => date('Y-m-d H:i:s')
                )
        );

        DB::table('categories')->insert(
                array(
                    'category_name' => 'আন্তর্জাতিক',
                    'category_description' => 'আন্তর্জাতিক আন্তর্জাতিক',
                    'publication_status' => 1,
                    'created_at' => date('Y-m-d H:i:s')
                )
        );


        DB::table('categories')->insert(
                array(
                    'category_name' => 'খেলা',
                    'category_description' => 'খেলা খেলা',
                    'publication_status' => 1,
                    'created_at' => date('Y-m-d H:i:s')
                )
        );

        DB::table('categories')->insert(
                array(
                    'category_name' => 'অর্থনীতি',
                    'category_description' => 'অর্থনীতি অর্থনীতি অর্থনীতি',
                    'publication_status' => 1,
                    'created_at' => date('Y-m-d H:i:s')
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
