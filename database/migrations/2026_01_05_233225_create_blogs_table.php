<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
    Schema::create('blogs', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('category'); // e.g., Politics, Sports
        $table->string('author');   // e.g., Julia Parker
        $table->string('image');    // e.g., assets/img/blog/blog-1.jpg
        $table->date('post_date');
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
