<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name');
			$table->string('telephone')->default(0);
			$table->string('town')->default(0);
			$table->dateTime('birthday')->nullable();
            $table->string('email')->unique();
			$table->integer('credit')->default(0);
            $table->timestamp('email_verified_at')->nullable();
			$table->char('avatar')->nullable();
			$table->string('language')->default("de");
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
