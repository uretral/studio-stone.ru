<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->integer('active')->default(1);
            $table->integer('type')->default(1);
            $table->integer('parent_id');
            $table->integer('order');
            $table->string('title');
            $table->string('slug');
            $table->string('pagetitle');
            $table->string('metatitle');
            $table->text('tags');
            $table->text('description');
            $table->text('keywords');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
