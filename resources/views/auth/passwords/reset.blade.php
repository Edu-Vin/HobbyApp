<!DOCTYPE html>
<html>`
<head>
<link rel  = "stylesheet" href  = "/css/bootstrap.min.css"/>
<link rel  = "stylesheet" href =" /css/bootsrap-theme.min.css"/>
<link rel = "stylesheet" href = "/font-awesome/css/font-awesome.min.css"/>
<link rel = "stylesheet" href = "/css/style.css"/>
<title>Sign Up</title>
</head>

<body style = "background-image: url(/img/img.png);background-size:100%;">
	<div class = "container-fluid">
		<div class  ="row">
			<div class= "col-md-6 col-md-offset-6">
				<div id = "signup-form">
					<div style = "background-color:rgb(182, 54, 43);">
						<div id = "top_level">
							<div class = "sign-design">
								<div class = "Signup-text">
									<p style = "font-size:30px;color:white;">Reset Password</p>
									<p style = "color:white;font-size:15px;">Be a part of your <b>Hobby</b> Community</p>
								</div>
								<div class = "Signup-icon">
									<i class = "fa fa-pencil" id = "signup-logo" arial-hidden = "true" style = ""></i>
								</div>
							</div>
						</div>
					</div>
					<div style= "background-color:rgb(222, 224, 224);">
						<form role = "form" action = "{{ route('password.request') }}" method = "POST" style = "width: 94%;padding-left: 18px;">
							<input type="hidden" name="token" value="{{ $token }}">
							{{ csrf_field() }}
							<div class = "form-group">
								<label for = "email" class = "form-text"><i class = "fa fa-user" arial-hidden = "true"></i> E-Mail Address</label>
								<input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
								@if($errors->has('email'))
									<p class = "error">*{{ $errors->first('email')}}</p>
								@endif
								<label for="password"><i class = "fa fa-eye" arial-hidden = "true"></i> Password</label>
								<input id="password" type="password" class="form-control" name="password" required>
								@if($errors->has('password'))
									<p class = "error">*{{ $errors->first('password')}}</p>
								@endif
								<label for="password-confirm"><i class = "fa fa-eye" arial-hidden = "true"></i> Confirm Password</label>
								<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
								@if($errors->has('password_confirmation'))
									<p class = "error">*{{ $errors->first('password')}}</p>
								@endif
								<button type = "submit" class = "btn btn-default" name = "submit" style = "color:white;background-color: rgb(182, 54, 43);width: 100%;margin-top: 32px;font-weight:bold;"> Reset Password</button>
							</div>
						</form>
					<hr/>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>