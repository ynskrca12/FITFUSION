<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\DB;

class WorkoutsController extends Controller
{
    public function my_workouts(){
        // Kullanıcının sahip olduğu antrenmanları getir
        //$antrenmanlar = auth()->user()->workouts;

        $my_workouts = DB::table('my_workouts')->get();

        return view('my_workouts.my_workouts', compact('my_workouts'));
    }//End

    public function add_my_workouts(){
        return view('my_workouts.add_my_workouts');
    }//End
}
