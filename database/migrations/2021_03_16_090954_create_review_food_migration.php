<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewFoodMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ReviewFood', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reviewId');
            $table->unsignedBigInteger('foodId');
            $table->timestamps();

            $table->foreign('reviewId')->references('id')->on('reviews')->onDelete('cascade');
            $table->foreign('foodId')->references('id')->on('foods')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ReviewFood');
    }
}
