<head>
	<title>SMART PLANT</title>
	<link rel="icon" href="/images/logo.png">
</head>
<div class="bg-change overflow-x-hidden ">
	<div class="row">
		@include('templates.header')
		<div class="row font font-page">Edit Planting</div>
	</div>
	<div class="row">
		<div class="col-2"> 
			@include('templates.menu')
		</div> 
		<div class="col font content-main"> 
			<div class="row font">
				<div class="col-2">
					<a href="/planting" class="link-underline link-underline-opacity-0">
						<span>
							<img src="/images/icon-left.png" class="icon-left" style="color:red;">
							<span class="font-icon-back text-muted">Back </span>
						</span>
					</a>
				</div>
				<div class="col-9 content-planting-add">
					<h1>แก้ไขข้อมูลการปลูก</h1>
					<form action="/plantingUpdate" method="POST">
						@csrf
						<div class="row col-11" style="margin-top:20px;">
							<input type="hidden" name="inputPlantingId" value="{{ $spt->planting_id }}">

							<div class="col-5 mb-3 form-plant-add">
							  	<label for="inpurMcId" class="form-label">รหัสเครื่อง</label>
							  	<div class="input-group">
							  		<span class="input-group-text">MC</span>
							  		<input value="{{ old('inputMcId' , $spt->mc_id) }}" id="inputMcId" name="inputMcId" type="text" class="form-control" placeholder="รหัสเครื่อง" aria-label="MachineID" aria-describedby="basic-addon1">
							  	</div>
							</div>
							<div class="col-5 mb-3 form-plant-add">
								<label for="inputUserId" class="form-label">รหัสผู้ใช้งาน</label>
								<div class="input-group">
									<span class="input-group-text">UID</span>
									<input value="{{ old('inputUserId' ,$spt->user_id) }}" id="inputUserId" name="inputUserId" type="text" class="form-control" placeholder="รหัสผู้ใช้งาน" aria-label="UserID" aria-describedby="basic-addon1">
								</div>
							</div>
						</div>
						<div class="row col-11" style="margin-top:10px;">
							<div class="col-5 mb-3 form-plant-add">
								<label for="inputBnId" class="form-label">รหัสถั่ว</label>
								<input value="{{ old('inputBnId' , $spt->bean_id) }}" id="inputBnId" name="inputBnId"
								 type="text" class="form-control" placeholder="รหัสถั่ว" aria-label="inputBnID" aria-describedby="basic-addon1">
							</div>
							<div class="col-5 mb-3 form-plant-add">
								<label for="inputQuantity" class="form-label">ปริมาณถั่ว</label>
								<input value="{{ old('inputQuantity' , $spt->planting_quantity) }}" id="inputQuantity" 
								name="inputQuantity"type="text" class="form-control" placeholder="ปริมาณถั่ว" aria-label="inputQuantity" aria-describedby="basic-addon1">
							</div>
						</div>
						<div class="row col-11" style="margin-top:10px;">
							<div class="d-flex justify-content-center">
								<div class="col-5 form-group mb-3 form-plant-add">
									<label for="inputDate">วันที่ปลูก</label>
								    <input value="{{ old('inputDate' , $spt->planting_date) }}" type="date" class="form-control" id="inputDate" name="date" style="margin-top:10px;">
								</div>
								<div class="col mb-3 form-plant-add">
									<label for="inputResult" class="form-label">ผลผลิตที่ได้ (กรัม)</label>
									<input value="{{ old('inputResult' , $spt->planting_result) }}" id="inputResult" name="inputResult" type="text" class="form-control" placeholder="ผลผลิตที่ได้">
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