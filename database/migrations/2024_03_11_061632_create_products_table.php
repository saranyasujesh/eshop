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
            $table->string('company');
            $table->string('category');
            $table->string('brand');
            $table->string('color_name',60)->nullable();
            $table->string('color',10)->nullable();
            $table->unsignedBigInteger('quantity');
            $table->unsignedBigInteger('actual_price');
            $table->unsignedBigInteger('reduced_price');
            $table->string('description')->default('...');
            $table->string("main_image")->default('no_image.png');
            $table->string("images")->default('no_image.png');
            $table->softDeletes();
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
