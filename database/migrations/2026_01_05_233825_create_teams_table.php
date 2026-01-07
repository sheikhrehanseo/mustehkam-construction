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
    Schema::create('teams', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('role'); // e.g. "Chief Executive"
        $table->string('image'); // e.g. "assets/img/team/team-1.jpg"
        $table->text('bio')->nullable();
        $table->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teams');
    }
};
