<head>
	<title>SMART PLANT</title>
	<link rel="icon" href="/images/logo.png">
</head>
<div class="bg-change overflow-x-hidden ">
	<div class="row">
		@include('templates.header')
		<div class="row font font-page">Profile</div>
	</div>
	<div class="row">
		<div class="col-2"> 
			@include('templates.menu')
		</div> 
		<div class="col font content-main">
			@if (Session::missing('keyLoggedin'))
			<div class="content-please-login">
				<h1>กรุณาทำการ Login</h1>
				<h2>Plaese Login</h2>
				<a class="nav-link" href="/login">
		        	<button class="rounded-2 btn-please-login">Login</button>
		        </a>
			</div>
		    @else (Session::get('keyEmail'))
			<div class="row font">
				<div class="col-2">
					<a href="/dashboard" class="link-underline link-underline-opacity-0">
						<span>
							<img src="/images/icon-left.png" class="icon-left" style="color:red;">
							<span class="font-icon-back text-muted">Back </span>
						</span>
					</a>
				</div>
				<div class="col-9 profile-bar rounded-4">
					<div class="row">
						<div class="col-8" style="margin-top:20px;">
							<div class="row font-profile">
								Personal 
							</div>
							<div class="row info-box rounded-2">
								<div class="col-1">
									<img class="info-icon" src="/images/icon-profile-gray.png">
								</div>
								<div class="col d-flex align-items-center font-info">
									{{ $su->user_name }} 
									{{ $su->user_lastname }}
								</div>
							</div>
							<div class="row info-box rounded-2">
								<div class="col-1">
									<img class="info-icon" src="/images/icon-email-gray.png">
								</div>
								<div class="col d-flex align-items-center font-info">{{ $su->user_email }}</div>
							</div>
							<div class="row info-box rounded-2">
								<div class="col-1">
									<img class="info-icon" src="/images/icon-phone-gray.png">
								</div>
								<div class="col d-flex align-items-center font-info">{{ $su->user_phone }}</div>
							</div>
							<div class="row info-box rounded-2">
								<div class="col-2 d-flex align-items-center font-info">
									<i class="bi bi-person-check "></i>
									<span class="p-2 fs-7">Status:</span>
								</div>
								<div class="col d-flex align-items-center font-info">{{ $su->user_status }}</div>
							</div>
							<!-- <div class="row font-profile">
								Change Password 
							</div>
							<div class="row info-box rounded-2">
								<div class="col-1">
									<img class="info-icon" src="/images/icon-lock-gray.png">
								</div>
								<div class="col d-flex align-items-center font-info">Current Password</div>
							</div>
							<div class="row info-box rounded-2">
								<div class="col-1">
									<img class="info-icon" src="/images/icon-lock-gray.png">
								</div>
								<div class="col d-flex align-items-center font-info">New Password</div>
							</div>
							<div class="row info-box rounded-2">
								<div class="col-1">
									<img class="info-icon" src="/images/icon-lock-gray.png">
								</div>
								<div class="col d-flex align-items-center font-info">Confirm Password</div>
							</div> -->
							<a href="/user_logout" class="link-underline link-underline-opacity-0">
								<div class="row" style="margin-top:30px; margin-left: 20px;">
									<div class="col-1">
										<img class="info-icon" src="/images/icon-signout-green.png">
									</div>
									<div class="col font-profile d-flex align-items-center" style="margin-top:-1; margin-left: -10px;">Sign Out</div>
								</div>
							</a>
						</div>
						<div class="col align-self-center">
							<div class="row logo">
								<img src="{{ $su->user_img }}" class="logo-user">
							</div>
							<div class="row">
								<div class="text-center">User ID : {{ $su->user_id }} </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endif
		</div>

	</div>

	<div class="row" style="margin-top: 10px;">
		@include('templates.footer')
	</div>

</div>