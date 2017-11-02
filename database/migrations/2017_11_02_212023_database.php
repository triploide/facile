<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Database extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //PRODUCTS
        Schema::create('products', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->boolean('active')->default(1);
            $table->float('cost', 8, 2); //999.999,99
            $table->float('profit_margin', 5, 2); //999,99
            $table->tinyInteger('category_id')->unsigned()->index();
            $table->timestamps();
        });

        //CATEGORIES
        Schema::create('categories', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('name');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        //PROPERTIES
        Schema::create('properties', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('name');
            $table->boolean('active')->default(1);
            $table->timestamps();
        });

        //RELACIÓN PRODUCTS PROPERTIES
        Schema::create('product_property', function (Blueprint $table) {
            $table->smallInteger('product_id')->unsigned();
            $table->tinyInteger('property_id')->unsigned();
            $table->primary(['product_id', 'property_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('properties');
        Schema::dropIfExists('product_property');
    }
}
