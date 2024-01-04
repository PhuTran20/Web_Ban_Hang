@extends('admin.index')
@section('admin')
<link rel="stylesheet" href="{{URL('frontend_admin')}}/css/admin_category/index_category.css">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>Thêm Thương Hiệu</h3>           
                        </div>
                        <div class="panel-body">
                            <form method="post" action="{{URL::to('/admin/category/create_category')}}" enctype="multipart/form-data">
                               @csrf
                                <div class="form-group">
                                    <label for="name">Tên Loại Sản Phẩm:</label>              
                                    <input required="true" name="tenloaisanpham" type="text" class="form-control" id="title"  
                                        value=" "
                                      >
                                </div>
                                <div class="form-group">
                                    <label for="name">Tên Thương Hiệu:</label>              
                                    <select name="" class="form-control" id="">
                                        @foreach ($Thuonghieu as $item)
                                            <option value="{{$item->id_thuonghieu}}">{{</option>
                                        @endforeach
                                    </select>
                                </div>
                         
                       
                             
                
                                <button class="btn btn-success">Thêm</button>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
