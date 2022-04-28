<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class Dashboard_c extends Controller
{
    public function user(){
        return view('dashboard_v');
    }

    public function admin(){
        return view('dashboard_admin_v');
    }

    public function getData(){
        // $url = $request->url;

        $attend = DB::table('attendance')
        ->join('users', 'attendance.user_id', '=', 'users.id')
        ->select('users.name', 'attendance.*')
        ->get();
        
        // session(['id'=>$users->id]);
        // session(['email'=>$users->email]);

        return response()->json([
            'data'=> $attend
        ]); 
    }
}