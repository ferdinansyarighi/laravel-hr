<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Permit_c extends Controller
{
    public function user(){
        return view('dashboard_v');
    }

    public function admin(){
        return view('permit_admin_v');
    }

    public function saveData(Request $request){
        $id     = $request->id;
        $type   = $request->type;
        $date   = $request->date;

        $save = DB::table('permission')->insert([
            'user_id' => $id,
            'type' => $type,
            'date' => $date,
            'created_date' => Carbon::now()
        ]);

        return response()->json([
            'data'=> $save
        ]); 
    }
}