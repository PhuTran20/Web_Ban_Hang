@extends('admin.index')
@section('admin')
  <link rel="stylesheet" href="{{URL('frontend_admin')}}/css/admin_category/edit_category.css">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>Sửa Loại Sản Phẩm</h3>           
                        </div>
                        <div class="panel-body">
                            <form method="post" action="/admin/category/edit_category/{{$data->id_masp}}" enctype="multipart/form-data">
                               @csrf
                               <input type="hidden" name="_method" value="put">
                               <div class="form-group">
                                <label for="name">Tên Loại Sản Phẩm:</label>              
                                <input required="true" name="tenloaisanpham" type="text" class="form-control" id="title"  
                                    value="{{$data->tenloaisanpham}} "
                                  >
                            </div>
                            <div class="form-group">
                                <label for="name">Tên Thương Hiệu:</label>              
                                <select name="id_thuonghieu"   class="form-control" id="">
                                    @foreach ($item as $item)
                                        <option value="{{$item->id_thuonghieu}}" 
                                            <?php
                                             if($item->id_thuonghieu == $data->id_thuonghieu) 

                                            >{{$item->tenthuonghieu}}</option>
                                    @endforeach
                                </select>
                            </div>
                         
                       
                             
                
                                <button class="btn btn-success">UPDATE</button>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
