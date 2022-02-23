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
            $table->id();
            $table->string('name',255);
            $table->unsignedBigInteger('size_id')->default(0);
            $table->string('image',255);
            $table->longText('description');
            $table->unsignedBigInteger('artist_id');
            $table->double('start_price');
            $table->double('current_price')->default(0);
            $table->date('date_start');
            $table->date('date_end');
            $table->unsignedBigInteger('status_id')->default(1);
            $table->foreign('status_id')->references('id')->on('product_statuses');
            $table->foreign('artist_id')->references('id')->on('artists');
            $table->foreign('size_id')->references('id')->on('sizes');
            $table->softDeletes()->default(NULL);
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
        Schema::dropIfExists('products');
    }
}
