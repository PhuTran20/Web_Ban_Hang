<?php

namespace App\Http\Controllers;

use App\Models\Thuonghieu;
use Illuminate\Http\Request;

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
        //
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
    public function edit(Thuonghieu $thuonghieu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Thuonghieu  $thuonghieu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Thuonghieu $thuonghieu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Thuonghieu  $thuonghieu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Thuonghieu $thuonghieu)
    {
        //
    }
}
