 
@extends('user.topbar')
@section('user')
 <?php
  $data = Session::get('data'); 
 ?>
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
	 
	
            <form action="
            " method="post">
            @csrf
            <div class="size-210 bor10 flex-w flex-col-m p-lr-93 p-tb-30 p-lr-15-lg w-full-md">
                
                <div class="flex-w w-full p-b-42">
                    <span class="fs-18 cl5 txt-center size-211">
                        <span class="lnr lnr-map-marker"></span>
                    </span>

                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            username
                        </span>
                        <input   class="stext-115 cl6 size-213 p-t-18" type="text" value=" {{$data->username}}" >
                    </div>
                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            password
                        </span>
                        <input   class="stext-115 cl6 size-213 p-t-18" type="text" value=" {{$data->password}}" >
                    </div>
                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            fullName
                        </span>
                        <input   class="stext-115 cl6 size-213 p-t-18" type="text" value=" {{$data->fullName}}" >
                    </div>
                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            birthDay
                        </span>
                        <input   class="stext-115 cl6 size-213 p-t-18" type="text" value=" {{$data->birthDay}}" >
                    </div>
                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            address
                        </span>
                        <input   class="stext-115 cl6 size-213 p-t-18" type="text" value=" {{$data->fulladdressName}}" >
                    </div>
                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            phone_number
                        </span>
                        <input   class="stext-115 cl6 size-213 p-t-18" type="text" value=" {{$data->fullName}}" >
                    </div>
                    <div class="size-212 p-t-2">
                        <span class="mtext-110 cl2">
                            mail
                        </span>
                        <input   class="stext-115 cl6 size-213 p-t-18" type="text" value=" {{$data->fullName}}" >
                    </div>
                </div>
 
            </div>
        </form>
		 
		 
		</div>
	</section>	
	
	




@endsection