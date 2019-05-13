<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
			$table->unsignedInteger('receiving_user_id');
			$table->unsignedInteger('giving_user_id');
			$table->dateTime('when')->nullable();
			$table->integer('minutes');
			$table->boolean('confirmed')->default(0);
			$table->char('notes');
			$table->softDeletesTz();
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
        Schema::dropIfExists('transactions');
    }
}
