<?php

namespace App\Http\Controllers;

class Dashboard_c extends Controller
{
    public function index(){
        return view('dashboard_v');
    }
}