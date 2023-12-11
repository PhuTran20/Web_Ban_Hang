<!DOCTYPE html>
<html lang="en">
<head>
	<title>Đăng Kí</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="{{url('frontend')}}/images/icons/favicon.png"/>
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{url('frontend')}}/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('frontend')}}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('frontend')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('frontend')}}/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('frontend')}}/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{url('frontend')}}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('frontend')}}/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('frontend')}}/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{url('frontend')}}/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{url('frontend')}}/css/util_login.css">
	<link rel="stylesheet" type="text/css" href="{{url('frontend')}}/css/login_user.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('{{url('frontend')}}/images/icons/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-49">
						Đăng Kí
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Tên tài khoản</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>  

					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Mật khẩu</span>
						<input class="input100" type="password" name="pass" placeholder="Type your password">
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Nhập lại mật khẩu</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Họ tên</span>
						<input class="input100" type="text" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Ngày sinh</span>
						<input class="input100" type="date" name="username" placeholder="Type your username">
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Tỉnh thành</span>
						<select class="input80" name="name" id="">
                            @foreach ($devvn_tinhthanhpho as $tinhtp)
                            <option name ="{{t}}" value="">{{$tinhtp->name}}</option>
                            @endforeach
                                @foreach ($devvn_quanhuyen as $quanhuyen)
                                <option value="">{{$quanhuyen->name}}</option>
                                @endforeach
                            @foreach ($devvn_xaphuongthitran as $xaphuongthitran)
                                <option value="">{{$xaphuongthitran->name}}</option>
                           
                             @endforeach
                        </select>
						 
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Tỉnh thành</span>
						<select class="input80" name="" id="">
                            @foreach ($devvn_quanhuyen as $item)
                           
                                <option value="">{{$item->name}}</option>
                            @endforeach
                        </select>
                       
						 
					</div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is reauired">
						<span class="label-input100">Tỉnh thành</span>
						<select class="input80" name="" id="">
                            @foreach ($devvn_xaphuongthitran as $item)
                                <option value="">{{$item->name}}</option>
                            @endforeach
                        </select>
						 
					</div>
                 
					
					<div class="text-right p-t-8 p-b-31">
						<a href="#">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>
					</div>

					<div class="txt1 text-center p-t-54 p-b-20">
						<span>
							Or Sign Up Using
						</span>
					</div>

					<div class="flex-c-m">
						<a href="#" class="login100-social-item bg1">
							<i class="fa fa-facebook"></i>
						</a>

						<a href="#" class="login100-social-item bg2">
							<i class="fa fa-twitter"></i>
						</a>

						<a href="#" class="login100-social-item bg3">
							<i class="fa fa-google"></i>
						</a>
					</div>

					<div class="flex-col-c p-t-155">
						<span class="txt1 p-b-17">
							Quay trở lại <a href="{{url('/')}}">Trang Chủ</a>
						</span>
						<span class="txt1 p-b-17">
							Bạn chưa có tài khoản <a href="{{url('/register')}}">Đăng  Kí</a> ngay
						</span>
                    
					 
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{url('frontend')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('frontend')}}/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('frontend')}}/vendor/bootstrap/js/popper.js"></script>
	<script src="{{url('frontend')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('frontend')}}/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="{{url('frontend')}}/vendor/daterangepicker/moment.min.js"></script>
	<script src="{{url('frontend')}}/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="{{url('frontend')}}/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="{{url('frontend')}}/js/login.js"></script>

</body>
</html>