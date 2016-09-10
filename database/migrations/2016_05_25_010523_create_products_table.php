<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('color',20);
            $table->integer('price');
            $table->string('type',20);
            $table->string('made',50);
            $table->string('size',20);
            $table->integer('categories');
            $table->string('image',50);
            $table->string('brand',20);
            $table->longText('description'); 
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
        Schema::drop('products');
    }
}
