<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('year')->nullable();
            $table->string('imdbID')->nullable();
            $table->string('type')->nullable();
            $table->string('poster')->nullable();
            $table->string('runtime')->nullable();
            $table->string('language')->nullable();
            $table->string('imdbRating')->nullable();
            $table->string('genre')->nullable();
            $table->text('actors')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
