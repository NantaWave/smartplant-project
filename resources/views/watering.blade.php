<head>
	<title>SMART PLANT</title>
	<link rel="icon" href="/images/logo.png">
	<!-- <meta http-equiv="refresh" content="5"> -->
</head>
<div class="bg-change overflow-x-hidden ">
	<div class="row">
		@include('templates.header')
		<div class="row font font-page">Watering</div>
	</div>
	<div class="row">
		<div class="col-2"> 
			@include('templates.menu')
		</div> 

		<div class="col font content-main"> 
			<div class="row">

			</div>
			<div class="row bg-white rounded-4 pb-4 me-2 ms-1">
				<div class="row">
					<div class="col-9">
						<div class="fs-3 mb-0 me-auto p-2">Machine ID : {{ $fbData['mc_id']}}</div>
					</div>
					<div class="col d-flex flex-row fs-3">
						<div class="p-2">Status :</div>
						<div class="p-2 status-{{ $fbData['status1'] ? 'ON' : 'OFF' }}">{{ $fbData['status1'] ? 'ON' : 'OFF' }}</div>
					</div>
				</div>
				<div class="row font-main ms-1 mt-1 mb-3">
					<div class="col">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">คุณภาพน้ำ (pH) </h5>
								<div class="gauge-blog">
									<div class="content-gauge-ph">
										<div role="progressbar-ph" style="--value-ph: {{ $fbData['pH'] }};"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">ปริมาณประจุไฟฟ้า (C) </h5>
								<div class="gauge-blog">
									<div class="content-gauge-temp">
										<div role="progressbar-temp" style="--value-temp: {{ $fbData['waterSensor'] }};"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title mb-0">ระดับน้ำ</h5>
								<div class="gauge-blog">
									<div class="content-gauge-point-{{ $fbData['waterSensor'] ? 'on' : 'off' }}">
										<img src="/images/gauge-point-{{ $fbData['waterSensor'] ? 'on' : 'off' }}.png" class=" gauge-point">
										<p1>{{ $fbData['waterSensor'] ? 'Ready' : 'Not' }}</p1>
										<p2>{{ $fbData['waterSensor'] ? 'พร้อมใช้งาน' : 'ไม่พร้อม' }}</p2>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="d-flex justify-content-center mt-3">
						<div class="me-5">
							<div>
								<img src="images/watering-{{ $fbData['status1'] ? 'on' : 'off' }}.png" class="img-valve">
							</div>
							<a href="/statusWaterPump/{{ $fbData['status1'] }}">
								<button type="submit" class="rounded-3 btn-pump-{{ $fbData['status1'] ? 'on' : 'off' }}">
									{{ $fbData['status1'] ? 'Watering...' : 'Watering' }}
								</button>
							</a>
						</div>
						<div class="me-5">
							<div>
								<img src="images/valve-{{ $fbData['waterIn'] ? 'open' : 'close' }}.png" class="img-valve">
							</div>
							<a href="/statusVaIn/{{ $fbData['waterIn'] }}">
								<button type="submit" class="rounded-3 btn-pump-{{ $fbData['waterIn'] ? 'on' : 'off' }}">
									{{ $fbData['waterIn'] ? 'Pumping...' : 'Pump' }}
								</button>
							</a>
						</div>
						<div>
							<div>
								<img src="images/valve-{{ $fbData['waterOut'] ? 'open' : 'close' }}.png" class="img-valve">
							</div>
							<a href="/statusVaOut/{{ $fbData['waterOut'] }}">
								<button type="submit" class="rounded-3 btn-pump-{{ $fbData['waterOut'] ? 'on' : 'off' }}">
									{{ $fbData['waterOut'] ? 'Releasing...' : 'Release' }}
								</button>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row" style="margin-top: 10px;">
		@include('templates.footer')
	</div>
</div>