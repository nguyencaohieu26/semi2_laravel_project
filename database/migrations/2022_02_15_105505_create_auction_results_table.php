<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuctionResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auction_results', function (Blueprint $table) {
            $table->id();
            $table->double('final_auction_price');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('account_id');
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->integer('status')->default(0);
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
        Schema::dropIfExists('auction_results');
    }
}
