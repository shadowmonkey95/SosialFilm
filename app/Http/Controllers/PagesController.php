<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Genre;
use App\Like;
use App\Movie;
use Illuminate\Http\Request;
use DB;

class PagesController extends Controller
{
    public function welcome()
    {
        $movies = Movie::orderBy('created_at', 'desc')->take(6)->get();
        $arrMovies = json_decode(json_encode($movies), true);

//        Lay 3 review gan day nhat
        $reviews = DB::table('reviews')
            ->join('movies', 'reviews.movie_id', '=', 'movies.id')
            ->select('reviews.*', 'movies.poster')
            ->orderBy('reviews.created_at', 'desc')
            ->take(3)->get();
        foreach ($reviews as $review) {
            $like = Like::where('review_id', $review->id)->count();
            $review->like = $like;
            $comment = Comment::where('review_id', $review->id)->count();
            $review->comment = $comment;
        }

//        Show ra cac review co thu tu nhieu like nhat
        $allReviews = DB::table('reviews')
            ->join('movies', 'reviews.movie_id', '=', 'movies.id')
            ->select('reviews.*', 'movies.poster')
            ->get();
        foreach ($allReviews as $review) {
            $like = Like::where('review_id', $review->id)->count();
            $review->like = $like;
            $comment = Comment::where('review_id', $review->id)->count();
            $review->comment = $comment;
        }

        $sortReviews = json_decode(json_encode($allReviews), true);
        usort($sortReviews, function ($item1, $item2) {
            if ($item1['like'] == $item2['like']) {
                return 0;
            }
            return $item1['like'] < $item2['like'] ? 1 : -1;
        });
        $genres = Genre::pluck('name', 'id');

        return view('pages.home', compact('arrMovies', 'reviews', 'sortReviews', 'movies', 'genres'));
    }

    public function ajaxLoadMore(Request $request)
    {
        $page = $request->get('page');
        $limit = 3;
        $start = ($page * $limit) - $limit;

        $results = DB::table('reviews')
            ->join('movies', 'reviews.movie_id', '=', 'movies.id')
            ->select('reviews.*', 'movies.poster')
            ->offset($start)
            ->limit($limit)
            ->get();
        foreach ($results as $review) {
            $like = Like::where('review_id', $review->id)->count();
            $review->like = $like;
            $comment = Comment::where('review_id', $review->id)->count();
            $review->comment = $comment;
        }
        $arr = json_decode(json_encode($results), true);

        return $arr;
    }
}
