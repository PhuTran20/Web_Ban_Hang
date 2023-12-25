<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array();
        $data["username"] = $request->username;
        $data["password"] = $request->password;
        $data["fullName"] = $request->fullName;
        
        $data["birthDay"] = $request->birthDay;
        $data["address"] = $request->address;
        $data["phone_number"] = $request->phone_number;
        $data["mail"] = $request->mail;
        DB::table('user')->insert($data);
        return redirect('/login');
    }
     public function login(Request $request){
        $username = $request->username;
        $password = $request -> password;
        $result = DB::table('user') ->where('username',$username)->where('password',$password)->get();
        if(count($result)>0){
            Session::put('data',$result[0]);
            return redirect('/');
        }else{
            return redirect('')
        }
        // if(count($result)>0){
        //     Session::put('data1',$result[0]);
        //      return redirect("/");
        //  }else{
        //     Session::put('message','Tài khoản hoặc mật khẩu sai');
        //     return view('login');
        //  }
        // dd($username,$password);

     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
