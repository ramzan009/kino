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
        Schema::create('films_authors', function (Blueprint $table) {
            $table->comment('Связь между фильмами и авторами');
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('author_id');

            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('author_id')->references('id')->on('authors');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films_authors');
    }
};
