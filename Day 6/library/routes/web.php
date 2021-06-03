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
    $data = DB::table('books')
                ->join('authors','authors.id','books.authors_id')
                ->join('publishers','publishers.id','books.publishers_id')
                ->join('category','category.id','books.category_id')
                ->join('sub_categories','sub_categories.id','books.sub_categories_id')
                ->select(
                    'books_name',
                    'authors_name',
                    'publishers_name',
                    'category_name',
                    'sub_categories_name'
                )
                ->get();
    
    return response()->json($data, 200, [], JSON_PRETTY_PRINT);
});
