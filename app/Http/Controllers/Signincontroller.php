<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Signincontroller extends Controller
{
    function Signin (Request $req){

        $res = DB::table('users')->where('email',$req->email)->get();
        if (!empty($res[0]->email)) {
            if ($res[0]->password == $req->password) {
                $req->session()->flush();
                $req->session()->put('email',$res[0]->email);
    
                if ($req->session()->has('email')) {
                    return $res;
                }
                else {
                    $error = ["messeage"=>"Your session is expired !!","status"=>201];
                    return $error;    
                }
            } 
            else{
                $error = ["messeage"=>"Password is worng !!","status"=>404];
                return $error;    
            }
        }
        else {
            $error = ["messeage"=>"Email or Password is worng !!","status"=>404];
            return $error;
        }
    }
}
