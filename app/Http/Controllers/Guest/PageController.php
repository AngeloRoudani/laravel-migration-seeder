<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index() {
        $trains = Train::all();
        /*$startDay = date('Y-m-d 00:00:00');
        $endDay = date('Y-m-d 23:59:59');
        $trains = Train::whereBetween('departed_hour',[$startDay, $endDay])->get();*/
    
        return view('home',compact('trains'));
    }
}
