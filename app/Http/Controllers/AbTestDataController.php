<?php

namespace App\Http\Controllers;

use App\Models\AbTestData;
use Illuminate\Routing\Controller as BaseController;


class AbTestDataController extends BaseController
{
    public function AbTestData(){

        $daten=AbTestData::daten_AbTestData();

        return $daten[0];
    }


}
