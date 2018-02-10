<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        
        Schema::create('admin', function (Blueprint $table) {
            $table->increments('admin_id');
            $table->string('admin_name', 100);
            $table->string('admin_email', 200);
            $table->string('password', 32);
            $table->string('type', 10);
            $table->timestamps();
        });

        // Create Super Admin
        DB::table('admin')->insert(
                array(
                    'admin_name' => 'Super Admin',
                    'admin_email' => 'admin@cms.com',
                    'password' => md5('123456'),
                    'type' => 'root'
                )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('admin');
    }

}
