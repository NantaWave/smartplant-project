<head>
	<title>SMART PLANT</title>
	<link rel="icon" href="/images/logo.png">
</head>
<div class="bg-change overflow-x-hidden ">
	<div class="row">
		@include('templates.header')
		<div class="row font font-page">Planting</div>
	</div>
	<div class="row">
		<div class="col-2"> 
			@include('templates.menu')
		</div> 
		<div class="col font content-main overflow-auto overflow-x-hidden"> 
			<div class="row font">
				<div class="col-2">
					<a href="/dashboard" class="link-underline link-underline-opacity-0">
						<span>
							<img src="/images/icon-left.png" class="icon-left" style="color:red;">
							<span class="font-icon-back text-muted">Back </span>
						</span>
					</a>
				</div>
				<div class="col-9" style="margin-left: -60px;">
					<div class="row" style="margin-bottom:10px;">
						<a href="/planting-add">
					  		<button class="btn-add border border-0 rounded-3">
						  		<i class="bi bi-file-earmark-plus-fill"></i> เพิ่มข้อมูล
						  	</button>
					  	</a>
					</div>
					@foreach ($shpt as $spt)
					<div class="row content-planting-slide d-flex align-items-center">
						<div class="col-6">
							<div style="margin-left:20px;">รหัสการปลูก : {{$spt->planting_id}}</div>
						</div>
						<div class="col-4">
							<div style="margin-left:20px;">วันที่เพาะปลูก : {{$spt->planting_date}}</div>
						</div>
						<div class="col-1 d-flex justify-content-center">
							<nav class="navbar">
							    <button class="navbar-toggler border border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$spt->planting_id}}" aria-controls="collapse{{$spt->planting_id}}" aria-expanded="false" aria-label="Toggle navigation">
					                <span>
					                    <i class="bi bi-caret-down-square"></i>
					                </span>
					            </button>
							</nav>
						</div>
						@if ($spt->planting_result == 0)
						<div class="col-1">
							<div style="display: none;"><i class="bi bi-check2-circle"></i></div>
						</div>
						@else
						<div class="col-1">
						<div><i class="bi bi-check2-circle"></i></div>
						</div>
						@endif
					</div>
					<div class="collapse" id="collapse{{$spt->planting_id}}">
					  <div>
					    <div class="row">
					    	<div class="col content-planting">
								<div class="row font-head-planting">
									<div style="margin-top:10px;">วันที่เก็บเกี่ยว</div>
									<div style="margin-top:-10px;">{{ $spt->planting_harvestDate }}</div>
								</div>
								<div class="row font-planting-desc" style="margin-top:20px;">
									<div>
										เหลือเวลาเก็บเกี่ยว
										<span>{{$spt->days_until_harvest}} วัน</span>
									</div>
								</div>
								<div class="row font-planting-desc">
									<div>ผลผลิต : {{ $spt->planting_result}} กรัม</div>
								</div>
							</div>
							<div class="col content-planting-col-3">
								<div class="font-planting">
									<div class="d-flex flex-row-reverse">: รหัสเครื่อง</div>
									<div class="d-flex flex-row-reverse font-planting-white">MC{{$spt->mc_id}}</div>
									<div class="d-flex flex-row-reverse" style="margin-top:10px;">: รหัสถั่ว</div>
									<div class="d-flex flex-row-reverse font-planting-white">BN{{$spt->bean_id}}</div>
									<div class="d-flex flex-row-reverse" style="margin-top:10px;">: บันทึกโดย</div>
									<div class="d-flex flex-row-reverse font-planting-white">User{{$spt->user_id}}</div>
								</div>
							</div>
					    </div>
					    <div>
					    	<div class="d-flex justify-content-end">
					    		@if ($spt->planting_result == 0)
					    		<div class="p-2">
							  		<a href="/plantingSubmit/{{ $spt->planting_id }}">
							  			<button class="btn-submit border border-0 rounded-3">
							  				<i class="bi bi-basket-fill"></i> Submit</button>
							  		</a>
							  	</div>
							  	@else
							  	<div class="p-2" style="display:none;">
							  		<a href="/plantingSubmit/{{ $spt->planting_id }}">
							  			<button class="btn-submit border border-0 rounded-3">
							  				<i class="bi bi-basket-fill"></i> Submit</button>
							  		</a>
							  	</div>
							  	@endif
							  	<div class="p-2">
								  	<a href="/plantingEdit/{{ $spt->planting_id }}">
								  		<button class="btn-edit border border-0 rounded-3">
								  			<i class="bi bi-pencil-square"></i> Edit</button>
								  	</a>
								</div>
								<div class="p-2">
								  	<a href="/plantingDelete/{{ $spt->planting_id }}">
								  		<button class="btn-delete border border-0 rounded-3"> 
						  					<i class="bi bi-trash2-fill"></i> Delete</button>
								  	</a>
								</div>
							</div>
						</div>
					  </div>
					</div>
					@endforeach
					<div class="row" style="margin-top:20px">
						<a href="/download-data">
							<button class="btn-download border border-0 rounded-3">
								Download CSV.
								<i class="bi bi-file-earmark-arrow-down-fill"></i>
							</button>
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