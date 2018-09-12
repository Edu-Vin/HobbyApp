<!DOCTYPE html>
<html>`
<head>
<link rel  = "stylesheet" href  = "/css/bootstrap.min.css"/>
<link rel  = "stylesheet" href =" /css/bootsrap-theme.min.css"/>
<link rel = "stylesheet" href = "/font-awesome/css/font-awesome.min.css"/>
<link rel = "stylesheet" href = "/css/style.css"/>
<title>Password Reset</title>
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
						@if (session('status'))
	                        <div class="alert alert-success alert-dismissible">
	                        	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	                            {{ session('status') }}
	                        </div>
                    	@endif
						<form role = "form" action = "{{ route('password.email') }}" method = "POST" style = "width: 94%;padding-left: 18px;">
							{{ csrf_field() }}
							<div class = "form-group">
								<label for="email" class="form-text">E-Mail Address</label>
								<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
								@if($errors->has('email'))
									<p class = "error">*{{ $errors->first('email')}}</p>
								@endif
								<button type = "submit" class = "btn btn-default" name = "submit" style = "color:white;background-color: rgb(182, 54, 43);width: 100%;margin-top: 32px;font-weight:bold;"> Send Reset Link</button>
							</div>
							{{-- <hr/> --}}
							<div class="email-img">
	                            <img src = "/img/gmail.png" class = "img-responsive">
	                            <img src = "/img/yahoo.png" class = "img-responsive">
	                            <img src = "/img/outlook.png" class = "img-responsive">
                        	</div>
						</form>
					
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
</body>
</html>