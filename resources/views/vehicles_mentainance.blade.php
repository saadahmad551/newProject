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
							<a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#kt_modal_new_address">Add  Vehicle Mentainence</a>
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

<div class="modal fade" id="kt_modal_new_address" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog modal-dialog-centered mw-750px ">
		<!--begin::Modal content-->
		<div class="modal-content rounded  ">
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
			<!--begin::Heading-->
			<div class="my-5 text-center">
						<!--begin::Title-->
						<h1 class="mb-3">Add Vehicle Mentainence</h1>
						<!--end::Title-->

					</div>
					<!--end::Heading-->

			<!--begin::Modal body-->
			<div class="modal-body  pt-0 ">
				<!--begin:Form-->
				<form class="form" action="#" id="kt_modal_new_address_form">
					<!--begin::Modal header-->

					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body py-10 px-lg-13">
						<!--begin::Scroll-->
						<div class="scroll-y me-n7 pe-7" id="kt_modal_new_address_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_new_address_header" data-kt-scroll-wrappers="#kt_modal_new_address_scroll" data-kt-scroll-offset="300px">
							<!--begin::Notice-->
							<!--begin::Notice-->

							<!--end::Notice-->
							<!--end::Notice-->
							<!--begin::Input group-->
							<div class="row g-9 mb-8">
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<div class="d-flex flex-column mb-5 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-bold mb-2">
											<span class="required">Vehicle</span>
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"></i>
										</label>
										<!--end::Label-->
										<!--begin::Select-->
										<select  data-control="select2"  data-placeholder=" Select Vehicle" class="form-select form-select-solid"   data-control="select2" data-dropdown-parent="#kt_modal_new_address" name="Vehicle">
											<option value="">Select a Vehicle...</option>
											<option value="AF">Honda </option>
											<option value="AF">TOyota</option>

										</select>
										<!--end::Select-->
									</div>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<div class="d-flex flex-column mb-5 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-bold mb-2">
											<span class="required">Employee</span>
										</label>
										<!--end::Label-->
										<!--begin::Select-->
										<select data-placeholder="Select Employee" class="form-select form-select-solid"  name="Employee" data-control="select2" data-dropdown-parent="#kt_modal_new_address">
											<option value="">Select Employee...</option>
											<option value="AF">Sam </option>
											<option value="AF">Tom Cruz</option>

										</select>
										<!--end::Select-->
									</div>
								</div>

								<!--end::Col-->
							</div>

							<div class="row g-9 mb-8">
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<div class="d-flex flex-column mb-5 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-bold mb-2">
											<span class="required">Mentainence type</span>
										</label>
										<!--end::Label-->
										<!--begin::Select-->
										<select   name="Mentainence" data-control="select2" data-dropdown-parent="#kt_modal_new_address"data-placeholder="Select a Mentainence Type" class="form-select form-select-solid">
											<option value="">Select a Fuel Type...</option>
											<option value="AF">Oil And Filter</option>
											<option value="AF">Tyres check </option>
											<option value="AF">Break maintenance.</option>
											<option value="AF">Operation Maintenance.</option>

										</select>
										<!--end::Select-->
									</div>
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-bold mb-2">Mentainence Date</label>
									<!--begin::Input-->
									<div class="position-relative d-flex align-items-center">

										<!--begin::Datepicker-->
										<input class="form-control form-control-solid ps-12" placeholder="Select a Mentainence" name="mDate" type="date" />
										<!--end::Datepicker-->
									</div>
									<!--end::Input-->
								</div>

								

								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="row g-9 mb-8">
								<div class="col-md-6 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-bold mb-2">
										<span class="required">Mentainence Cost</span>
									</label>
									<!--end::Label-->
									<input type="number" class="form-control form-control-solid" placeholder="Enter Mentainence Cast" name="MentainenceCast" />
								</div>

								<div class="col-md-6 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-bold mb-2">
										<span class="required">Garage</span>
									</label>
									<!--end::Label-->
									<input type="text" class="form-control form-control-solid" placeholder="Enter Garage" name="Garage"  />
								</div>

								

							</div>
							<!--end::Input group-->
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">Description</span>
								</label>
								<!--end::Label-->
								<input type="text" class="form-control form-control-solid" placeholder="Enter Description" name="Description" />
							</div>
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8">
								<label class="fs-6 fw-bold mb-2">Notes</label>
								<textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Enter Notes"></textarea>
							</div>
							<!--end::Input group-->

						</div>
						<!--end::Scroll-->
					</div>
					<!--end::Modal body-->
					<!--begin::Modal footer-->
					<div class="modal-footer flex-center">
						<!--begin::Button-->
						<button type="reset" id="kt_modal_new_address_cancel" class="btn btn-light me-3">Discard</button>
						<!--end::Button-->
						<!--begin::Button-->
						<button type="submit" id="kt_modal_new_address_submit" class="btn btn-primary">
							<span class="indicator-label">Submit</span>
							<span class="indicator-progress">Please wait...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
						</button>
						<!--end::Button-->
					</div>
					<!--end::Modal footer-->
				</form>
				<!--end:Form-->
			</div>
			<!--end::Modal body-->
		</div>
	</div>
</div>

<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
	<!--begin::Modal dialog-->
	<div class="modal-dialog mw-650px">
		<!--begin::Modal content-->
		<div class="modal-content">
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
			<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
				<!--begin::Heading-->
				<div class="text-center mb-13">
					<!--begin::Title-->
					<h1 class="mb-3">Invite a Friend</h1>
					<!--end::Title-->
					<!--begin::Description-->
					<div class="text-muted fw-bold fs-5">If you need more info, please check out
						<a href="#" class="link-primary fw-bolder">FAQ Page</a>.
					</div>
					<!--end::Description-->
				</div>
				<!--end::Heading-->
				<!--begin::Google Contacts Invite-->
				<div class="btn btn-light-primary fw-bolder w-100 mb-8">
					<img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts
				</div>
				<!--end::Google Contacts Invite-->
				<!--begin::Separator-->
				<div class="separator d-flex flex-center mb-8">
					<span class="text-uppercase bg-body fs-7 fw-bold text-muted px-3">or</span>
				</div>
				<!--end::Separator-->
				<!--begin::Textarea-->
				<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
				<!--end::Textarea-->
				<!--begin::Users-->
				<div class="mb-10">
					<!--begin::Heading-->
					<div class="fs-6 fw-bold mb-2">Your Invitations</div>
					<!--end::Heading-->
					<!--begin::List-->
					<div class="mh-300px scroll-y me-n7 pe-7">
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-6.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Smith</a>
									<div class="fw-bold text-muted">smith@kpmg.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody Macy</a>
									<div class="fw-bold text-muted">melody@altbox.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-1.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max Smith</a>
									<div class="fw-bold text-muted">max@kt.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-5.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean Bean</a>
									<div class="fw-bold text-muted">sean@dellito.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-25.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian Cox</a>
									<div class="fw-bold text-muted">brian@exchange.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-warning text-warning fw-bold">C</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
									<div class="fw-bold text-muted">mik@pex.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-9.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
									<div class="fw-bold text-muted">f.mit@kpmg.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
									<div class="fw-bold text-muted">olivia@corpmail.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil Owen</a>
									<div class="fw-bold text-muted">owen.neil@gmail.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
									<div class="fw-bold text-muted">dam@consilting.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma Bold</a>
									<div class="fw-bold text-muted">emma@intenso.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-12.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana Crown</a>
									<div class="fw-bold text-muted">ana.cf@limtel.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-info text-info fw-bold">A</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert Doe</a>
									<div class="fw-bold text-muted">robert@benko.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-13.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John Miller</a>
									<div class="fw-bold text-muted">miller@mapple.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-success text-success fw-bold">L</span>
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
									<div class="fw-bold text-muted">lucy.m@fentech.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2" selected="selected">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-21.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
									<div class="fw-bold text-muted">ethan@loop.com.au</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1" selected="selected">Guest</option>
									<option value="2">Owner</option>
									<option value="3">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
						<!--begin::User-->
						<div class="d-flex flex-stack py-4">
							<!--begin::Details-->
							<div class="d-flex align-items-center">
								<!--begin::Avatar-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="assets/media/avatars/300-23.jpg" />
								</div>
								<!--end::Avatar-->
								<!--begin::Details-->
								<div class="ms-5">
									<a href="#" class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
									<div class="fw-bold text-muted">dam@consilting.com</div>
								</div>
								<!--end::Details-->
							</div>
							<!--end::Details-->
							<!--begin::Access menu-->
							<div class="ms-2 w-100px">
								<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
									<option value="1">Guest</option>
									<option value="2">Owner</option>
									<option value="3" selected="selected">Can Edit</option>
								</select>
							</div>
							<!--end::Access menu-->
						</div>
						<!--end::User-->
					</div>
					<!--end::List-->
				</div>
				<!--end::Users-->
				<!--begin::Notice-->
				<div class="d-flex flex-stack">
					<!--begin::Label-->
					<div class="me-5 fw-bold">
						<label class="fs-6">Adding Users by Team Members</label>
						<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
					</div>
					<!--end::Label-->
					<!--begin::Switch-->
					<label class="form-check form-switch form-check-custom form-check-solid">
						<input class="form-check-input" type="checkbox" value="1" checked="checked" />
						<span class="form-check-label fw-bold text-muted">Allowed</span>
					</label>
					<!--end::Switch-->
				</div>
				<!--end::Notice-->
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