<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTansactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tansactions', function (Blueprint $table) {
            $table->increment('id');
            $table->integer('quantity')->unsigned();
            $table->integer('buyer_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->timestamps();
            $tabel->foreign('buyer_id')->references('id')->on('Users');
            $tabel->foreign('prodduct_id')->references('id')->on('products');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tansactions');
    }
}
