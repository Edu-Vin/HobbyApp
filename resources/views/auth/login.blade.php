<!DOCTYPE html>
<html>
<head>
<link rel  = "stylesheet" href  = "/css/bootstrap.min.css"/>
<link rel  = "stylesheet" href =" /css/bootsrap-theme.min.css"/>
<link rel = "stylesheet" href = "font-awesome/css/font-awesome.min.css"/>
<link rel  = "stylesheet" href =" /css/style.css"/>
<title>Hobby App</title>
</head>

<body style = "background-image: url(/img/img1.png);background-size: 100%;">
<div class = "container-fluid">
	<div class = "row">
		<div class = "col-md-6 col-md-offset-6">
			<div class = "login-form">
				<div style = "background-color:rgb(26, 154, 126);">
					<div id = "top-level">
						<div class = "log-design">
							<div id = "login-text" ">
								<p style = "font-size:30px;color:white;">Login</p>
							</div>
							<div id = "login-icon">
								<i class = "fa fa-lock" id = "lock-icon" arial-hidden = "true" style = ""></i>
							</div>
						</div>
					</div>
				</div>
				<div style= "background-color:rgb(222, 224, 224);">
					<p class = "text-center top-text">Welcome to my HobbyApp</p>
					<form role = "form" action = "{{route('login')}}" method = "POST" style = "width: 94%;padding-left: 18px;">
						{{ csrf_field() }}
						@if(count($errors))
							<p class = "error text-center"> *{{ $errors->first() }} </p>
						@endif
						<div class = "form-group">
							<label for = "usn"><i class = "fa fa-user" arial-hidden = "true"></i> Username</label>
							<input type  = "text" class = "form-control" autocomplete = "off" name = "username" placeholder = "Username">
							<label for = "usn" style = "padding-top: 12px;"><i class = "fa fa-eye" arial-hidden = "true"></i> Password</label>
							<input type  = "password" class = "form-control" name = "password" placeholder = "Password">
							<button type = "submit" class = "btn btn-default login-btn" name  = "submit" style = ";">
							<i class = "fa fa-lock" arial-hidden = "true" ></i> Login</button>
						</div>
					</form>
					<hr/>
					<div class = "text-center bottom" style = "">
						<a href = "/signup">Sign up</a>
						<p>Forgot <a href = "/password/reset">Password?</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
</script>
</body>
</html>
