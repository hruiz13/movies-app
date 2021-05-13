<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $movie = new Movie();
        // $movie->title = "Marbella vice";
        // $movie->year = "2021";
        // $movie->imdbID = "2021";
        // $movie->type = "Roleplay";
        // $movie->poster = "https://www.volkgames.com/wp-content/uploads/2021/04/marbella-vice-volk-games.jpg";
        // $movie->runtime = "2 months";
        // $movie->language = "Spanish";
        // $movie->imdbRating = "5.0";
        // $movie->genre = "Ficcion";
        // $movie->actors = "Auronplay, Perxita";
        // $movie->save();

        // $movie2 = new Movie();
        // $movie2->title = "Spain RP";
        // $movie2->year = "2020";
        // $movie2->imdbID = "2020";
        // $movie2->type = "Roleplay";
        // $movie2->poster = "https://i.ytimg.com/vi/XzShwVgFIIU/maxresdefault.jpg";
        // $movie2->runtime = "3 months";
        // $movie2->language = "Spanish";
        // $movie2->imdbRating = "4.5";
        // $movie2->genre = "Ficcion";
        // $movie2->actors = "Auronplay, Perxita";
        // $movie2->save();

        Movie::factory(50)->create();
    }
}
