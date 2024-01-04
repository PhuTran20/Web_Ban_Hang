<?php

namespace App\Http\Controllers;

use App\Models\Thuonghieu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThuonghieuController extends Controller
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
        return view('admin.thuonghieu.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request ->all();
        $thuonghieu = new Thuonghieu();
        $thuonghieu ->tenthuonghieu = $data['tenthuonghieu'];
        $thuonghieu ->save();
        session()->flash('mess','Thêm thành công!');
        return redirect('/admin/thuonghieu/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Thuonghieu  $thuonghieu
     * @return \Illuminate\Http\Response
     */
    public function show(Thuonghieu $thuonghieu)
    {
        $thuonghieu = Thuonghieu::all();
        return view('admin.thuonghieu.index') ->with(compact('thuonghieu'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Thuonghieu  $thuonghieu
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $Thuonghieu = Thuonghieu::find($id);
        return view('admin.thuonghieu.edit',['data'=>$Thuonghieu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thuonghieu  $thuonghieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request )
    {
        $update = array();
        $update['tenthuonghieu'] =$request ->tenthuonghieu;
        DB::table('thuonghieu') -> where('id_thuonghieu',$request->id_thuonghieu) ->update($update);
        return redirect('/admin/thuonghieu/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thuonghieu  $thuonghieu
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $delete = Thuonghieu::find($id);
        $delete->delete();
        session()->flash('mess','Xóa Thành Công');
        return redirect('/admin/thuonghieu/');
    }
}
