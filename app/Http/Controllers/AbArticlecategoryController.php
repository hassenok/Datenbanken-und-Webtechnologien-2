<?php

namespace App\Http\Controllers;

use App\Models\AbArticlecategory;
use Illuminate\Http\Request;

class AbArticlecategoryController extends Controller
{
    public function  Artikelkategorien(){

          $result= AbArticlecategory::allClecategory();

        return view('pages.categories',["categories"=>$result]);

    }
}
