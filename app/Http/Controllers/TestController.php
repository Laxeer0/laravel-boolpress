<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{
    public function logged(){
        
        $auth = Auth::check();
        if($auth){
            $user = Auth::user();
            $status = "logged";
            return view("test",compact("status", "user"));
         }
    }

    public function guest(){
        $status = "guest";
        return view("test",compact("status"));
    }
}
