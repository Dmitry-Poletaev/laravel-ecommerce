<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subcat_id')->nullable();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('subcat_id')->references('id')
            ->on('subcategories')->onDelete('cascade');
            $table->foreign('product_id')->references('id')
            ->on('products')->onDelete('cascade');
            $table->text('title')->nullable();
            $table->text('keywords')->nullable();
            $table->text('description')->nullable();;
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
        Schema::dropIfExists('seo');
    }
}
