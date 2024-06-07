<head>
	<title>SMART PLANT</title>
	<link rel="icon" href="/images/logo.png">
</head>
<div class="bg-change overflow-x-hidden ">
	<div class="row">
		@include('templates.header')
		<div class="row font font-page">Submit Planting</div>
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
					<h1>
						บันทึกข้อมูลผลการเก็บเกี่ยว
						<span><i class="bi bi-basket-fill"></i></span>
					</h1>
					<form action="/plantingSubmitUp" method="POST">
						@csrf
						<div class="row col-11" style="margin-top:20px;">
							<input type="hidden" name="inputPlantingId" value="{{ $spt->planting_id }}">
							<div class="d-flex justify-content-center">
								<div class="mb-3 form-plant-submit">
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