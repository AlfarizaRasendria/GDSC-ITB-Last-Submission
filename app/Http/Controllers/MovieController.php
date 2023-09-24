<?php

namespace App\Http\Controllers;

use App\Models\Seat;
use App\Models\Movie;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;

class MovieController extends Controller
{
    public function getAllMovie()
    {
        $Movies = Movie::all();
        return view('landing.movie', ['movies' => $Movies]);
    }

    public function getMovieNotFound(){
        return view('landing.movie_Not_Found');
    }

    public function UsergetMovieNotFound(){
        return view('user.movie_Not_Found');
    }

    public function getSpesificMovie(Request $request)
    {
        if ($request->has('search')) {
            $input_request = $request->search;
            $specificMovies = Movie::where('title', 'LIKE', "%$input_request%")->get();
            if ($specificMovies->count() > 0) {
                return view('landing.spesific_Movie', ['specific_movies' => $specificMovies]);
            } else {
                // Tampilkan pesan bahwa tidak ada film yang sesuai dengan pencarian.
                return redirect()
                ->route('getMovieNotFound')
                ->withErrors([
                    'error' => 'Movie Not Found',
                ]);
            }
        } else {
            dd($request);
            return redirect()
                ->back()
                ->with('Empty', 'Please Type an input the name of movie');
        }
    }

    public function UsergetSpesificMovie(Request $request){
        if($request->has('search')){
            $input_request = $request->search;
            $spesificMovies = Movie::where('title','LIKE',"%$input_request%")->get();
            if($spesificMovies->count()>0){
                return view('user.spesific_Movie',['specific_movies'=>$spesificMovies]);
            }
            else{
                return redirect()->route('UsergetMovieNotFound')->withErrors([
                    'error' => 'Movie Not Found',
            ]);
            }
        }
    }



    public function getDetailMovie($id)
    {
        $Detail_movie = Movie::find($id);
        if ($Detail_movie) {
            return view('landing.detail_movie', ['detail_movie' => $Detail_movie]);
        } else {
            return redirect()
                ->back()
                ->with('error', 'Movie Not Found');
        }
    }
}
