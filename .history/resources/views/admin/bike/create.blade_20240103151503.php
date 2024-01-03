@extends('admin.index')
@section('admin')
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
                                    <label for="name">Tên :</label>
                
                                    <input required="true" name="coupon_name" type="text" class="form-control" id="title" name="title"
                                        value=" "
                                        class="@error('coupon_name') form-control is-invalid @enderror">
                                        @error('coupon_name') 
                                        <div class="" style="color:red">{{$message}} </div>
                                         @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Số lượng mã:</label>
                
                                    <input required="true" name="coupon_quanti" type="text" class="form-control" id="title" name="title"
                                        value=" "
                                        class="@error('coupon_quanti') form-control is-invalid @enderror">
                                        @error('coupon_quanti') 
                                        <div class="" style="color:red">{{$message}} </div>
                                         @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Mã giảm giá:</label>
                
                                    <input required="true" name="coupon_code" type="text" class="form-control" id="title" name="title"
                                        value=" "
                                        class="@error('coupon_code') form-control is-invalid @enderror">
                                        @error('coupon_code') 
                                        <div class="" style="color:red">{{$message}} </div>
                                         @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Tính năng mã:</label>
                                    <select name="coupon_condition" class="form-control"  id="">
                                        <option value="0">Chọn tính năng</option>
                                        <option value="1">Giảm giá theo phần trăm</option>
                                        <option value="2">Giảm giá theo tiền</option>
                                        {{-- <option value="3">Free Ship</option> --}}
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="name">Nhập số % hoặc tiền giảm:</label>
                
                                    <input required="true" name="coupon_number" type="text" class="form-control" id="title" name="title"
                                        value=" "
                                        class="@error('coupon_number') form-control is-invalid @enderror">
                                        @error('coupon_number') 
                                        <div class="" style="color:red">{{$message}} </div>
                                         @enderror
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
