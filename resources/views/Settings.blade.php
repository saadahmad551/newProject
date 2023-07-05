@extends('layouts.master')
@section('title', ' Fleet Details')

@section("extra_style")
<style>
	/* Style for the vertical separator */
	.vertical-separator {
		border-left: 1px solid;

		padding-left: 3%;



	}
</style>

@endsection

@section('main_content')


<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
	<!--begin::Container-->
	<div id="kt_content_container" class="container-xxl">

		<h1 class="fs-lg-2x  pb-7 px-2">Settings </h1>
		<div class="col-lg-12 ">
			<!--begin::Engage widget 8-->

			<!--begin::Body-->

			<!--begin::Row-->
			<div class="card card-flush">

				<div class="row">
					<div class="col-lg-3  d-flex flex-row py-10 justify-content-center d-flex   ">

						<!-- Tabs -->
						<ul class="nav nav-tabs nav-pills flex-row border-0 flex-md-column me-5 mb-3 mb-md-0 fs-6 ">
							<!-- Tab 1 -->
							<li class="nav-item me-0 mb-md-3  ">
								<a class="nav-link active btn btn-flex btn-active-light-success" data-bs-toggle="tab" href="#kt_vtab_pane_4" style="border-radius: 5rem;">
									<!-- Tab 1 content -->
									<span class="svg-icon svg-icon-2"><!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen018.svg-->
										<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor" />
												<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor" />
											</svg></span>
										<!--end::Svg Icon--></span>
									<span class="d-flex flex-column align-items-start">
										<span class="fs-4 fw-bolder">Locations</span>
										<span class="fs-7">Description</span>
									</span>
								</a>
							</li>
							<!-- Tab 2 -->
							<li class="nav-item me-0 mb-md-3">
								<a class="nav-link btn btn-flex btn-active-light-info" data-bs-toggle="tab" href="#kt_vtab_pane_5" style="border-radius: 5rem;">
									<!-- Tab 2 content -->
									<span class="svg-icon svg-icon-2"><!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen003.svg-->
										<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M13.0079 2.6L15.7079 7.2L21.0079 8.4C21.9079 8.6 22.3079 9.7 21.7079 10.4L18.1079 14.4L18.6079 19.8C18.7079 20.7 17.7079 21.4 16.9079 21L12.0079 18.8L7.10785 21C6.20785 21.4 5.30786 20.7 5.40786 19.8L5.90786 14.4L2.30785 10.4C1.70785 9.7 2.00786 8.6 3.00786 8.4L8.30785 7.2L11.0079 2.6C11.3079 1.8 12.5079 1.8 13.0079 2.6Z" fill="currentColor" />
											</svg></span>
										<!--end::Svg Icon--></span>
									<span class="d-flex flex-column align-items-center">
										<span class="fs-4 fw-bolder">Locations</span>
										<span class="fs-7">Description</span>
									</span>
								</a>
							</li>
							<!-- Tab 3 -->
							<li class="nav-item  me-0 mb-md-3">
								<a class="nav-link btn btn-flex btn-active-light-danger" data-bs-toggle="tab" href="#kt_vtab_pane_6" style="border-radius: 5rem;">
									<!-- Tab 3 content -->
									<span class="svg-icon svg-icon-2"><!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen017.svg-->
										<span class="svg-icon svg-icon-muted svg-icon-2hx"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path opacity="0.3" d="M5 8.04999L11.8 11.95V19.85L5 15.85V8.04999Z" fill="currentColor" />
												<path d="M20.1 6.65L12.3 2.15C12 1.95 11.6 1.95 11.3 2.15L3.5 6.65C3.2 6.85 3 7.15 3 7.45V16.45C3 16.75 3.2 17.15 3.5 17.25L11.3 21.75C11.5 21.85 11.6 21.85 11.8 21.85C12 21.85 12.1 21.85 12.3 21.75L20.1 17.25C20.4 17.05 20.6 16.75 20.6 16.45V7.45C20.6 7.15 20.4 6.75 20.1 6.65ZM5 15.85V7.95L11.8 4.05L18.6 7.95L11.8 11.95V19.85L5 15.85Z" fill="currentColor" />
											</svg></span>
										<!--end::Svg Icon--></span>
									<span class="d-flex flex-column align-items-start">
										<span class="fs-4 fw-bolder">Link 3</span>
										<span class="fs-7">Description</span>
									</span>
								</a>
							</li>
						</ul>

					</div>




					<div class="col-lg-9 vertical-separator  border-secondary  ">
						<!-- Content -->
						<div class="tab-content">
							<div class="tab-pane fade show active" id="kt_vtab_pane_4">

								<!--begin::Category-->
								<div class=" ">
								<h1 class="fs-5 pt-7 ">Available location </h1>
									<!--begin::Card header-->
									<div class="card-header  border-0 align-items-center py-5">
										
										<div class="">
											<div class="row">
												<div class="col">
													<a href="">
														<div class="badge badge-light-primary fw-bolder px-4 py-3">CSV</div>
													</a>
												</div>
												<div class="col">
													<a href="">
														<div class="badge badge-light-primary fw-bolder px-4 py-3">PDA</div>
													</a>
												</div>
												<div class="col">
													<a href="">
														<div class="badge badge-light-primary fw-bolder px-4 py-3">PQMS</div>
													</a>
												</div>
												<div class="col">
													<a href="">
														<div class="badge badge-light-primary fw-bolder px-4 py-3">Color Visibility</div>
													</a>
												</div>

											</div>


										</div>
										<span id="dataTableLengthInfo"></span>
										<span id="pageLengthInfo"></span>


										<!--begin::Card title-->
										<div class="card-title">


										</div>
										<!--end::Card title-->
										<!--begin::Card toolbar-->




										<!--end::Card toolbar-->
									</div>
									<!--end::Card header-->
									<!--begin::Card body-->
									<div class="card-body  border-0 pt-0">
										<!--begin::Table-->
										<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_category_table">
											<!--begin::Table head-->
											<thead>
												<!--begin::Table row-->
												<tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
													<th class="w-10px pe-2">
														<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
															<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_category_table .form-check-input" value="1" />
														</div>
													</th>
													<th class="min-w-250px">Name</th>
													<th class="min-w-150px">Desc</th>
													<th class="text-end min-w-70px">Actions</th>
												</tr>
												<!--end::Table row-->
											</thead>
											<!--end::Table head-->
											<!--begin::Table body-->
											<tbody class="fw-bold text-gray-600">
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Category=-->
													<td>
														<div class="d-flex">
															<!--begin::Thumbnail-->
															<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/68.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Computers</a>
																<!--end::Title-->
																<!--begin::Description-->
																<div class="text-muted fs-7 fw-bolder">Our computers and tablets include all the big brands.</div>
																<!--end::Description-->
															</div>
														</div>
													</td>
													<!--end::Category=-->
													<!--begin::Type=-->
													<td>
														<!--begin::Badges-->
														<div class="badge badge-light-success">Automated</div>
														<!--end::Badges-->
													</td>
													<!--end::Type=-->
													<!--begin::Action=-->
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Category=-->
													<td>
														<div class="d-flex">
															<!--begin::Thumbnail-->
															<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/71.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Watches</a>
																<!--end::Title-->
																<!--begin::Description-->
																<div class="text-muted fs-7 fw-bolder">Our range of watches are perfect whether you’re looking to upgrade</div>
																<!--end::Description-->
															</div>
														</div>
													</td>
													<!--end::Category=-->
													<!--begin::Type=-->
													<td>
														<!--begin::Badges-->
														<div class="badge badge-light-success">Automated</div>
														<!--end::Badges-->
													</td>
													<!--end::Type=-->
													<!--begin::Action=-->
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Category=-->
													<td>
														<div class="d-flex">
															<!--begin::Thumbnail-->
															<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/58.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Headphones</a>
																<!--end::Title-->
																<!--begin::Description-->
																<div class="text-muted fs-7 fw-bolder">Our big range of headphones makes it easy to upgrade your device at a great price.</div>
																<!--end::Description-->
															</div>
														</div>
													</td>
													<!--end::Category=-->
													<!--begin::Type=-->
													<td>
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Manual</div>
														<!--end::Badges-->
													</td>
													<!--end::Type=-->
													<!--begin::Action=-->
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Category=-->
													<td>
														<div class="d-flex">
															<!--begin::Thumbnail-->
															<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/52.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Footwear</a>
																<!--end::Title-->
																<!--begin::Description-->
																<div class="text-muted fs-7 fw-bolder">Whatever your activity needs are, we’ve got you covered.</div>
																<!--end::Description-->
															</div>
														</div>
													</td>
													<!--end::Category=-->
													<!--begin::Type=-->
													<td>
														<!--begin::Badges-->
														<div class="badge badge-light-success">Automated</div>
														<!--end::Badges-->
													</td>
													<!--end::Type=-->
													<!--begin::Action=-->
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Category=-->
													<td>
														<div class="d-flex">
															<!--begin::Thumbnail-->
															<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/76.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Cameras</a>
																<!--end::Title-->
																<!--begin::Description-->
																<div class="text-muted fs-7 fw-bolder">You’ll find exactly what you’re looking for with our huge range of cameras.</div>
																<!--end::Description-->
															</div>
														</div>
													</td>
													<!--end::Category=-->
													<!--begin::Type=-->
													<td>
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Manual</div>
														<!--end::Badges-->
													</td>
													<!--end::Type=-->
													<!--begin::Action=-->
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Category=-->
													<td>
														<div class="d-flex">
															<!--begin::Thumbnail-->
															<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/207.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Shirts</a>
																<!--end::Title-->
																<!--begin::Description-->
																<div class="text-muted fs-7 fw-bolder">Any occasion, any time, we have everything you'll ever need.</div>
																<!--end::Description-->
															</div>
														</div>
													</td>
													<!--end::Category=-->
													<!--begin::Type=-->
													<td>
														<!--begin::Badges-->
														<div class="badge badge-light-success">Automated</div>
														<!--end::Badges-->
													</td>
													<!--end::Type=-->
													<!--begin::Action=-->
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Category=-->
													<td>
														<div class="d-flex">
															<!--begin::Thumbnail-->
															<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/50.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Household</a>
																<!--end::Title-->
																<!--begin::Description-->
																<div class="text-muted fs-7 fw-bolder">Spice up your home decor with our wide selection.</div>
																<!--end::Description-->
															</div>
														</div>
													</td>
													<!--end::Category=-->
													<!--begin::Type=-->
													<td>
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Manual</div>
														<!--end::Badges-->
													</td>
													<!--end::Type=-->
													<!--begin::Action=-->
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Category=-->
													<td>
														<div class="d-flex">
															<!--begin::Thumbnail-->
															<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/193.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Toys</a>
																<!--end::Title-->
																<!--begin::Description-->
																<div class="text-muted fs-7 fw-bolder">Get the perfect gift for the little ones.</div>
																<!--end::Description-->
															</div>
														</div>
													</td>
													<!--end::Category=-->
													<!--begin::Type=-->
													<td>
														<!--begin::Badges-->
														<div class="badge badge-light-success">Automated</div>
														<!--end::Badges-->
													</td>
													<!--end::Type=-->
													<!--begin::Action=-->
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Category=-->
													<td>
														<div class="d-flex">
															<!--begin::Thumbnail-->
															<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/169.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Handbags</a>
																<!--end::Title-->
																<!--begin::Description-->
																<div class="text-muted fs-7 fw-bolder">Great fashion, great selections, great prices</div>
																<!--end::Description-->
															</div>
														</div>
													</td>
													<!--end::Category=-->
													<!--begin::Type=-->
													<td>
														<!--begin::Badges-->
														<div class="badge badge-light-primary">Manual</div>
														<!--end::Badges-->
													</td>
													<!--end::Type=-->
													<!--begin::Action=-->
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Category=-->
													<td>
														<div class="d-flex">
															<!--begin::Thumbnail-->
															<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/177.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Wines</a>
																<!--end::Title-->
																<!--begin::Description-->
																<div class="text-muted fs-7 fw-bolder">Great taste, great selections, great prices</div>
																<!--end::Description-->
															</div>
														</div>
													</td>
													<!--end::Category=-->
													<!--begin::Type=-->
													<td>
														<!--begin::Badges-->
														<div class="badge badge-light-success">Automated</div>
														<!--end::Badges-->
													</td>
													<!--end::Type=-->
													<!--begin::Action=-->
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row-->
												<!--begin::Table row-->
												<tr>
													<!--begin::Checkbox-->
													<td>
														<div class="form-check form-check-sm form-check-custom form-check-solid">
															<input class="form-check-input" type="checkbox" value="1" />
														</div>
													</td>
													<!--end::Checkbox-->
													<!--begin::Category=-->
													<td>
														<div class="d-flex">
															<!--begin::Thumbnail-->
															<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="symbol symbol-50px">
																<span class="symbol-label" style="background-image:url(assets/media//stock/ecommerce/151.gif);"></span>
															</a>
															<!--end::Thumbnail-->
															<div class="ms-5">
																<!--begin::Title-->
																<a href="../../demo1/dist/apps/ecommerce/catalog/edit-category.html" class="text-gray-800 text-hover-primary fs-5 fw-bolder mb-1" data-kt-ecommerce-category-filter="category_name">Sandals</a>
																<!--end::Title-->
																<!--begin::Description-->
																<div class="text-muted fs-7 fw-bolder">In season summer footwear with a huge range of options</div>
																<!--end::Description-->
															</div>
														</div>
													</td>
													<!--end::Category=-->
													<!--begin::Type=-->
													<td>
														<!--begin::Badges-->
														<div class="badge badge-light-success">Automated</div>
														<!--end::Badges-->
													</td>
													<!--end::Type=-->
													<!--begin::Action=-->
													<td class="text-end">
														<a href="#" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-5 m-0">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon--></a>
														<!--begin::Menu-->
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html" class="menu-link px-3">Edit</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3" data-kt-ecommerce-category-filter="delete_row">Delete</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu-->
													</td>
													<!--end::Action=-->
												</tr>
												<!--end::Table row-->
											</tbody>
											<!--end::Table body-->
										</table>
										<!--end::Table-->
									</div>
									<!--end::Card body-->
								</div>
								<!--end::Category-->

							</div>
							<div class="tab-pane fade" id="kt_vtab_pane_5">

							</div>
							<div class="tab-pane fade" id="kt_vtab_pane_6">

							</div>
						</div>
					</div>
				</div>

			</div>

			<!--end::Row-->

			<!--end::Body-->

			<!--end::Engage widget 8-->
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
<script src="{{ asset('static/js/custom/apps/ecommerce/catalog/setting.js') }}"></script>
<script>
	$("#kt_ecommerce_category_table").DataTable({
		"language": {
			"lengthMenu": "Show _MENU_",
		},
		"dom": "<'row'" +
			"<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
			"<'col-sm-6 d-flex align-items-center justify-content-start'f>" +
			">" +
			"<'row'" +
			"<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
			"<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
			">" +

			"<'table-responsive'tr>"


	});
</script>
/

@endsection