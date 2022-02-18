<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index()
    {
        //tutti i risultati
        // $movies = Movie::all();
        // dd($movies);
        //qui ordiniamo tutti i risultati
        // $movies = Movie::orderBy('id', 'desc')->get();

        //filtriamo per nationality
        //uguale a
        // $movies = Movie::where('nationality', 'american/british')->get();

        //limit con get ci restituisce una collection con il numero di elementi selezionati 
        // $movies =
        //     Movie::where('nationality', 'american/british')
        //     ->where('vote', '>', 8)
        //     ->limit(1)
        //     ->get();

        //first chiude la chiamata e restituisce una sola istanza del model
        $movies =
            Movie::where('nationality', 'american/british')
            ->where('vote', '>', 8)
            ->first();

        //diverso da
        // $movies = Movie::where('nationality', '!=', 'american/british')->get();

        // find restituisce solo una istanza del model
        // $movie = Movie::find(4);
        // dd($movie);

        $data = [
            'movies' => $movies
        ];

        return view('home', $data);
    }

    public function saveMovie()
    {
        // $movie = new Movie();
        // $movie->title = 'Dolor Sit';
        // $movie->original_title = 'Lorem ipsum';
        // $movie->nationality = 'american';
        // $movie->date = '1994-06-23';
        // $movie->vote = 8.3;
        // var_dump($movie);
        // $result = $movie->save();
        // dd($result, $movie);

        $movie = new Movie();
        $movie->fill([
            'title' => 'Pippo',
            'original_title' => 'Pippo e Pluto',
            'nationality' => 'Italian',
            'date' => '1990/03/02',
            'vote' => 6
        ]);
        $result = $movie->save();
        dd($result, $movie);
    }
}
