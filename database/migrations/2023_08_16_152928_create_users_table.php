<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rol');
            $table->string('email')->unique();
            $table->string('password');
            $table->timestamps();
            $table->primary('id'); // Since the primary key was not set in the original SQL
        });

        // Insert data from the SQL dump
        DB::table('users')->insert([
            ['id' => 1, 'name' => 'Micasa', 'rol' => 'Admin', 'email' => 'Micasa@gmail.com', 'password' => '098f6bcd4621d373cade4e832627b4f6'],
            ['id' => 3, 'name' => 'Daniel', 'rol' => 'Usuario', 'email' => 'Daniel@gmail.com', 'password' => '098f6bcd4621d373cade4e832627b4f6'],
            ['id' => 4, 'name' => 'Alexia', 'rol' => 'Usuario', 'email' => 'Alexia@gmail.com', 'password' => '098f6bcd4621d373cade4e832627b4f6'],
            ['id' => 5, 'name' => 'pepillo', 'rol' => 'Admin', 'email' => 'pepillo@abc.com', 'password' => '12345678'],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
