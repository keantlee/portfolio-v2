<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    //index view
    public function index(){
        return view('index');
    }
}
