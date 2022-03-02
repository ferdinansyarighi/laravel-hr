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

    public function setSession(Request $request){
        $url = $request->url;

        $users = DB::table('users')
            ->where('url', $url)
            ->first();
        
        session(['id'=>$users->id]);
        session(['url'=>$users->url]);
        session(['email'=>$users->email]);

        return response()->json([
            'data'=> $users
        ]); 
    }
}