<head>
	<title>SMART PLANT</title>
	<link rel="icon" href="/images/logo-title.png">
</head>
<div class="bg-change overflow-x-hidden ">
	<div class="row">
		@include('templates.header')
		<div class="row font font-page">Release</div>
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
			</div>
			<div class="row font-main d-flex justify-content-center" style="padding-right: 10px; margin-top: 10px;">
			  <div class="col-4">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title">คุณภาพน้ำ (pH) </h5>
			        <div class="gauge-blog">
			        	<div class="content-gauge-ph">
					        <div role="progressbar-ph" style="--value-ph: {{ $machineData->mc_ph }};"></div>
					    </div>
			        </div>
			        <a href="/chart" class="btn btn-outline-light">Chart คุณภาพน้ำ</a>
			      </div>
			    </div>
			  </div>
			  <div class="col-4">
			    <div class="card">
			      <div class="card-body">
			        <h5 class="card-title">อุณหภูมิน้ำ (°C) </h5>
			        <div class="gauge-blog">
			        	<div class="content-gauge-temp">
					        <div role="progressbar-temp" style="--value-temp: {{ $machineData->mc_temp }};"></div>
					    </div>
			        </div>
			        <a href="/chart" class="btn btn-outline-light">Chart อุณหภูมิน้ำ</a>
			      </div>
			    </div>
			  </div>
			  <div class="row" style="margin-top:40px;">
			  		<div>
						<button type="submit" class="rounded-3 btn-pump">Pumping</button>
						<button type="reset" class="rounded-3 btn-release">Release</button>
					</div>
			  </div>
			</div>
		</div>

	</div>

	<div class="row" style="margin-top: 10px;">
		@include('templates.footer')
	</div>

</div>