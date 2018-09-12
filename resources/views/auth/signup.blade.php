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
									<p style = "font-size:30px;color:white;">Signup</p>
									<p style = "color:white;font-size:15px;">Be a part of your <b>Hobby</b> Community</p>
								</div>
								<div class = "Signup-icon">
									<i class = "fa fa-pencil" id = "signup-logo" arial-hidden = "true" style = ""></i>
								</div>
							</div>
						</div>
					</div>
					<div style= "background-color:rgb(222, 224, 224);">
						<form role = "form" action = "{{URL('/register')}}" method = "POST" style = "width: 94%;padding-left: 18px;">
							{{ csrf_field() }}
							<div class = "form-group">
								<label for = "Email" class = "form-text"><i class = "fa fa-user" arial-hidden = "true"></i> Email</label>
								<input type  = "email" class = "form-control" autocomplete = "off" name = "Email" placeholder = "Email Address" value = "{{ old('Email') }}">
								@if($errors->has('Email'))
									<p class = "error">*{{ $errors->first('Email')}}</p>
								@endif
								<label for = "usn" class = "form-text"><i class = " fa fa-user" arial-hidden = "true"></i> Username</label>
								<input type  = "text" class = "form-control" autocomplete = "off" name = "username" value = "{{ old('username') }}" placeholder = "Username">
								@if($errors->has('username'))
									<p class = "error">*{{ $errors->first('username')}}</p>
								@endif
								<label for = "Password" class = "form-text"><i class = "fa fa-eye" arial-hidden = "true"></i> Password</label>
								<input type  = "password" class = "form-control" autocomplete = "off" name = "password" placeholder = "Password">
								@if($errors->has('password'))
									<p class = "error">*{{ $errors->first('password')}}</p>
								@endif
								<label for = "Phone" class = "form-text"><i class = "fa  fa-mobile" arial-hidden = "true"></i> Phone Number</label>
								<input type  = "phone" class = "form-control" autocomplete = "off" name = "Phone" value = "{{ old('Phone') }}" placeholder = "Phone Number e.g(+234834234848)">
								@if($errors->has('Phone'))
									<p class = "error">*{{ $errors->first('Phone')}}</p>
								@endif
								<button type = "submit" class = "btn btn-default" name = "submit" style = "color:white;background-color: rgb(182, 54, 43);width: 100%;margin-top: 32px;font-weight:bold;">
								<i class = "fa fa-pencil" arial-hidden = "true" ></i> Sign up</button>
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