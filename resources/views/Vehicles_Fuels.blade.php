@extends('layouts.master')
@section('title', ' Vehicle Fuel')

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
							<span class="card-label fw-bolder text-gray-800 fs-lg-2x">Vehicles Fuels</span>

						</h3>
						<!--end::Title-->
						<!--begin::Toolbar-->

						<div class="card-toolbar">
							<!--begin::Filters-->
							<div class="d-flex flex-stack flex-wrap gap-4">
								<!--begin::Destination-->
								<div class="d-flex align-items-center fw-bolder">
									<!--begin::Label-->
									<div class="text-gray-400 fs-7 me-2">Cateogry</div>
									<!--end::Label-->
									<!--begin::Select-->
									<select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bolder py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
										<option></option>
										<option value="Show All" selected="selected">Show All</option>
										<option value="Fuel">Fuel</option>
										<option value="Driver">Driver</option>
									</select>
									<!--end::Select-->
								</div>
								<!--end::Destination-->
								<!--begin::Status-->

								<!--end::Status-->
								<!--begin::Search-->
								<div class="position-relative my-1">
									<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
									<span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
											<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
								</div>
								<!--end::Search-->
							</div>
							<!--begin::Filters-->
						</div>
						<div class="card-toolbar ">
							<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
							<a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_new_target">Add Fuels Detail</a>
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

									<th class="text-end pe-3 min-w-100px">Vehicle ID</th>
									<th class="text-end pe-3 min-w-80px">Fuel Type</th>
									<th class="text-end pe-0 min-w-25px"> Fuel Qty</th>

									<th class="text-end pe-3 min-w-100px"> Fuel Date</th>
									<th class="text-end pe-3 min-w-100px">Fuel Cost</th>
									<th class="text-end pe-3 min-w-100px">Suppliers</th>
									<th class="text-end pe-3 min-w-50px">Notes</th>


								</tr>
								<!--end::Table row-->
							</thead>
							<!--end::Table head-->
							<!--begin::Table body-->
							<tbody class="fw-bolder text-gray-600">
								<tr>

									<!--begin::Product ID-->
									<td class="text-end">#XGY-356</td>
									<!--end::Product ID-->
									<!--begin::Date added-->
									<td class="text-end">Diesel</td>
									<!--end::Date added-->
									<td class="text-end" data-order="58">
										<span class="text-dark fw-bolder">58 LIT</span>
									</td>
									<!--begin::Price-->
									<td class="text-end">02 Apr, 2022</td>
									<!--end::Price-->
									<!--begin::Status-->
									<td class="text-end">
										$1,230
									</td>
									<!--end::Status-->
									<!--begin::Qty-->
									<td class="text-end">PSO LTD</td>
									<td class="text-end">#X68990</td>

									<!--end::Qty-->
								</tr>
								<tr>

									<!--begin::Product ID-->
									<td class="text-end">#XGY-357</td>
									<!--end::Product ID-->
									<!--begin::Date added-->
									<td class="text-end">Petrol</td>
									<!--end::Date added-->
									<td class="text-end" data-order="58">
										<span class="text-dark fw-bolder">58 LIT</span>
									</td>
									<!--begin::Price-->
									<td class="text-end">02 Apr, 2022</td>
									<!--end::Price-->
									<!--begin::Status-->
									<td class="text-end">
										$1,230
									</td>
									<!--end::Status-->
									<!--begin::Qty-->
									<td class="text-end">PSO LTD</td>
									<td class="text-end">#X68990</td>

									<!--end::Qty-->
								</tr>
								<tr>

									<!--begin::Product ID-->
									<td class="text-end">#XGY-356</td>
									<!--end::Product ID-->
									<!--begin::Date added-->
									<td class="text-end">Gas</td>
									<!--end::Date added-->
									<td class="text-end" data-order="58">
										<span class="text-dark fw-bolder">58 LIT</span>
									</td>
									<!--begin::Price-->
									<td class="text-end">02 Apr, 2022</td>
									<!--end::Price-->
									<!--begin::Status-->
									<td class="text-end">
										$1,230
									</td>
									<!--end::Status-->
									<!--begin::Qty-->
									<td class="text-end">PSO LTD</td>
									<td class="text-end">#X68990</td>

									<!--end::Qty-->
								</tr>
								<tr>

									<!--begin::Product ID-->
									<td class="text-end">#XGY-356</td>
									<!--end::Product ID-->
									<!--begin::Date added-->
									<td class="text-end">Diesel</td>
									<!--end::Date added-->
									<td class="text-end" data-order="58">
										<span class="text-dark fw-bolder">58 LIT</span>
									</td>
									<!--begin::Price-->
									<td class="text-end">02 Apr, 2022</td>
									<!--end::Price-->
									<!--begin::Status-->
									<td class="text-end">
										$1,230
									</td>
									<!--end::Status-->
									<!--begin::Qty-->
									<td class="text-end">PSO LTD</td>
									<td class="text-end">#X68990</td>

									<!--end::Qty-->
								</tr>
								<tr>

									<!--begin::Product ID-->
									<td class="text-end">#XGY-356</td>
									<!--end::Product ID-->
									<!--begin::Date added-->
									<td class="text-end">Diesel</td>
									<!--end::Date added-->
									<td class="text-end" data-order="58">
										<span class="text-dark fw-bolder">58 LIT</span>
									</td>
									<!--begin::Price-->
									<td class="text-end">02 Apr, 2022</td>
									<!--end::Price-->
									<!--begin::Status-->
									<td class="text-end">
										$1,230
									</td>
									<!--end::Status-->
									<!--begin::Qty-->
									<td class="text-end">PSO LTD</td>
									<td class="text-end">#X68990</td>

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
				<form id="kt_modal_new_target_form" class="form" action="#">
					<!--begin::Heading-->
					<div class="mb-13 text-center">
						<!--begin::Title-->
						<h1 class="mb-3">Add Vehicle Fuel</h1>
						<!--end::Title-->

					</div>
					<!--end::Heading-->
					<!--begin::Input group-->

					<!--end::Input group-->
					<!--begin::Input group-->
					<div class="row g-9 mb-8">
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-bold mb-2">Fuel Type</label>
							<select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Fuel Type" name="target_assign">
								<option value="">Select Type...</option>
								<option value="1">Petrol</option>
								<option value="2">Diesel</option>
								<option value="3">Gas</option>
								<option value="4">Electric</option>

							</select>
						</div>
						<!--end::Col-->
						<!--begin::Col-->
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">Fuel Quantity</span>
							</label>
							<!--end::Label-->
							<input type="number" class="form-control form-control-solid" placeholder="Enter Fuel Quantity" name="target_title" />
						</div>

						<!--end::Col-->
					</div>
					<div class="row g-9 mb-8">
						<div class="col-md-6 fv-row">
							<!--begin::Label-->
							<label class="d-flex align-items-center fs-6 fw-bold mb-2">
								<span class="required">Fuel Cost</span>
							</label>
							<!--end::Label-->
							<input type="number" class="form-control form-control-solid" placeholder="Enter Fuel Quantity" name="target_title" />
						</div>

						<div class="col-md-6 fv-row">
							<label class="required fs-6 fw-bold mb-2">Fuel Date</label>
							<!--begin::Input-->
							<div class="position-relative d-flex align-items-center">
								
								<!--begin::Datepicker-->
								<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date" type="date"/>
								<!--end::Datepicker-->
							</div>
							<!--end::Input-->
						</div>

					</div>

					<!--end::Input group-->
					<div class="d-flex flex-column mb-8 fv-row">
						<!--begin::Label-->
						<label class="d-flex align-items-center fs-6 fw-bold mb-2">
							<span class="required">Supplier</span>
						</label>
						<!--end::Label-->
						<input type="text" class="form-control form-control-solid" placeholder="Enter Supplier" name="target_title" />
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