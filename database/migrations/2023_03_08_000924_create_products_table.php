<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->double('price_before_discount', 15, 2)->nullable();
            $table->double('price', 15, 2);
            $table->string('brand');
            $table->integer('quantity');
            $table->string('photo');
            $table->integer('prd_rating')->default(0);   
            $table->integer('selling_count')->default(0);   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
