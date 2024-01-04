<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Thuonghieu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
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
        $thuonghieu = Thuonghieu::all();
        return view('admin.category.create',with(compact('thuonghieu')));
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
        $category = new Category();
        $category->tenloaisanpham = $data['tenloaisanpham'];
        $category->id_thuonghieu = $data['id_thuonghieu'];
        $category ->save();
        session()->flash('mess','Thêm Loại Sản Phẩm Thành Công!');
        return redirect('/admin/category/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $Category = Category::join('thuonghieu','thuonghieu.id_thuonghieu','=','loaisanpham.id_thuonghieu')
        ->select('loaisanpham.*', 'thuonghieu.*')
        ->get();
        return view('admin.category.index',['data'=>$Category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $thuonghieu = Thuonghieu::all();
        $Category = Category::where('id_masp',$id)
        -> join('thuonghieu','thuonghieu.id_thuonghieu','=','loaisanpham.id_thuonghieu')
        ->select('loaisanpham.*','thuonghieu.*')->first();
        return view('admin.category.edit',['data'=>$Category],['item'=>$thuonghieu]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $update = array();
        $update['tenloaisanpham'] = $request->tenloaisanpham;
        $update['id_thuonghieu'] = $request ->id_thuonghieu;
        DB::table('loaisanpham')->where('id_masp',$request->id_masp)->update($update);
        return redirect('admin/category/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category, $id_masp)
    {
        $delete = Category::find($id_masp);
        dd
        $delete ->delete();
        session()->flash('mess','Xóa loại sản phẩm thành công!');
        return redirect('/admin/category/');
    }
}
