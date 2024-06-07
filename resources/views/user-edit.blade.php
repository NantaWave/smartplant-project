<head>
	<title>SMART PLANT</title>
	<link rel="icon" href="/images/logo-title.png">
</head>
<div class="bg-change overflow-x-hidden ">
	<div class="row">
		@include('templates.header')
		<div class="row font font-page">Edit User Profile</div>
	</div>
	<div class="row">
		<div class="col-2"> 
			@include('templates.menu')
		</div> 
		<div class="col font content-main"> 
			<div class="row font">
				<div class="col-2">
					<a href="/profile" class="link-underline link-underline-opacity-0">
						<span>
							<img src="/images/icon-left.png" class="icon-left" style="color:red;">
							<span class="font-icon-back text-muted">Back </span>
						</span>
					</a>
				</div>
				<div class="col-9 content-planting-add">
					<h1>แก้ไขบัญชีผู้ใช้</h1>
					<form action="/userUpdate" method="POST" enctype="multipart/form-data">
						@csrf
						<div class="row col-11" style="margin-top:20px; margin-left: 60px;">
							<input type="hidden" name="inputUserId" value="{{ $use->user_id }}">

							<div class="row">
								<div class="d-flex align-items-center form-add">
								    <img class="info-icon" src="/images/icon-profile-gray.png">
								    <label for="inputName" class="align-middle ms-2">Name - Last name</label>
								</div>
							</div>
							<div class="row" style="margin-top:10px;">
								<div class="col-5 mb-2 form-add">
								  	<input value="{{ old('inputName' , $use->user_name) }}" id="inputName" name="inputName" type="text" class="form-control" placeholder="Name :">
								</div>
								<div class="col-5 mb-2 form-add">
									<input value="{{ old('inputLastName' , $use->user_lastname) }}" id="inputLastName" name="inputLastName" type="text" class="form-control" placeholder="Last name :">
								</div>
							</div>
						</div>
						<div class="row col-11" style="margin-top:20px; margin-left: 60px;">
							<div class="col-5 mb-2 form-add">
							  		<img class="info-icon" src="/images/icon-email-gray.png">
							  		<label for="inputEmail" class="align-middle">E-Mail</label>
							  	<div style="margin-top:10px;">
							  		<input value="{{ old('inputEmail', $use->user_email) }}" id="inputEmail" name="inputEmail" type="email" class="form-control" placeholder="E-mail :">
							  	</div>
							</div>
							<div class="col-5 mb-2 form-add">
								<img class="info-icon" src="/images/icon-lock-gray.png">
								<label for="inputPassword" class="align-middle">Password</label>
								<div style="margin-top:10px;">
									<input value="{{ old('inputPassword', $use->user_passwd) }}" id="inputPassword" name="inputPassword" type="text" class="form-control" placeholder="Password :">
								</div>
							</div>
						</div>
						<div class="row col-11" style="margin-top:10px; margin-left: 60px;">
							<div class="col-5 mb-3 form-add">
								<i class="bi bi-person-check "></i>
								<label for="inputStatus" class="form-label">Status</label>
								<input value="{{ old('inputStatus' , $use->user_status) }}" id="inputStatus" name="inputStatus" class="form-control"></input>
							</div>
							<div class="col-5 mb-3 form-add">
								<img class="info-icon" src="/images/icon-phone-gray.png">
								<label for="inputPhoneNum" class="form-label">Phone number</label>
								<div class="input-group">
									<input value="{{ old('inputPhoneNum' , $use->user_phone) }}" id="inputPhoneNum" name="inputPhoneNum" type="text" class="form-control" placeholder="Phone number :">
								</div>
							</div>
						</div>
						<div class="row col-11" style="margin-top:10px;">
							<div class="d-flex justify-content-center">
								<div class="col-5 form-group mb-3 form-add">
									<i class="bi bi-person-bounding-box"></i>
									<label for="inputImg">Profile image</label>
								    <div class="input-group mb-3">
									  <input type="file" class="form-control" id="inputImg" name="inputImg" value="{{ old('inputImg') }}">
									</div>
								</div>
							</div>
						</div>
						<div class="row" style="margin-bottom:40px;">
							<div class="d-flex justify-content-center">
								<button type="submit" class="rounded-3 btn-plant-add-submit ">Submit</button>
								<button type="reset" class="rounded-3 btn-plant-add-reset ">Clear</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>

	</div>

	<div class="row" style="margin-top: 10px;">
		@include('templates.footer')
	</div>

</div>