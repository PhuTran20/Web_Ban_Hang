<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/bike/create');
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
        $bike =  new Bike();
        $bike->name_bike = $data['name_bike'];
        $bike->save();
        session()->flash('mess','Thêm thành công!');
        return redirect('/admin/bike/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show(Bike $bike)
    {
        $bike = Bike::all();
        return view('admin.bike.index')->with(compact('bike'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit($id_bike)
    {
        $bike  = Bike::find($id_bike);
        return view('admin.bike.edit',['bike'=>$bike]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bike $bike)
    {
        $update = array();
        $update['name_bike']  = $request ->name_bike ;
        DB::table('bike') ->where('id_bike',$request->id_bike)-> update($update);
        session()->flash('mess','Cập nhật thành công!');
        return redirect('/admin/bike/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bike $bike , $id_bike)
    {
        $delete  = Bike::find($id_bike);
        $delete ->delete()
    }
}
