<head>
	<title>SMART PLANT</title>
	<link rel="icon" href="/images/logo.png">
</head>
<div class="bg-change overflow-x-hidden ">
	<div class="row">
		@include('templates.header')
		<div class="row font font-page">Add Planting</div>
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
					<h1>บันทึกข้อมูลการปลูก</h1>
					<form action="/plantingAdd" method="POST">
						@csrf
						<div class="row col-11" style="margin-top:20px;">
							<div class="col-5 mb-3 form-plant-add">
							  	<label for="inpurMcId" class="form-label">รหัสเครื่อง</label>
							  	<div class="input-group">
							  		<span class="input-group-text">MC</span>
							  		<input value="{{ old('inputMcId') }}" id="inputMcId" name="inputMcId" type="text" class="form-control" placeholder="รหัสเครื่อง" aria-label="MachineID" aria-describedby="basic-addon1">
							  	</div>
							</div>
							<div class="col-5 mb-3 form-plant-add">
								<label for="inputUserId" class="form-label">รหัสผู้ใช้งาน</label>
								<div class="input-group">
									<span class="input-group-text">UID</span>
									<input value="{{ old('inputUserId') }}" id="inputUserId" name="inputUserId" type="text" class="form-control" placeholder="รหัสผู้ใช้งาน" aria-label="UserID" aria-describedby="basic-addon1">
								</div>
							</div>
						</div>
						<div class="row col-11" style="margin-top:10px;">
							<div class="col-5 mb-3 form-plant-add">
								<label for="inputBnId" class="form-label">รหัสถั่ว</label>
								<select value="{{ old('inputBnId') }}" id="inputBnId" name="inputBnId" class="form-select" aria-label="Default select example">
								  <option selected>เลือกรหัสถั่ว</option>
								  <option value="4001">4001</option>
								  <option value="4002">4002</option>
								</select>
							</div>
							<div class="col-5 mb-3 form-plant-add">
								<label for="inputQuantity" class="form-label">ปริมาณถั่ว</label>
								<select value="{{ old('inputQuantity') }}" id="inputQuantity" name="inputQuantity" class="form-select" aria-label="Default select example">
								  <option selected>เลือกปริมาณถั่ว (กรัม)</option>
								  <option value="500">500</option>
								  <option value="1000">1000</option>
								  <option value="1500">1500</option>
								</select>
							</div>
						</div>
						<div class="row col-11" style="margin-top:10px;">
							<div class="d-flex justify-content-center">
								<div class="col-5 form-group mb-3 form-plant-add">
									<label for="inputDate">วันที่ปลูก</label>
								    <input value="{{ old('inputDate') }}" type="date" class="form-control" id="inputDate" name="date">
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