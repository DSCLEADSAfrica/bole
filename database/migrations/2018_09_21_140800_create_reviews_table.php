<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->string('id', 36);
	        $table->string('product_id');
	        $table->string('seller_id');
	        $table->integer('rating');
	        $table->mediumText('review_comment');
            $table->timestamps();

	        $table->primary('id');
	        $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
	        $table->foreign('seller_id')->references('id')->on('sellers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
