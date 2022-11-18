<?php

use App\Events\Maintenance;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\WarenkorbController;
use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articles', [ArticlesController::class, 'searchAPI']);

Route::post('/articles', [ArticlesController::class, 'newarticle_api']);



Route::prefix('/articles')->group(function () {
    Route::get('/', [ArticlesController::class,'get_api']);


    Route::get('id/{id}', function ($id) {
        $article = Articles::find($id);
        if (isset($article)) {
            return response()->json($article);
        } else {
            return response()->json("Artikel nicht gefunden", 404);
        }
    });
    Route::post('{id}/sold', [ArticlesController::class,'Sold_api']);
    /*
    Route::delete('id/{id}', [ArticlesController::class, 'delete']);*/
});

Route::post('/shoppingcart', [WarenkorbController::class,'add_article_api']);

Route::delete('/shoppingcart/{shoppingcartid}/articles/{articleId}', [WarenkorbController::class,'delete_article_api']);

Route::get("/maintenance", function(){
    broadcast(new Maintenance("In Kürze verbessern wir Abalo für Sie!\nNach einer kurzen Pause sind wir wieder für sie da! Versprochen"));
});


Route::post('/angebot', [ArticlesController::class,'Angebot_api']);
