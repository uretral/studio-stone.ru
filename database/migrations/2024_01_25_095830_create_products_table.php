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
            $table->integer('active')->default(1);
            $table->integer('sort')->default(500);
            $table->integer('parent_id')->default(0);
            $table->integer('original_id')->default(0);
            $table->string('slug')->nullable();
            $table->integer('external code')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('text')->nullable();
            $table->integer('color_id')->nullable();
            $table->integer('material_id')->nullable();
            $table->integer('country_id')->nullable();
            $table->integer('price')->nullable();
            $table->integer('views')->default(0);
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
