<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Movie;
use App\Actor;
use App\Genre;
use App\GenreMovie;
use App\ActorMovie;
use App\Country;
use DB;
use App\Http\Requests\MovieFormRequest;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class MovieController extends Controller
{
    public function index()
    {
        //
        $movies = Movie::all();
        $genres = DB::table('genres')->join('genre_movie', 'genres.id', '=', 'genre_movie.genre_id')
        ->select('genres.*', 'genre_movie.movie_id')->get();
        $actors = DB::table('actors')->join('actor_movie', 'actors.id', '=', 'actor_movie.actor_id')
        ->select('actors.name', 'actor_movie.movie_id')->get();

        return view('backend.movies.list', compact('movies', 'genres', 'actors'));
    }

    public function create()
    {
        $actors = Actor::pluck('name', 'id');
        $genre = Genre::pluck('name', 'id');
        $countries = Country::pluck('name', 'id');

        return view('backend.movies.add', compact('actors', 'genre', 'countries'));
    }

    public function store(MovieFormRequest $request)
    {
        //
        $data = $request->all();
        $genres = $request->get('genre_id');
        $actors = $request->get('actor_ids');
        $data['realease_date'] = Carbon::parse($request->realease_date);
        $data['title'] = $request->get('title');
        $data['country_id'] = $request->get('country_id');
        $data['director'] = $request->get('director');
        $data['overview'] = $request->get('overview');
        $data['runtime'] = $request->get('runtime');
        $trailer = str_replace('watch?v=', 'embed/', $request->get('trailer'));
        $data['trailer'] = $trailer;
        $data['imdb_score'] = $request->get('imdb_score');
        $slug = uniqid();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $name = $slug . '_' . $file->getClientOriginalName();
            $file->move(public_path() . '/images/movies/', $name);
            $data['poster'] = '/images/movies/' . $name;
            $imagePath = public_path() . '/images/movies/' . $name;
            Image::make($imagePath)->resize(1100, 700)->save();
        } else {
            $data['poster'] = 'null';
        }

        if (Movie::create($data)) {
            $newMovie = Movie::orderBy('id', 'desc')->take(1)->get();
            $movieId  = $newMovie[0]->id;
            foreach ($genres as $genreId) {
                $gen = GenreMovie::InsertGenreMovie($genreId, $movieId);
            }
            foreach ($actors as $actorId) {
                $act = ActorMovie::InsertActorMovie($actorId, $movieId);
            }

            return redirect()->route('movies.index')->with('success', trans('message.success-create'));
        } else {
            return back()->withErrors(trans('message.error'));
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return redirect('/admin/movies')->with('success', __('The movie has been deleted'));
    }
}
