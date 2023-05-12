<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $data = [
            'ciao',
            'bello'
        ];
        return view('home',compact('data'));
    }
}
