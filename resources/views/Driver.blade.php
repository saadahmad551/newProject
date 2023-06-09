@extends('layouts.master')
@section('title', ' Drivers')

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
				
				<div class="card card-flush ">
					<!--begin::Card header-->
					<div class="card-header pt-5 mb-3">
						<!--begin::Title-->
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder text-gray-800 fs-lg-2x">Drivers</span>

						</h3>
						<!--end::Title-->
						<!--begin::Toolbar-->



						<div class="card-toolbar ">
							<div class="position-relative my-1  me-7">
								<div class="position-relative my-1  me-7">
									<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
									<span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
											<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<input type="text" id="kt_filter_search" class="form-control w-150px fs-7 ps-12" placeholder="Search" style="width: 200px!important;" />
								</div>
							</div>
							<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
							<a href="#" class="btn btn-primary er fs-6 px-8 py-4" data-bs-toggle="modal" data-bs-target="#KTModalDriver">Add Driver</a>
							<!--end::Daterangepicker-->

						</div>

					</div>

					<div class="card-body pt-0">
						<!--begin::Table container-->
						<div class="table-responsive">
							<!--begin::Table-->
							<table id="kt_profile_overview_table" class="table table-row-bordered table-row-dashed gy-4 align-middle fw-bolder">
								<!--begin::Head-->
								<thead>
									<!--begin::Table row-->
									<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
										<th class="w-25px">
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="1" data-kt-check="true" data-kt-check-target=".widget-9-check" />
											</div>
										</th>
										<th class="min-w-100px text-center">Driver </th>
										<th class="text-center min-w-150px ">Licence No</th>
										<th class="text-center min-w-150px">Licence Document</th>
										<th class="text-center min-w-150px ">Licence Expiry date</th>
										<th class="text-end min-w-100px">Employee</th>
										<th class="text-center min-w-100px">Status</th>


									</tr>
									<!--end::Table row-->
								</thead>
								<!--end::Head-->
								<!--begin::Body-->
								<tbody class="fw-bolder text-gray-600">


									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-1.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>


										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">Ali Ahmed</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>

									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-11.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>


										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">Junaid</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-13.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>


										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">hamza</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-10.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>

										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">Ali Ahmed</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-13.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>


										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">Ali Ahmed</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-1.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>


										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">Ali Ahmed</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-1.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>


										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">Ali Ahmed</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-1.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>


										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">Ali Ahmed</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-1.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>


										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">Ali Ahmed</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-1.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>


										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">Ali Ahmed</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-1.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>


										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">Ali Ahmed</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-1.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>


										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">Ali Ahmed</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-1.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>


										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">Ali Ahmed</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-1.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>


										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">Ali Ahmed</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-1.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>


										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">Ali Ahmed</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-1.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>


										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">Ali Ahmed</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>
									<tr>
										<td>
											<div class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input widget-9-check" type="checkbox" value="1" />
											</div>
										</td>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3 ">
													<img src="{{asset('static/media/avatars/300-1.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="Driver_Detail" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ahmed</a>
													<span class="text-gray-400 fw-bold d-block fs-7">Ahmed@gmail.com</span>
												</div>
											</div>
										</td>


										<!--begin::Product ID-->
										<td class="text-center">#AGXG903297</td>
										<!--end::Product ID-->
										<!--begin::Date added-->
										<td class="text-center">KASJKSKLM</td>
										<td class="text-center">02 Apr, 2022</td>
										<!--begin::Price-->
										<td class="text-end">Ali Ahmed</td>
										<!--end::Price-->
										<!--begin::Status-->
										<td class="text-end">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Available</span>
										</td>
										<!--end::Status-->
										<!--begin::Qty-->


										<!--end::Qty-->
									</tr>

								</tbody>
								<!--end::Body-->
							</table>
							<!--end::Table-->
						</div>
						<!--end::Table container-->
					</div>
					<!--end::Card body-->
				</div>
			</div>
			<!--end::Col-->
		</div>

	</div>
	<!--end::Container-->
</div>


<div class="modal fade" id="KTModalDriver" tabindex="-1" aria-hidden="true">
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
			<div class="my-1 text-center">
				<!--begin::Title-->
				<h1 class="mb-3">Add Driver</h1>
				<!--end::Title-->

			</div>
			<!--end::Heading-->

			<!--begin::Modal body-->
			<div class="modal-body  pt-0 ">
				<!--begin:Form-->
				<form class="form" action="#" id="KTModalDriver_form">
					<!--begin::Modal header-->

					<!--end::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body py-10 px-lg-13">
						<!--begin::Scroll-->
						<div class="scroll-y me-n7 pe-7" id="KTModalDriver_scroll" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#KTModalDriver_header" data-kt-scroll-wrappers="#KTModalDriver_scroll" data-kt-scroll-offset="300px">
							<!--begin::Notice-->
							<!--begin::Notice-->

							<!--end::Notice-->
							<!--end::Notice-->
							<!--begin::Input group-->
							<div class="row g-9 mb-5">
								<!--begin::Col-->
								<div class="col-md-12 fv-row">
									<div class="d-flex flex-column mb-5 fv-row">
										<!--begin::Label-->
										<label class="d-flex align-items-center fs-5 fw-bold mb-2">
											<span class="required">Employee</span>
										</label>
										<!--end::Label-->
										<!--begin::Select-->
										<div class="border rounded">
											<select id="employee" class="form-select form-select-solid" name="KTModalDriver_Employee1" data-placeholder="Select Employee">
												<option></option>
												<option value="0" data-kt-rich-content-subcontent="asad@gmail.com" data-kt-rich-content-icon="{{ asset('static/media/avatars/300-6.jpg') }}">
													Asad</option>
												<option value="1" data-kt-rich-content-subcontent="ahmed@gmail.com" data-kt-rich-content-icon="{{ asset('static/media/avatars/300-7.jpg') }}">
													Ahmed</option>
											</select>

										</div>
										<!--end::Select-->
									</div>
								</div>
								<!--end::Col-->
								<!--begin::Col-->





								<!--end::Col-->
							</div>
							<!--begin::Input group-->
							<div class="d-flex flex-column mb-8 fv-row">
								<!--begin::Label-->
								<label class="d-flex align-items-center fs-6 fw-bold mb-2">
									<span class="required">Areas</span>
								</label>
								<!--end::Label-->
								<input class="form-control form-control-solid" value="" name="KTModalDriver_target_tags" id="kt_tagify_users" />
								<div id="selectedTags"></div>
								<div id="selectedTagsDiv">
								</div>
							</div>
							<div class="row g-9 mb-10">
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-bold mb-2">
										<span class="required">Licence Number</span>
									</label>
									<!--end::Label-->
									<input type="text" class="form-control form-control-solid" placeholder="Enter Licence Number" name="KTModalDriver_Licence" />
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-bold mb-2">
										<span class="required">Licence Document</span>
									</label>
									<!--end::Label-->
									<input type="file" class="form-control form-control-solid" placeholder="Enter Licence Document" name="KTModalDriver_Licence_Document" />
								</div>
								<!--end::Col-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="row g-9 mb-10">


								<div class="col-md-6 fv-row">
									<label class="required fs-6 fw-bold mb-2">Licence Expiry Date</label>
									<!--begin::Input-->
									<div class="position-relative d-flex align-items-center">

										<!--begin::Datepicker-->
										<input class="form-control form-control-solid ps-12" placeholder="Select a date" name="KTModalDriver_licence_Date" type="date" />
										<!--end::Datepicker-->
									</div>
									<!--end::Input-->
								</div>
								<div class="col-md-6 fv-row">
									<!--begin::Label-->
									<label class="d-flex align-items-center fs-6 fw-bold mb-2">
										<span class="required">Experience</span>
									</label>
									<!--end::Label-->
									<input type="text" class="form-control form-control-solid" placeholder="Enter Experience " name="KTModalDriver_Experience" />
								</div>

							</div>
							<div class="d-flex flex-stack mb-3">
								<!--begin::Label-->
								<div class="me-5">

									<span>

										<label class="form-check form-switch form-check-custom form-check-solid">
											<input class="form-check-input mx-4" type="checkbox" value="1" checked="checked" /><span class="fs-6 fw-bold">Is Available</span>

										</label>




								</div>
								<!--end::Label-->
								<!--begin::Switch-->

								<!--end::Switch-->
							</div>


						</div>
						<!--end::Scroll-->
					</div>
					<!--end::Modal body-->
					<!--begin::Modal footer-->
					<div class="modal-footer flex-center" style="padding: 1.5rem !important;">
						<!--begin::Button-->
						<button type="reset" id="KTModalDriver_cancel" class="btn btn-light me-3">Discard</button>
						<!--end::Button-->
						<!--begin::Button-->
						<button type="submit" id="KTModalDriver_submit" class="btn btn-primary">
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




<!--end::Post-->
@endsection

@section('extra_scripts')
<script src="{{ asset('static/js/custom/apps/projects/project/project1.js') }}"></script>


<script>
	const optionFormat = (item) => {
		if (!item.id) {
			return item.text;
		}

		var span = document.createElement('span');
		var template = '';

		template += '<div class="d-flex align-items-center">';
		template += '<img src="' + item.element.getAttribute('data-kt-rich-content-icon') +
			'" class="rounded-circle h-40px me-3" alt="' + item.text + '"/>';
		template += '<div class="d-flex flex-column">'
		template += '<span class="fs-4 fw-bolder lh-1">' + item.text + '</span>';
		template += '<span class="text-muted fs-5">' + item.element.getAttribute('data-kt-rich-content-subcontent') +
			'</span>';
		template += '</div>';
		template += '</div>';

		span.innerHTML = template;

		return $(span);
	}

	// Init Select2 --- more info: https://select2.org/
	$('#employee').select2({
		placeholder: "Select an option",
		minimumResultsForSearch: Infinity,
		templateSelection: optionFormat,
		templateResult: optionFormat
	});
</script>

<script>
	var inputElm = document.querySelector('#kt_tagify_users');

	const usersList = [{
			value: 1,
			name: 'Emma Smith',
			avatar: 'avatars/300-6.jpg',
			email: 'e.smith@kpmg.com.au'
		},
		{
			value: 2,
			name: 'Max Smith',
			avatar: 'avatars/300-1.jpg',
			email: 'max@kt.com'
		},
		{
			value: 3,
			name: 'Sean Bean',
			avatar: 'avatars/300-5.jpg',
			email: 'sean@dellito.com'
		},
		{
			value: 4,
			name: 'Brian Cox',
			avatar: 'avatars/300-25.jpg',
			email: 'brian@exchange.com'
		},
		{
			value: 5,
			name: 'Francis Mitcham',
			avatar: 'avatars/300-9.jpg',
			email: 'f.mitcham@kpmg.com.au'
		},
		{
			value: 6,
			name: 'Dan Wilson',
			avatar: 'avatars/300-23.jpg',
			email: 'dam@consilting.com'
		},
		{
			value: 7,
			name: 'Ana Crown',
			avatar: 'avatars/300-12.jpg',
			email: 'ana.cf@limtel.com'
		},
		{
			value: 8,
			name: 'John Miller',
			avatar: 'avatars/300-13.jpg',
			email: 'miller@mapple.com'
		}
	];

	function tagTemplate(tagData) {
		return `
        <tag title="${(tagData.title || tagData.email)}"
                contenteditable='false'
                spellcheck='false'
                tabIndex="-1"
                class="${this.settings.classNames.tag} ${tagData.class ? tagData.class : ""}"
                ${this.getAttributes(tagData)}>
            <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
            <div class="d-flex align-items-center">
                <div class='tagify__tag__avatar-wrap ps-0'>
                    <img onerror="this.style.visibility='hidden'" class="rounded-circle w-25px me-2" src="assets/media/${tagData.avatar}">
                </div>
                <span class='tagify__tag-text'>${tagData.name}</span>
            </div>
        </tag>
      `;
	}

	function suggestionItemTemplate(tagData) {
		return `
        <div ${this.getAttributes(tagData)}
            class='tagify__dropdown__item d-flex align-items-center ${tagData.class ? tagData.class : ""}'
            tabindex="0"
            role="option">

            ${tagData.avatar ? `
              <div class='tagify__dropdown__item__avatar-wrap me-2'>
                  <img onerror="this.style.visibility='hidden'"  class="rounded-circle w-50px me-2" src="assets/media/${tagData.avatar}">
              </div>` : ''
            }

            <div class="d-flex flex-column">
                <strong>${tagData.name}</strong>
                <span>${tagData.email}</span>
            </div>
        </div>
      `;
	}

	// initialize Tagify on the above input node reference
	var tagify = new Tagify(inputElm, {
		tagTextProp: 'name',
		enforceWhitelist: true,
		skipInvalid: true,
		dropdown: {
			closeOnSelect: false,
			enabled: 0,
			classname: 'users-list',
			searchKeys: ['name', 'email']
		},
		templates: {
			tag: tagTemplate,
			dropdownItem: suggestionItemTemplate
		},
		whitelist: usersList
	});

	var selectedTagsElm = document.getElementById('selectedTags');

	tagify.on('add', updateSelectedTags);
	tagify.on('remove', updateSelectedTags);

	function updateSelectedTags() {
		var tags = tagify.value.map(function(tag, index) {
			var tagHtml = `<span class="selected-tag">${tag.name}(${index + 1})</span>`;
			return tagHtml;
		});
		selectedTagsElm.innerHTML = tags.join('');
	}
</script>
/

@endsection