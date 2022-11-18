<?php

namespace App\Http\Controllers;

use App\Events\Angebot;
use App\Events\ArticleSold;
use App\Models\Articles;


use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use MongoDB\Driver\Session;


class ArticlesController extends BaseController
{

    public function search(Request $request){


        if($request->input('search') !=null) {
            $search = $request->input('search');
            $result = Articles::search($search);
        }
        else{
            $result = Articles::allArticles();
        }


        return view('pages.articles',['articles' =>$result]);


    }
    public function searchAPI(Request $request){

        if($request->input('search') !=null) {
            $search = $request->input('search');
            $result = Articles::search($search);
        }
        else{
            $result = Articles::allArticles();
        }

        return response()->json($result);
    }

    public function newarticle(Request $request){
        $name = trim($request->input('name')) ?? null;
        $price = trim($request->input('price')) ?? null;
        $description = trim($request->input('description')) ?? null;

        $successful = true;
        $error=null;
              if($name ==null){
                  $successful = false;
                  $error = "Produktname darf nicht leer sein!";

              }
              if($price <=0 || $price==null){
                  $successful = false;
                  $error = "Der Preis muss größer 0 sein!";
              }

              if($successful ==true){

                  $article = new Articles();
                  $article->id= Articles::max()+1;
                  $article->ab_name = $name;
                  $article->ab_price = $price;
                  $article->ab_description = $description;
                  $article->ab_createdate = date('Y-m-d H:i:s');
                  $article->ab_creator_id = 5;
                  $article->save();

              }
            return $error  ? response()->json(['Error' => $error]) : response()->json(['Erfolg' => "Erfolgreich hinzugefügt"]);

    }

    public function newarticle_api(Request $request)
    {
        $name = trim($request->input('name')) ?? null;
        $price = trim($request->input('price')) ?? null;
        $description = trim($request->input('description')) ?? null;

        $successful = true;
        $error=null;
        if($name ==null){
            $successful = false;
            $error = "Produktname darf nicht leer sein!";

        }
        if($price <=0 || $price==null){
            $successful = false;
            $error = "Der Preis muss größer 0 sein!";
        }

        if($successful ==true){

            $article = new Articles();
            $article->id= Articles::max()+1;
            $article->ab_name = $name;
            $article->ab_price = $price;
            $article->ab_description = $description;
            $article->ab_createdate = date('Y-m-d H:i:s');
            $article->ab_creator_id = 5;
            $article->save();

        }

        return $error  ? response()->json(['Error' => $error]) : response()->json(['id' => $article?->id]);

    }


    public function delete($id)
    {
        $article = Articles::find($id);
        if (isset($article)) {
            $article->delete();
            return response()->json('success', 200);
        } else {
            return response()->json('ID not found.', 404);
        }
    }

    public function delete_api($id)
    {

        $article = Articles::destroy($id);
        return response()->json($article);

    }

    public function get_api(Request $request)
    {
        $articles = Articles::where('ab_name', 'ilike', '%' . $request->input('search') . '%')->orderBy('id');
        $limit = $request->input('limit');
        $offset = $request->input('offset');

        if (isset($offset))
            $articles->offset($offset);

        if (isset($limit))
            $articles->limit($limit);

        $articles = $articles->get();

        if (!$articles->isEmpty()) {
            return response()->json($articles);
        } else {
            return response()->json("Keine Artikel gefunden", 404);
        }
    }



    public function Sold_api($id)
    {
        $article = Articles::find($id);
        if (isset($article)) {
            $userID = $article->ab_creator_id;
            broadcast(new ArticleSold($userID, $id));
            return response()->json("Success");
        }
        return response()->json("Failure");
    }

    public function Angebot_api(Request $request)
    {
        $article_name = $request->input('articlename');
        $article_id = $request->input('articleId');
        $article=  Articles::find($article_id);
        if (isset($article)) {
            $article->update([
                'angebot'=> 1
            ]);
            broadcast(new Angebot("Der Artikel '" .$article_name. "' wird nun günstiger angeboten! Greifen Sie schnell zu!"));
            return response()->json("Success");
        }
        return response()->json("Failure");
    }



public function test(){
   return dd(session()->all());
}



}

