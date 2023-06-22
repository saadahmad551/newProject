@extends('layouts.master')
@section('title', ' Fleet Management')

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
							<span class="card-label fw-bolder text-gray-800 fs-lg-2x">All Fleets</span>

						</h3>
						<!--end::Title-->
						<!--begin::Toolbar-->
						<div class="card-toolbar">
							<!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
							<div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left" class="btn btn-sm btn-light d-flex align-items-center px-4">
								<!--begin::Display range-->
								<div class="text-gray-600 fw-bolder">Loading date range...</div>
								<!--end::Display range-->
								<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
								<span class="svg-icon svg-icon-1 ms-2 me-0">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="currentColor" />
										<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="currentColor" />
										<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
							<!--end::Daterangepicker-->
						</div>
						<!--end::Toolbar-->
						<div class="row">
							<!--begin::Nav-->
							<ul class="nav nav-pills nav-pills-custom mb-3 mx-9">
								<!--begin::Item-->
								<li class="nav-item mb-3 me-3 me-lg-6">
									<!--begin::Link-->
									<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active" data-bs-toggle="pill" id="kt_charts_widget_32_tab_1" href="#kt_charts_widget_32_tab_content_1">
										<!--begin::Icon-->
										<div class="nav-icon mb-3">
											<i class="fonticon-truck fs-1 p-0"></i>
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<span class="nav-text text-gray-800 fw-bolder fs-6 lh-1">Van</span>
										<!--end::Title-->
										<!--begin::Bullet-->
										<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
										<!--end::Bullet-->
									</a>
									<!--end::Link-->
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="nav-item mb-3 me-3 me-lg-6">
									<!--begin::Link-->
									<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_32_tab_2" href="#kt_charts_widget_32_tab_content_2">
										<!--begin::Icon-->
										<div class="nav-icon mb-3">
											<i class="fonticon-bicycle fs-1 p-0"></i>
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<span class="nav-text text-gray-800 fw-bolder fs-6 lh-1">Bike</span>
										<!--end::Title-->
										<!--begin::Bullet-->
										<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
										<!--end::Bullet-->
									</a>
									<!--end::Link-->
								</li>
								<!--end::Item-->
								<!--begin::Item-->
								<li class="nav-item mb-3 me-3 me-lg-6">
									<!--begin::Link-->
									<a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2" data-bs-toggle="pill" id="kt_charts_widget_32_tab_3" href="#kt_charts_widget_32_tab_content_3">
										<!--begin::Icon-->
										<div class="nav-icon mb-3">
											<i class="fonticon-drone fs-1 p-0"></i>
										</div>
										<!--end::Icon-->
										<!--begin::Title-->
										<span class="nav-text text-gray-800 fw-bolder fs-6 lh-1">Drone</span>
										<!--end::Title-->
										<!--begin::Bullet-->
										<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
										<!--end::Bullet-->
									</a>
									<!--end::Link-->
								</li>
								<!--end::Item-->
							</ul>
							<!--end::Nav-->
						</div>
					</div>
					<!--end::Header-->
					<div class="card-body">
						<!--begin::Table container-->
						<div class="table-responsive">
							<!--begin::Table-->
							<table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
								<!--begin::Table head-->
								<thead>
									<tr class="fs-7 fw-bolder text-gray-400 border-bottom-0">
										<th class="p-0 pb-3 min-w-100px text-center">Fleet</th>
										<th class="p-0 pb-3 min-w-150px text-end ">Registration Number</th>
										<th class="p-0 pb-3 min-w-150px text-end ">Engine Number</th>
										<th class="p-0 pb-3 min-w-150px text-end">Chassis Number</th>
										<th class="p-0 pb-3 min-w-100px text-end">Make</th>
										<th class="p-0 pb-3 min-w-100px text-end">Model</th>
										<th class="p-0 pb-3 min-w-100px text-end">Type</th>
										<th class="p-0 pb-3 min-w-100px text-end">Milage</th>
										<th class="p-0 pb-3  min-w-100px text-end">Status</th>
										<th class="p-0 pb-3  min-w-100px text-center">Actions</th>
									</tr>
								</thead>
								<!--end::Table head-->
								<!--begin::Table body-->
								<tbody>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-70px me-3 ">
													<img src="{{asset('static/media\Fleet\images-1.jpg')}}" class="" alt="" />
													<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Suzuki</a>


												</div>
											</div>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">KSDH2894</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">1277889090</span>
										</td>

										<td class="text-center pe-0">
											<span class="text-gray-600 fw-bolder fs-6">65i6</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">Suzuki</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">ass563</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">Van</span>
										</td>

										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">12 KM/LIT</span>
										</td>
										<td class="text-end pe-0">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Active</span>
										</td>
										<td class=" ps-3">
											<div class="d-flex justify-content-end flex-shrink-0">
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
															<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
															<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
													<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
															<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
															<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</div>
										</td>

									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-70px me-3 ">
													<img src="{{asset('static/media\Fleet\images-2.jpg')}}" class="" alt="" />
													<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Honda</a>


												</div>
											</div>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">KSDH2894</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">1277889090</span>
										</td>

										<td class="text-center pe-0">
											<span class="text-gray-600 fw-bolder fs-6">65i6</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">Honda</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">ass563</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">Sudan</span>
										</td>

										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">12 KM/LIT</span>
										</td>
										<td class="text-end pe-0">
											<span class="badge py-3 px-4 fs-7 badge-light-danger">Booked</span>
										</td>
										<td class=" ps-3">
											<div class="d-flex justify-content-end flex-shrink-0">
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
															<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
															<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
													<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
															<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
															<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</div>
										</td>

									</tr>

									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-70px me-3 ">
													<img src="{{asset('static/media\Fleet\images-4.jpg')}}" class="" alt="" />
													<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Dyhatsu</a>


												</div>
											</div>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">STDH2894</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">1277889090</span>
										</td>

										<td class="text-center pe-0">
											<span class="text-gray-600 fw-bolder fs-6">65i6</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">Toyota</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">ass563</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">Car</span>
										</td>

										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">15 KM/LIT</span>
										</td>
										<td class="text-end pe-0">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Active</span>
										</td>
										<td class=" ps-3">
											<div class="d-flex justify-content-end flex-shrink-0">
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
															<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
															<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
													<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
															<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
															<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</div>
										</td>

									</tr>

									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-70px me-3 ">
													<img src="{{asset('static/media\Fleet\img-2.jpg')}}" class="" alt="" />
													<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Suzuki</a>


												</div>
											</div>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">KSDH2894</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">1277889090</span>
										</td>

										<td class="text-center pe-0">
											<span class="text-gray-600 fw-bolder fs-6">65i6</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">Suzuki</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">ass563</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">Van</span>
										</td>

										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">12 KM/LIT</span>
										</td>
										<td class="text-end pe-0">
											<span class="badge py-3 px-4 fs-7 badge-light-primary">Active</span>
										</td>
										<td class=" ps-3">
											<div class="d-flex justify-content-end flex-shrink-0">
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
															<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
															<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
													<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
															<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
															<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</div>
										</td>

									</tr>

									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-70px me-3 ">
													<img src="{{asset('static/media\Fleet\images-1.jpg')}}" class="" alt="" />
													<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Suzuki</a>


												</div>
											</div>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">KSDH2894</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">1277889090</span>
										</td>

										<td class="text-center pe-0">
											<span class="text-gray-600 fw-bolder fs-6">65i6</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">Suzuki</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">ass563</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">Van</span>
										</td>

										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">12 KM/LIT</span>
										</td>
										<td class="text-end pe-0">
											<span class="badge py-3 px-4 fs-7 badge-light-success">Mentainence</span>
										</td>
										<td class=" ps-3">
											<div class="d-flex justify-content-end flex-shrink-0">
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="currentColor" />
															<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
													<!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path opacity="0.3" d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z" fill="currentColor" />
															<path d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
												<a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
													<!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
													<span class="svg-icon svg-icon-3">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="currentColor" />
															<path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="currentColor" />
															<path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</div>
										</td>

									</tr>








								</tbody>
								<!--end::Table body-->
							</table>
						</div>
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

<!--end::Post-->
@endsection

@section('extra_scripts')
/

@endsection