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
        $value = FootballFan::select('footballteam as 0', 'fan as 1')
                                ->get()
                                ->toArray();
        $fans->addStringColumn('Football Team')
             ->addNumberColumn('Football Fans')
             ->addRows($value);
             
        $lava->GeoChart('Football Fans', $fans);
        
    }
}
