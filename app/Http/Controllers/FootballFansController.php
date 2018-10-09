<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Khill\Lavacharts\Lavacharts;
use App\Footballfan;

class FootballFansController extends Controller
{
    public function getChart()
    {
        $lava = new Lavacharts;
        $fans = $lava->DataTable();
    }
}
