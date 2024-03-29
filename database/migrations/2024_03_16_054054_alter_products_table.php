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
        Schema::table("products", function (Blueprint $table) {
            $table->string('trending_item')->default('No');
            $table->string('hot_item')->default('No');
            $table->string('best_seller')->default('No');
            $table->string('top_viewed')->default('No');
            $table->string('deal_of_the_day')->default('No');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table("products", function (Blueprint $table) {
            $table->dropColumn('trending_item');
            $table->dropColumn('hot_item');
            $table->dropColumn('best_seller');
            $table->dropColumn('top_viewed');
            $table->dropColumn('deal_of_the_day');
        });
    }
};
