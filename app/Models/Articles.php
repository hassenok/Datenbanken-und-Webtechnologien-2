<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Articles extends Model
{
    protected $table = 'ab_article';
    public $timestamps = false;
    public $incrementing = true;
    protected $fillable = [
        'id',
        'ab_name',
        'ab_price',
        'ab_description',
        'ab_creator_id',
        'ab_createdate',
        'angebot'];
    public static function search($name){


        return DB::table('ab_article')
            ->where('ab_name', 'ilike', '%'.$name.'%')->orderBy('id')->get();
    }
    public static function allArticles(){
        return DB::table('ab_article')->orderBy('id')->get();
    }
    public static function max(){


        return DB::table('ab_article')->max('id');
    }



}
