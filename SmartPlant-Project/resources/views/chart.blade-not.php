<head>
	<title>SMART PLANT</title>
	<link rel="icon" href="/images/logo-title.png">
</head>
<div class="bg-change overflow-x-hidden ">
	<div class="row">
		@include('templates.header')
		<div class="row font font-page">Chart</div>
	</div>
	<div class="row">
		<div class="col-2"> 
			@include('templates.menu')
		</div> 

		<div class="col font content-main"> 
			<div class="row font">
				<div class="col-2">
					<a href="/dashboard" class="link-underline link-underline-opacity-0">
						<span>
							<img src="/images/icon-left.png" class="icon-left" style="color:red;">
							<span class="font-icon-back text-muted">Back </span>
						</span>
					</a>
				</div>
				<div class="col-7">
					<div class="content-please-login">
						<h1>Coming Soon Feature</h1>
						<h2>ฟีเจอร์ จะถูกเปิดใช้งานในเร็ว ๆ นี้</h2>
						<a class="nav-link" href="/dashboard">
				        	<button class="rounded-2 btn-please-login">Dashboard</button>
				        </a>
					</div>
				</div>
			</div>
		</div>

	</div>

	<div class="row" style="margin-top: 10px;">
		@include('templates.footer')
	</div>

</div>