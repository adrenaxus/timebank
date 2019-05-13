<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagTables extends Migration
{
    public function up()
    {
		/*
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title_de');
			$table->string('title_it');
			$table->string('title_ld');
			$table->json('slug')->nullable();
			$table->string('icon')->nullable();
            $table->timestamps();
        });			
		*/
		
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
			$table->string('title_de');
			$table->string('title_it');
			$table->string('title_ld');			
            $table->string('slug')->nullable();
            $table->string('type')->nullable();
			$table->string('icon')->nullable();
            $table->integer('order_column')->nullable();
            $table->timestamps();
			
			//$table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

        Schema::create('taggables', function (Blueprint $table) {
            $table->integer('tag_id')->unsigned();
            $table->integer('taggable_id')->unsigned();
            $table->string('taggable_type');

            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
		
    }

    public function down()
    {
        Schema::drop('taggables');
        Schema::drop('tags');
		//Schema::drop('categories');
    }
}
