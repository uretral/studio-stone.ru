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
        Schema::create('top_sliders', function (Blueprint $table) {
            $table->id();
            $table->integer('active')->default(1);
            $table->integer('sort')->default(500);
            $table->string('link')->nullable();
            $table->string('title')->nullable();
            $table->string('subtitle')->nullable();
            $table->string('text')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_sliders');
    }
};
