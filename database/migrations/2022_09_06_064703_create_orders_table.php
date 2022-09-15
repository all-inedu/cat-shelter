<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cat_id');
            $table->foreign('cat_id')->references('id')->on('cats')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('adopter_id');
            $table->foreign('adopter_id')->references('id')->on('adopters')->onUpdate('cascade')->onDelete('cascade');
            $table->tinyInteger('status')->default(0)->comment('0: pending, 1: finished');
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
        Schema::dropIfExists('orders');
    }
}
