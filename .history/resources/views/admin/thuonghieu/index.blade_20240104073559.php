@extends('admin.index')
@section('admin')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>DANH SÁCH THƯƠNG HIỆU</h3>
                            <a href="{{URL('/admin/thuonghieu/create_thuonghieu')}}">Thêm Thương Hiệu</a>
                            <table class="table table-striped table-bordered"> 
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên thương hiệu</th>
                                    </tr>
                                </thead>
                                <?php $n=0 ?>
                                @foreach ( $thuonghieu as $item)
                                <tbody>
                                    <?php $n++ ?>
                                    <td>{{$n}}</td>
                                    <td>{{$item->tenthuonghieu}}</td>
                                        <td>
                                            <a href="thuonghieu/edit/{{$item->idthuonghieu}}">
                                            <button  class="btn btn-outline-secondary">
                                            <i class="fa fa-edit"></i>Sửa</button>
                                            </a>
                                        </td>
                                        <td>
                                            
                                        </td>
                                    </tbody>
                                    @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
