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
		<h1 class="fs-lg-2x  pb-7 px-2">Fleet Management</h1>
		<div class="row gy-5 g-xl-8">
			<!--begin::Col-->
			<div class="col-xl-4 mb-xl-10">
				<!--begin::Lists Widget 19-->
				<div class="card card-flush h-xl-100">
					<!--begin::Heading-->
					<div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px" style="background-image:url({{asset ('static/media/svg/shapes/top-green.png') }} ); ">

						<!--begin::Title-->
						<h3 class="card-title align-items-start flex-column text-white pt-15">
							<span class="fw-bolder fs-2x mb-3">Vehicles Overview</span>
							<div class="fs-4 text-white">
								<span class="opacity-75">You have</span>
								<span class="position-relative d-inline-block">
									<a href="../../demo1/dist/pages/user-profile/projects.html" class="link-white opacity-75-hover fw-bolder d-block mb-1">4 tasks</a>
									<!--begin::Separator-->
									<span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-white border-bottom w-100"></span>
									<!--end::Separator-->
								</span>
								<span class="opacity-75">to comlete</span>
							</div>
						</h3>
						<!--end::Title-->
						<!--begin::Toolbar-->
						<div class="card-toolbar pt-5">
							<!--begin::Menu-->
							<button class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
								<!--begin::Svg Icon | path: icons/duotune/general/gen052.svg-->
								<span class="svg-icon svg-icon-4">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect x="10" y="10" width="4" height="4" rx="2" fill="currentColor" />
										<rect x="17" y="10" width="4" height="4" rx="2" fill="currentColor" />
										<rect x="3" y="10" width="4" height="4" rx="2" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</button>
							<!--begin::Menu 2-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<div class="menu-content fs-6 text-dark fw-bolder px-3 py-4">Quick Actions</div>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator mb-3 opacity-75"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3">New Ticket</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3">New Customer</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
									<!--begin::Menu item-->
									<a href="#" class="menu-link px-3">
										<span class="menu-title">New Group</span>
										<span class="menu-arrow"></span>
									</a>
									<!--end::Menu item-->
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Admin Group</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Staff Group</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="#" class="menu-link px-3">Member Group</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<a href="#" class="menu-link px-3">New Contact</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator mt-3 opacity-75"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<div class="menu-content px-3 py-3">
										<a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
									</div>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu 2-->
							<!--end::Menu-->
						</div>
						<!--end::Toolbar-->
					</div>
					<!--end::Heading-->
					<!--begin::Body-->
					<div class="card-body mt-n20">
						<!--begin::Stats-->
						<div class="mt-n20 position-relative">
							<!--begin::Row-->
							<div class="row g-3 g-lg-6">
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Items-->
									<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-30px me-5 mb-8">
											<span class="symbol-label">
												<!--begin::Svg Icon | path: icons/duotune/medicine/med005.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M17.9061 13H11.2061C11.2061 12.4 10.8061 12 10.2061 12C9.60605 12 9.20605 12.4 9.20605 13H6.50606L9.20605 8.40002V4C8.60605 4 8.20605 3.6 8.20605 3C8.20605 2.4 8.60605 2 9.20605 2H15.2061C15.8061 2 16.2061 2.4 16.2061 3C16.2061 3.6 15.8061 4 15.2061 4V8.40002L17.9061 13ZM13.2061 9C12.6061 9 12.2061 9.4 12.2061 10C12.2061 10.6 12.6061 11 13.2061 11C13.8061 11 14.2061 10.6 14.2061 10C14.2061 9.4 13.8061 9 13.2061 9Z" fill="currentColor" />
														<path d="M18.9061 22H5.40605C3.60605 22 2.40606 20 3.30606 18.4L6.40605 13H9.10605C9.10605 13.6 9.50605 14 10.106 14C10.706 14 11.106 13.6 11.106 13H17.8061L20.9061 18.4C21.9061 20 20.8061 22 18.9061 22ZM14.2061 15C13.1061 15 12.2061 15.9 12.2061 17C12.2061 18.1 13.1061 19 14.2061 19C15.3061 19 16.2061 18.1 16.2061 17C16.2061 15.9 15.3061 15 14.2061 15Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Stats-->
										<div class="m-0">
											<!--begin::Number-->
											<span class="text-gray-700 fw-boldest d-block fs-2qx lh-1 ls-n1 mb-1">37</span>
											<!--end::Number-->
											<!--begin::Desc-->
											<span class="text-gray-500 fw-bold fs-6">Vehicles</span>
											<!--end::Desc-->
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Items-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Items-->
									<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-30px me-5 mb-8">
											<span class="symbol-label">
												<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor" />
														<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Stats-->
										<div class="m-0">
											<!--begin::Number-->
											<span class="text-gray-700 fw-boldest d-block fs-2qx lh-1 ls-n1 mb-1">6</span>
											<!--end::Number-->
											<!--begin::Desc-->
											<span class="text-gray-500 fw-bold fs-6">On Routes</span>
											<!--end::Desc-->
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Items-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Items-->
									<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-30px me-5 mb-8">
											<span class="symbol-label">
												<!--begin::Svg Icon | path: icons/duotune/general/gen020.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M14 18V16H10V18L9 20H15L14 18Z" fill="currentColor" />
														<path opacity="0.3" d="M20 4H17V3C17 2.4 16.6 2 16 2H8C7.4 2 7 2.4 7 3V4H4C3.4 4 3 4.4 3 5V9C3 11.2 4.8 13 7 13C8.2 14.2 8.8 14.8 10 16H14C15.2 14.8 15.8 14.2 17 13C19.2 13 21 11.2 21 9V5C21 4.4 20.6 4 20 4ZM5 9V6H7V11C5.9 11 5 10.1 5 9ZM19 9C19 10.1 18.1 11 17 11V6H19V9ZM17 21V22H7V21C7 20.4 7.4 20 8 20H16C16.6 20 17 20.4 17 21ZM10 9C9.4 9 9 8.6 9 8V5C9 4.4 9.4 4 10 4C10.6 4 11 4.4 11 5V8C11 8.6 10.6 9 10 9ZM10 13C9.4 13 9 12.6 9 12V11C9 10.4 9.4 10 10 10C10.6 10 11 10.4 11 11V12C11 12.6 10.6 13 10 13Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Stats-->
										<div class="m-0">
											<!--begin::Number-->
											<span class="text-gray-700 fw-boldest d-block fs-2qx lh-1 ls-n1 mb-1">185
												lit</span>
											<!--end::Number-->
											<!--begin::Desc-->
											<span class="text-gray-500 fw-bold fs-6">Monthly Fuel</span>
											<!--end::Desc-->
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Items-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-6">
									<!--begin::Items-->
									<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-30px me-5 mb-8">
											<span class="symbol-label">
												<!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
												<span class="svg-icon svg-icon-1 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="currentColor" />
														<path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Stats-->
										<div class="m-0">
											<!--begin::Number-->
											<span class="text-gray-700 fw-boldest d-block fs-2qx lh-1 ls-n1 mb-1">155k</span>
											<!--end::Number-->
											<!--begin::Desc-->
											<span class="text-gray-500 fw-bold fs-6">pending Lease</span>
											<!--end::Desc-->
										</div>
										<!--end::Stats-->
									</div>
									<!--end::Items-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Stats-->
					</div>
					<!--end::Body-->
				</div>
				<!--end::Lists Widget 19-->
			</div>
			<!--end::Col-->
			<!--begin::Col-->
			<div class="col-xl-8">
				<!--begin::List Widget 5-->
				<div class="card card-stretch overflow-hidden">
					<!--begin::Header-->
					<div class="card-header py-5">
						<!--begin::Title-->
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder text-dark">Vehicles Per Slot</span>

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
					</div>
					<!--end::Header-->
					<!--begin::Card body-->
					<div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
						<!--begin::Info-->
						<div class="px-9 mb-5">
							<!--begin::Statistics-->
							<div class="d-flex align-items-center mb-2">
								<!--begin::Currency-->
								<!--end::Currency-->
								<!--begin::Value-->
								<span class="fs-2hx fw-bolder text-gray-800 me-2 lh-1 ls-n2">Currently Active: 15</span>
								<!--end::Value-->

							</div>
							<!--end::Statistics-->
							<!--begin::Description-->
							<span class="fs-6 fw-bold text-gray-400">Transaction In Aprail</span>
							<!--end::Description-->
						</div>
						<!--end::Info-->
						<!--begin::Chart-->
						<div id="kt_charts_widget_4" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
						<!--end::Chart-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end: List Widget 5-->
			</div>
			<!--end::Col-->
		</div>
		<!--end::Row-->
		<!--begin::Row-->
		<div class="row gy-5 g-xl-8">

			<!--begin::Col-->
			<div class="col-xl-12">
				<!--begin::Tables Widget 9-->
				<div class="card card-flush h-xl-100">
					<!--begin::Header-->

					<div class="card-header pt-7 mb-3">
						<!--begin::Title-->
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder text-gray-800">Deliveries by Category</span>
							<span class="text-gray-400 mt-1 fw-bold fs-6">Total 424,567 deliveries</span>
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
										<th class="p-0 pb-3 min-w-175px text-start">Fleet Name</th>
										<th class="p-0 pb-3 min-w-100px text-end">Registration Number</th>
										<th class="p-0 pb-3 min-w-100px text-end">Milage</th>
										<th class="p-0 pb-3 min-w-125px text-end">Occupied By</th>
										<th class="p-0 pb-3 min-w-100px text-end">Temperature</th>
										<th class="p-0 pb-3 w-80px text-end">VIEW</th>
									</tr>
								</thead>
								<!--end::Table head-->
								<!--begin::Table body-->
								<tbody>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3">
													<img src="{{asset('static/media\Fleet\images-1.jpg')}}" class="" alt="" />


												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ocian
														X7</a>
													<span class="text-gray-400 fw-bold d-block fs-7">8987</span>
												</div>
											</div>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">KSDH2894</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">14 KM/LIT</span>
										</td>
										<td class="pe-0">
											<div class="d-flex align-items-center justify-content-end">
												<div class="symbol symbol-30px me-3">
													<img src="{{asset('static/media/avatars\300-9.jpg')}}" class="" alt="" />

												</div>
												<span class="text-gray-600 fw-bolder d-block fs-6">Junaid</span>
											</div>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">8 C</span>
										</td>
										<td class="text-end">
											<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
												<span class="svg-icon svg-icon-5 svg-icon-gray-700">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
														<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</a>
										</td>
									</tr>
									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3">
													<img src="{{asset('static/media\Fleet\images-2.jpg')}}" class="" alt="" />
												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Suzuki</a>
													<span class="text-gray-400 fw-bold d-block fs-7">7887</span>
												</div>
											</div>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">UWY3839</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">12 KM/LIT</span>
										</td>
										<td class="pe-0">
											<div class="d-flex align-items-center justify-content-end">
												<div class="symbol symbol-30px me-3">
													<img src="{{asset('static/media/avatars\300-14.jpg')}}" class="" alt="" />
												</div>
												<span class="text-gray-600 fw-bolder d-block fs-6">Ahmed</span>
											</div>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">8 C</span>
										</td>
										<td class="text-end">
											<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
												<span class="svg-icon svg-icon-5 svg-icon-gray-700">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
														<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</a>
										</td>
									</tr>



									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3">
													<img src="{{asset('static/media\Fleet\images-4.jpg')}}" class="" alt="" />
												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Toyota
														Corola</a>
													<span class="text-gray-400 fw-bold d-block fs-7">7564</span>
												</div>
											</div>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">KLMS4783</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">14 KM/LIT</span>
										</td>
										<td class="pe-0">
											<div class="d-flex align-items-center justify-content-end">
												<div class="symbol symbol-30px me-3">
													<img src="{{asset('static/media/avatars\300-27.jpg')}}" class="" alt="" />
												</div>
												<span class="text-gray-600 fw-bolder d-block fs-6">Waqas</span>
											</div>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">13 C</span>
										</td>
										<td class="text-end">
											<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
												<span class="svg-icon svg-icon-5 svg-icon-gray-700">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
														<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</a>
										</td>
									</tr>

									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3">
													<img src="{{asset('static/media\Fleet\images-5.jpg')}}" class="" alt="" />
												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Honda
														Civic</a>
													<span class="text-gray-400 fw-bold d-block fs-7">9855</span>
												</div>
											</div>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">HDG1234</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">12 KM/LIT</span>
										</td>
										<td class="pe-0">
											<div class="d-flex align-items-center justify-content-end">
												<div class="symbol symbol-30px me-3">
													<img src="{{asset('static/media/avatars\300-21.jpg')}}" class="" alt="" />
												</div>
												<span class="text-gray-600 fw-bolder d-block fs-6">zeshan</span>
											</div>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">15 C</span>
										</td>
										<td class="text-end">
											<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
												<span class="svg-icon svg-icon-5 svg-icon-gray-700">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
														<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</a>
										</td>
									</tr>

									<tr>
										<td>
											<div class="d-flex align-items-center">
												<div class="symbol symbol-50px me-3">
													<img src="{{asset('static/media\Fleet\img-2.jpg')}}" class="" alt="" />
												</div>
												<div class="d-flex justify-content-start flex-column">
													<a href="#" class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Nisan
														Skyline</a>
													<span class="text-gray-400 fw-bold d-block fs-7">1245</span>
												</div>
											</div>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">AGX8765</span>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">15 KM/LIT</span>
										</td>
										<td class="pe-0">
											<div class="d-flex align-items-center justify-content-end">
												<div class="symbol symbol-30px me-3">
													<img src="{{asset('static/media\avatars\300-25.jpg')}}" class="" alt="" />
												</div>
												<span class="text-gray-600 fw-bolder d-block fs-6">Ahmed</span>
											</div>
										</td>
										<td class="text-end pe-0">
											<span class="text-gray-600 fw-bolder fs-6">17 C</span>
										</td>
										<td class="text-end">
											<a href="#" class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
												<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
												<span class="svg-icon svg-icon-5 svg-icon-gray-700">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
														<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</a>
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