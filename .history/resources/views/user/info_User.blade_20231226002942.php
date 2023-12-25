 
@extends('user.topbar')
@section('user')
 <?php
  $data = Session::get('data'); 
 ?>
	<section class="bg0 p-t-104 p-b-116">
		<div class="container">
            <form action="" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                    
 
                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                username
                            </span>
                            <input name="username"  class="stext-115 cl6 size-213 p-t-18" type="text" value=" {{$data->username}}" >
                        </div>
                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                password
                            </span>
                            <input name="password"  class="stext-115 cl6 size-213 p-t-18" type="text" value=" {{$data->password}}" >
                        </div>
                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                birthDay
                            </span>
                            <input name="birthDay"  class="stext-115 cl6 size-213 p-t-18" type="text" value=" {{$data->birthDay}}" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                address
                            </span>
                            <input name=""  class="stext-115 cl6 size-213 p-t-18" type="text" value=" {{$data->address}}" >
                        </div>
                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                phone_number
                            </span>
                            <input name=""  class="stext-115 cl6 size-213 p-t-18" type="text" value=" {{$data->phone_number}}" >
                        </div>
                        <div class="size-212 p-t-2">
                            <span class="mtext-110 cl2">
                                mail
                            </span>
                            <input name="mail"  class="stext-115 cl6 size-213 p-t-18" type="text" value=" {{$data->mail}}" >
                        </div>
                    </div>
                    </div>
                </div>
            </form>
            
 
		 
		 
		</div>
	</section>	
	
	




@endsection