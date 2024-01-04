@extends('admin.index')
@section('admin')
<link rel="stylesheet" href="{{URL('frontend_admin')}}/css/admin_category/index_category.css">

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>DANH SÁCH CÁC  SẢN PHẨM</h3>
                            <p style="color: red">{{session('mess')}}</p>
                            <a href="/admin/product/create_prod">  <button class="btn btn-outline-primary" style="margin-bottom: 15px;"><i class="fa fa-star"></i>Thêm  Sản Phẩm</button></a>
                            <table class="table table-striped table-bordered"> 
                                <thead>
                                    <tr>
                                        <th class="action-column">STT</th>
                                        <th>Tên Thương Hiệu</th>
                                        <th>Tên Sản Phẩm</th>
                                        <th>Tên Sản Phẩm</th>
                                    </tr>
                                </thead>
                                <?php $n=0 ?>
                                {{-- @foreach ( $data as $item) --}}
                                {{-- <tbody> --}}
                                    <?php $n++ ?>
                                    {{-- <td>{{$n}}</td>
                                    <td>{{$item->tenloaisanpham}}</td>
                                    <td>{{$item->tenthuonghieu}}</td>
                                    <td class="action-column">
                                                
                                        <a href="category/edit_category/{{$item->id_masp}}">
                                        <button  class="btn btn-outline-secondary">
                                        <i class="fa fa-edit"></i>Sửa</button>
                                        </a>
                                    </td>
                                        <td class="action-column">
                                            <form action="category/delete_category/{{$item->id_masp}}" method="post">
                                                @csrf
                                                <input type="hidden" name="_method" value="delete">
                                                <button onclick="return confirm('Bạn chắc chắn muốn xóa?')" class="btn btn-outline-danger" style="margin-bottom: 15px;"><i class="ti-trash"></i> Xóa</button>
                                            </form>
                                        </td>
                                    </tbody>
                                    @endforeach --}}
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
