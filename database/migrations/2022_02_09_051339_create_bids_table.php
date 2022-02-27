<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('product_id');
            $table->unsignedBigInteger('bid_status_id')->default(1);
            $table->double('amount_of_bid');
            $table->double('current-bid')->nullable()->default(0);
            $table->foreign('product_id')->references('id')->on('products');
            $table->foreign('account_id')->references('id')->on('accounts');
            $table->foreign('bid_status_id')->references('id')->on('bid_statuses');
            $table->softDeletes();
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
        Schema::dropIfExists('bids');
    }
}
