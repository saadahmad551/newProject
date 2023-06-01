@extends('layouts.master')
@section('title', ' Vehicle Maintenence')

@section("extra_style")
@endsection

@section('main_content')

<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
	<!--begin::Container-->
	<div id="kt_content_container" class="container-xxl">
		<!--begin::Row-->

		<!--begin::Row-->
		<div class="row gy-5 g-xl-8">

			<!--begin::Col-->
			<div class="col-xl-12">
				<!--begin::Tables Widget 9-->
				<div class="card card-flush h-xl-100">
					<!--begin::Header-->

					<div class="card-header pt-5 mb-3">
						<!--begin::Title-->
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder text-gray-800 fs-lg-2x">Vehicles Mentainence</span>

						</h3>
						<!--end::Title-->
						<!--begin::Toolbar-->


						<div class="card-toolbar ">
							<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
							<a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Mentainence Detail</a>
							<!--end::Daterangepicker-->
						</div>

					</div>
					<!--end::Header-->
					<div class="card-body">
						<!--begin::Table-->
						<table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
							<!--begin::Table head-->
							<thead>
								<!--begin::Table row-->
								<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
									<th class="  pb-3  text-center">Vehicle</th>

									<th class="text-end pe-3 min-w-80px">Employee</th>

									<th class="text-end pe-3 min-w-100px"> Mentainence Date</th>
									<th class="text-end pe-0 min-w-25px"> Mentainence Type</th>

									<th class="text-end pe-3 min-w-100px">Cost</th>
									<th class="text-end  min-w-80px">Garage</th>


								</tr>

								<!--end::Table row-->
							</thead>
							<!--end::Table head-->
							<!--begin::Table body-->
							<tbody class="fw-bolder text-gray-600">
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="symbol symbol-70px me-3 ">
												<img src="{{asset('static/media\Fleet\images-1.jpg')}}" class="" alt="" />
												<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Suzuki</a>


											</div>
										</div>
									</td>

									<!--begin::Product ID-->
									<td class="text-end">Ahmed</td>
									<!--end::Product ID-->

									<td class="text-end">02 Apr, 2022</td>
									<!--begin::Date added-->
									<td class="text-end pe-2">OIL & Filter</td>
									<!--end::Date added-->

									<!--begin::Price-->

									<!--end::Price-->
									<!--begin::Status-->
									<td class="text-end">
										$1,230
									</td>
									<!--end::Status-->
									<!--begin::Qty-->
									<td class="text-end pe-1">GH 11</td>

									<!--end::Qty-->
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="symbol symbol-70px me-3 ">
												<img src="{{asset('static/media\Fleet\images-2.jpg')}}" class="" alt="" />
												<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Suzuki</a>


											</div>
										</div>
									</td>

									<!--begin::Product ID-->
									<td class="text-end">Ahmed</td>
									<!--end::Product ID-->

									<td class="text-end">02 Apr, 2022</td>
									<!--begin::Date added-->
									<td class="text-end pe-2">OIL & Filter</td>
									<!--end::Date added-->

									<!--begin::Price-->

									<!--end::Price-->
									<!--begin::Status-->
									<td class="text-end">
										$1,230
									</td>
									<!--end::Status-->
									<!--begin::Qty-->
									<td class="text-end pe-1">GH 11</td>

									<!--end::Qty-->
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="symbol symbol-70px me-3 ">
												<img src="{{asset('static/media\Fleet\images-4.jpg')}}" class="" alt="" />
												<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Suzuki</a>


											</div>
										</div>
									</td>

									<!--begin::Product ID-->
									<td class="text-end">Ahmed</td>
									<!--end::Product ID-->

									<td class="text-end">02 Apr, 2022</td>
									<!--begin::Date added-->
									<td class="text-end pe-2">OIL & Filter</td>
									<!--end::Date added-->

									<!--begin::Price-->

									<!--end::Price-->
									<!--begin::Status-->
									<td class="text-end">
										$1,230
									</td>
									<!--end::Status-->
									<!--begin::Qty-->
									<td class="text-end pe-1">GH 11</td>

									<!--end::Qty-->
								</tr>

								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="symbol symbol-70px me-3 ">
												<img src="{{asset('static/media\Fleet\images-4.jpg')}}" class="" alt="" />
												<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Suzuki</a>


											</div>
										</div>
									</td>

									<!--begin::Product ID-->
									<td class="text-end">Ahmed</td>
									<!--end::Product ID-->

									<td class="text-end">02 Apr, 2022</td>
									<!--begin::Date added-->
									<td class="text-end pe-2">OIL & Filter</td>
									<!--end::Date added-->

									<!--begin::Price-->

									<!--end::Price-->
									<!--begin::Status-->
									<td class="text-end">
										$1,230
									</td>
									<!--end::Status-->
									<!--begin::Qty-->
									<td class="text-end pe-1">GH 11</td>

									<!--end::Qty-->
								</tr>
								<tr>
									<td>
										<div class="d-flex align-items-center">
											<div class="symbol symbol-70px me-3 ">
												<img src="{{asset('static/media\Fleet\image-6.png')}}" class="" alt="" />
												<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Suzuki</a>


											</div>
										</div>
									</td>

									<!--begin::Product ID-->
									<td class="text-end">Ahmed</td>
									<!--end::Product ID-->

									<td class="text-end">02 Apr, 2022</td>
									<!--begin::Date added-->
									<td class="text-end pe-2">OIL & Filter</td>
									<!--end::Date added-->

									<!--begin::Price-->

									<!--end::Price-->
									<!--begin::Status-->
									<td class="text-end">
										$1,230
									</td>
									<!--end::Status-->
									<!--begin::Qty-->
									<td class="text-end pe-1">GH 11</td>

									<!--end::Qty-->
								</tr>


							</tbody>
							<!--end::Table body-->
						</table>
						<!--end::Table-->
					</div>
					<!--end: Card Body-->
				</div>
				<!--end::Tables Widget 9-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
		<!--begin::Row-->

		<!--end::Row-->


		<!--begin::Modals-->


		<!--end::Modals-->
	</div>
	<!--end::Container-->
</div>
<!--begin::Modal - New Target-->
<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content rounded">
			<!--begin::Modal header-->
			<div class="modal-header pb-0 border-0 justify-content-end">
				<!--begin::Close-->
				<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
					<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
					<span class="svg-icon svg-icon-1">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
							<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
							<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
						</svg>
					</span>
					<!--end::Svg Icon-->
				</div>
				<!--end::Close-->
			</div>
			<!--begin::Modal header-->
			<!--begin::Modal body-->
			<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
				<!--begin:Form-->
				<form id="kt_modal_new_target_form "class="form" method="post" enctype="multipart/form-data" action="https://phplaravel-890314-3321246.cloudwaysapps.com/re/properties/add" >
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3">Add Mentainence Detail</h1>
						<!--end::Title-->

					</div>
					<!--end::Heading-->
					<!--begin::Input group-->

					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-bold mb-2"> Vehicle </label>
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Vhicle" name="target_assign">
								<option value="">Select Type...</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>

							</select>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-lg-6 fv-row">
							<!--begin::Input-->

							<label class="required form-label">Employee</label>
							<select class="form-select form-select-solid" data-control="select2" data-placeholder="Select an option">
								<option></option>
								<option value="1">Option 1</option>
								<option value="2">Option 2</option>
							</select>
							<!--end::Input-->

						</div>
					</div>
					<div class="row g-9 mb-8">
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-bold mb-2"> Mentainence Type </label>
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Mentainenece Type " name="target_assign">
								<option value="">Select Type...</option>
								<option value="1">Air filter</option>
								<option value="2">Oil And Filter</option>
								<option value="3">Rotate tires</option>
								<option value="4">WAX Vehicles </option>

							</select>
						</div>


						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-bold mb-2">Mentainence Date</label>
							<!--begin::Input-->
							<div class="position-relative d-flex align-items-center">

								<!--begin::Datepicker-->
								<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" type="date" />
								<!--end::Datepicker-->
							</div>
							<!--end::Input-->
						</div>

					</div>

					<!--end::Input group-->
					<div class="d-flex flex-column mb-8 fv-row">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Description </span>
						</label>
						<!--end::Label-->
						<input type="text" class="form-control form-control-solid" placeholder="Enter Description " name="target_title" />
					</div>
					<div class="row g-9 mb-8">
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-bold mb-2">Cost</label>
							<!--begin::Input-->

							<!--begin::Datepicker-->
							<input class="form-control form-control-solid " placeholder="Enter Cost" name="due_date" type="numbers" />
							<!--end::Datepicker-->

							<!--end::Input-->
						</div>




						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-bold mb-2">Garage</label>
							<!--begin::Input-->
							<div class="position-relative d-flex align-items-center">

								<!--begin::Datepicker-->
								<input class="form-control form-control-solid " placeholder="Enter  Grage" name="due_date" type="text" />
								<!--end::Datepicker-->
							</div>
							<!--end::Input-->
						</div>

					</div>




					<!--begin::Input group-->
					<div class="d-flex flex-column mb-8">
						<label class="fs-6 fw-bold mb-2">Notes</label>
						<textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Enter Notes"></textarea>
					</div>
					<!--end::Input group-->


					<!--begin::Actions-->
					<div class="text-center">
						<button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Cancel</button>
						<button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
							<span class="indicator-label">Submit</span>
							<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
					</div>
					<!--end::Actions-->
				</form>
				<!--end:Form-->
			</div>
			<!--end::Modal body-->
		</div>
		<!--end::Modal content-->
	</div>
	<!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->

<!--end::Post-->
@endsection

@section('extra_scripts')
/

@endsection