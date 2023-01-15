<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->string('name');
            $table->text('infomation');
            $table->unsignedBigInteger('price');
            $table->boolean('is_selling');
            $table->integer('sort_order')->nullable();
            $table->foreignId('shop_id')
            ->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('secondary_category_id')
            ->constrained();
            $table->foreignId('image1')->nullable();
            $table->foreignId('image2')->nullable();
            $table->foreignId('image3')->nullable();
            $table->foreignId('image4')->nullable();
            $table->foreignId('image5')->nullable();
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
};
