<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>SMART PLANT</title>
	<link rel="icon" href="/images/logo-title.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="/css/mystyle.css">
</head>
<div class="bg-change overflow-x-hidden ">
	<div class="row font font-signIn content-signIn">
		<div class="col-6">
			<div class="row logo">
				<img src="/images/logo.png" class="logo-signIn">
			</div>
			<div class="row font-logo">
				<div>
					<img src="/images/logo-font-login.png" class="font-logo-login">
				</div>
			</div>
		</div>
		<div class="col-6 align-self-center">
			<h1>Sign In</h1>
			<form action="/user_login" method="POST">
				@csrf
				<div style="margin-top:70px;">
					<div class="row signIn-box border-bottom">
						<div class="col-1">
							<img class="info-icon" src="/images/icon-profile-white.png">
						</div>
						<div class="col-11 d-flex align-items-center">
							<input type="Username" name="inEmail" value="{{ old('inEmail')}}" 
							class="font-signIn form-control bg-transparent border border-0" placeholder="Username">
						</div>
					</div>
					<div class="row signIn-box border-bottom">
						<div class="col-1">
							<img class="info-icon" src="/images/icon-lock-white.png">
						</div>
						<div class="col-11 d-flex align-items-center">
							<input type="password" name="inPasswd" value="{{ old('inPasswd')}}"
							class="font-signIn form-control bg-transparent border border-0" placeholder="Password">
						</div>
					</div>
					<div class="d-grid gap-2 row col-8">
					  <button class="rounded-2 btn-login btn-login-hover border border-white" type="Submit">Login</button>
					</div>
				</div>				
			</form>
		</div>
	</div>
	<div class="row" style="margin-top: 10px;">
		@include('templates.footer')
	</div>
</div>