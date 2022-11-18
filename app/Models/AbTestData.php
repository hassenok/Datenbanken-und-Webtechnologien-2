<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class AbTestData extends Model
{

    public static function daten_AbTestData(){

        return DB::table('ab_testdata')->get();
    }


}
