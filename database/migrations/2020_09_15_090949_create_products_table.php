<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increment('id');
            $table->string('name');
            $table->string('description',1000);
            $table->integer('quntity')->unsigned();
            $table->string('status')->default(Product::UNAVAILABLE_PRODUCT);
            $table->string('image');
            $table->integer("seller_id")->unsinged();
            $table->timestamps();
            $table->foreign('seeler_id')->references('id')->on('users');
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
    }
}
