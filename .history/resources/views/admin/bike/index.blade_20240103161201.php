@extends('admin.index')
@section('admin')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>DANH SÁCH CÁC LOẠI XE</h3>
                            <a href="{{URL('/admin/bike/create_bike')}}">Thêm xe</a>
                            <table class="table table-striped table-bordered"> 
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên xe</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $n=0 ?>
                                    @foreach ( $bike as $item)
                                    <?php $n++ ?>
                                    <td>{{$n}}</td>
                                    <td>{{$item->name_bike}}</td>
                                        <td>
                                            {{-- <a href="thuonghieu/edit/{{$item->idthuonghieu}}"> --}}
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
