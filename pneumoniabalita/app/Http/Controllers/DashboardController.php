<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pemetaan.peta2016');
    }

    // public function peta(){ 
    //     return view('layouts.pemetaan'); 
    // }

}
