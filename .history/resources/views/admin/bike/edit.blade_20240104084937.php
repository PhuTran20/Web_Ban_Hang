@extends('admin.index')
@section('admin')
  <link rel="stylesheet" href="{{URL('frontend_admin')}}/css/admin_bike/create_bike.css">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>Sửa </h3>           
                        </div>
                        <div class="panel-body">
                            <form method="post" action="/admin/thuonghieu/edit_thuonghieu/{{$data->id_thuonghieu}}" enctype="multipart/form-data">
                               @csrf
                               <input type="hidden" name="_method" value="put">
                                <div class="form-group">
                                    <label for="name">Tên thương hiệu:</label>              
                                    <input required="true" name="tenthuonghieu" type="text" class="form-control input_namebike" id="title"  
                                        value="{{$data->tenthuonghieu}} "
                                      >
                                        
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
