@extends('admin.index')
@section('admin')
  <link rel="stylesheet" href="{{URL('frontend_admin')}}/css/admin_bike/create_bike.css">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h3>Thêm loại Xe</h3>           
                        </div>
                        <div class="panel-body">
                            <form method="post" action="{{URL::to('/admin/coupon/create')}}" enctype="multipart/form-data">
                               @csrf
                                <div class="form-group">
                                    <label for="name">Tên xe:</label>
                
                                    <input required="true" name="coupon_name" type="text" class="form-control" id="title" name="title"
                                        value=" "
                                      
                                        
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
