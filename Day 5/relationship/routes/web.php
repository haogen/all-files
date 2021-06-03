<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { 
    $data = DB::table('songs')
                ->join('album','album.id','songs.album_id')
                ->join('genre','genre.id','songs.genre_id')
                ->join('artist','artist.id','songs.artist_id')
                ->select(
                    'title',
                    'album_name',
                    'genre_name',
                    'artist'
                )
                ->get();
    
    return response()->json($data, 200, [], JSON_PRETTY_PRINT);
});

