<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Sess
class AdminController extends Controller
{
    public function login (Request $request){
        
        $user_admin = $request->user_admin;
        $password = $request ->password;
        $result = DB::table('admin')->where('user_admin',$user_admin)-> where('$password',$password)->get();
        if(count($result)>0){
            Session::put('data',$result[0]);
            return view('/admin/trangchu');
        }
    }
}
