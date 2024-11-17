<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->unsignedBigInteger('seller_id'); // References users table
            $table->unsignedBigInteger('buyer_id')->nullable(); // References users table
            $table->unsignedBigInteger('category_id')->nullable(); // References product_categories table
            $table->unsignedBigInteger('brand_id')->nullable(); // References product_brands table
            $table->string('status')->default('available'); // 'available', 'sold', etc.
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('buyer_id')->references('id')->on('users')->onDelete('set null');
            $table->foreign('category_id')->references('id')->on('product_categories')->onDelete('set null');
            $table->foreign('brand_id')->references('id')->on('product_brands')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
};
