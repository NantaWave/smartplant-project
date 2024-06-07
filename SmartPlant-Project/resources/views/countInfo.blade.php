<head>
	<title>SMART PLANT</title>
	<link rel="icon" href="/images/logo.png">
</head>
<div class="bg-change overflow-x-hidden ">
	<div class="row">
		@include('templates.header')
		<div class="row font font-page">Counter Info</div>
	</div>
	<div class="row">
		<div class="col-2"> 
			@include('templates.menu')
		</div> 
		<div class="col font content-main overflow-scroll overflow-x-hidden"> 
			<div class="row font">
				<div class="col-2">
					<a href="/dashboard" class="link-underline link-underline-opacity-0">
						<span>
							<img src="/images/icon-left.png" class="icon-left" style="color:red;">
							<span class="font-icon-back text-muted">Back </span>
						</span>
					</a>
				</div>
				<div class="col-9 ">
					<div class="row content-countinfo-user rounded-4" data-bs-spy="scroll">
						<div class="row">
							<div class="fs-1 font-head-account">
								บัญชีผู้ใช้ - Account
								<span>
									<a href="/user-add">
										<button class="btn-add border border-0 rounded-3">
											<i class="bi bi-file-earmark-plus-fill"></i>
											<span class="fs-5">เพิ่มบัญชีผู้ใช้</span>
										</button>
									</a>
								</span>
							</div>
						</div>
						<!-- <div class="row">
							<form style="margin-left: 10vw;">
								<label class="fs-3" style="margin-top:10px;">ค้นหาผู้ใช้</label>
						        <div class="d-flex">
						            <input class="p-2 w-50 form-control" type="search" placeholder="User ID :	" aria-label="Search">
						            <button class="p-2 flex-shrink-1 btn-search rounded-3" type="submit">
						            	<i class="bi bi-search"></i> Search
						            </button>
						        </div>
							</form>
					    </div> -->
					    <div class="row">
					    	<div class="d-flex justify-content-center" style="margin-left:15px;">
					    		<table class="table table-borderless">
						    		<tr class="user-head">
							    		<th>User ID</th>
							    		<th>Name</th>
							    		<th>Last name</th>
							    		<th>E-Mail</th>
							    		<th>Phone</th>
							    		<th>Status</th>
							    		<th></th>
							    	</tr>
							    	@foreach ( $userInfo as $info)
							    	<tr class="user-list">
							    		<th>{{ $info->user_id }}</th>
							    		<th>{{ $info->user_name}}</th>
							    		<th>{{ $info->user_lastname}}</th>
							    		<th>{{ $info->user_email}}</th>
							    		<th>{{ $info->user_phone}}</th>
							    		<th>{{ $info->user_status}}</th>
							    		<th>
							    			<div class="d-flex justify-content-center">
							    				<a href="userEdit/{{$info->user_id}}">
							    					<button class="btn-edit-use border-0 rounded-3 me-1" type="button">
								    				<i class="bi bi-pencil-square"></i> Edit</button>
							    				</a>
							    				<a href="userDelete/{{$info->user_id}}">
							    					<button class="btn-delete-use border-0 rounded-3" type="button">
								    				<i class="bi bi-trash2-fill"></i> Delete</button>
							    				</a>
							    			</div>
							    		</th>
							    	</tr>
						    		@endforeach
						    	</table>
					    	</div>
					    </div>
					</div>
					<div class="row content-countinfo-user rounded-4" data-bs-spy="scroll">
						<div class="row">
							<div class="fs-1 font-head-account">
								เครื่อง - Machine
							</div>
						</div>
						<!-- <div class="row">
							<form style="margin-left: 10vw;">
								<label class="fs-3" style="margin-top:10px;">ค้นหาระบบปลูก</label>
						        <div class="d-flex">
						            <input class="p-2 w-50 form-control" type="search" placeholder="User ID :	" aria-label="Search">
						            <button class="p-2 flex-shrink-1 btn-search rounded-3" type="submit">
						            	<i class="bi bi-search"></i> Search
						            </button>
						        </div>
							</form>
					    </div> -->
						<div class="row">
					    	<div class="d-flex justify-content-center" style="margin-left:15px;">
					    		<table class="table table-borderless">
						    		<tr class="user-head">
							    		<th>Machine ID</th>
										<th>User ID</th>
							    		<th>Status</th>
							    	</tr>
							    	@foreach ( $mcInfo as $info)
							    	<tr class="user-list">
							    		<th>{{ $info->mc_id }}</th>
										<th>{{ $info->user_id }}</th>
										<th>
											<button class="btn-{{ $info->mc_status ? 'ON' : 'OFF'}} border-0 rounded-3 me-1" type="button">
												{{ $info->mc_status ? 'ON' : 'OFF'}}
											</button>
										</th>
							    	</tr>
						    		@endforeach
						    	</table>
					    	</div>
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