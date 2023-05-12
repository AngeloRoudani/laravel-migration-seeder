<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index() {
        $current = date('Y-m-d');
        $trains = Train::where('departed_hour','=','$current')->get();
    

        return view('home',compact('trains'));
    }
}
