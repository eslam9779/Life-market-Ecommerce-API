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
        Schema::table('favourite_item', function (Blueprint $table) {
            $table->biginteger('prd_id')->unsigned();
            $table->foreign('prd_id')->references('id')->on('products')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('favourite_item', function (Blueprint $table) {
            $table->dropForeign(['prd_id']);
            $table->dropColumn('prd_id');
        });
    }
};
