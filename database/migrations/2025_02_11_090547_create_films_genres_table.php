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
        Schema::create('films_genres', function (Blueprint $table) {

            $table->comment('Связь между фильмами и жанрами');
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('genre_id');

            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('genre_id')->references('id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films_genres');
    }
};
