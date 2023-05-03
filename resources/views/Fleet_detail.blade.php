@extends('layouts.master')
@section('title', ' Role List')

@section("extra_style")
@endsection

@section('main_content')

<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">

        <h1 class="fs-lg-2x  pb-7 px-2">Fleet Management</h1>
        <div class="col-lg-12 px-10 py-10">
            <!--begin::Engage widget 8-->
            <div class="card h-md-100 border bg-light-primary " >
                <!--begin::Body-->
                <div class="card-body">
                    <!--begin::Row-->
                    <div class="row align-items-center h-100">
                        <!--begin::Col-->
                        <div class="col-7 ps-xl-13">
                            <!--begin::Title-->
                            <div class="d-flex gap-7 align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-circle symbol-150px">
                                    <img src="{{asset('static/media/avatars/300-11.jpg')}}" alt="image" />
                                </div>
                                <!--end::Avatar-->
                                <!--begin::Contact details-->
                                <div class="d-flex flex-column gap-2">
                                    <!--begin::Name-->
                                    <div class="text-muted text-hover-primary">Occupied By</div>

                                    <!--end::Name-->
                                    <!--begin::Email-->
                                    <div class="d-flex align-items-center gap-2">
                                        <!--begin::Svg Icon | path: icons/duotune/communication/com011.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <h3 class="mb-0">Muhammad Attiq</h3>
                                    </div>
                                    <!--end::Email-->
                                    <!--begin::Phone-->
                                    <div class="d-flex align-items-center gap-2">
                                        <!--begin::Svg Icon | path: icons/duotune/electronics/elc003.svg-->
                                        <span class="svg-icon svg-icon-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M5 20H19V21C19 21.6 18.6 22 18 22H6C5.4 22 5 21.6 5 21V20ZM19 3C19 2.4 18.6 2 18 2H6C5.4 2 5 2.4 5 3V4H19V3Z"
                                                    fill="currentColor" />
                                                <path opacity="0.3" d="M19 4H5V20H19V4Z" fill="currentColor" />
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <a href="#" class="text-muted text-hover-primary">+6141 234 567</a>
                                    </div>
                                    <!--end::Phone-->
                                </div>
                                <!--end::Contact details-->
                            </div>
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-5 py-10 flex-column ">
                            <!--begin::Illustration-->

                            <img src="{{asset('static/media\Fleet\image-6.png')}}" class="h-300px" alt="" />

                            <div class="d-flex flex-column	align-items-center gap-2">
                                <!--begin::Name-->
                                <!--end::Name-->
                                <!--begin::Email-->
                                <div class="d-flex align-items-center gap-2">


                                    <h3 class="mb-0">LOZ 4352</h3>
                                </div>
                                <!--end::Email-->
                                <!--begin::Phone-->
                                <div class="d-flex align-items-center gap-2">
                                    <!--begin::Svg Icon | path: icons/duotune/electronics/elc003.svg-->

                                    <!--end::Svg Icon-->
                                    <a href="#" class="text-muted text-hover-primary">REGISTRATION NUMBER</a>
                                </div>
                                <!--end::Phone-->
                            </div>
                        </div>

                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Engage widget 8-->
        </div>

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
                            <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                class="btn btn-sm btn-light d-flex align-items-center px-4">
                                <!--begin::Display range-->
                                <div class="text-gray-600 fw-bolder">Loading date range...</div>
                                <!--end::Display range-->
                                <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                <span class="svg-icon svg-icon-1 ms-2 me-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path opacity="0.3"
                                            d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                            fill="currentColor" />
                                        <path
                                            d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                            fill="currentColor" />
                                        <path
                                            d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                            fill="currentColor" />
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
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active"
                                        data-bs-toggle="pill" id="kt_charts_widget_32_tab_1"
                                        href="#kt_charts_widget_32_tab_content_1">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="fonticon-truck fs-1 p-0"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bolder fs-6 lh-1">Van</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                        data-bs-toggle="pill" id="kt_charts_widget_32_tab_2"
                                        href="#kt_charts_widget_32_tab_content_2">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="fonticon-bicycle fs-1 p-0"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bolder fs-6 lh-1">Bike</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                        <!--end::Bullet-->
                                    </a>
                                    <!--end::Link-->
                                </li>
                                <!--end::Item-->
                                <!--begin::Item-->
                                <li class="nav-item mb-3 me-3 me-lg-6">
                                    <!--begin::Link-->
                                    <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                        data-bs-toggle="pill" id="kt_charts_widget_32_tab_3"
                                        href="#kt_charts_widget_32_tab_content_3">
                                        <!--begin::Icon-->
                                        <div class="nav-icon mb-3">
                                            <i class="fonticon-drone fs-1 p-0"></i>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Title-->
                                        <span class="nav-text text-gray-800 fw-bolder fs-6 lh-1">Drone</span>
                                        <!--end::Title-->
                                        <!--begin::Bullet-->
                                        <span
                                            class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
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
                                                    <img src="{{asset('static/media\Fleet\images-1.jpg')}}" class=""
                                                        alt="" />


                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Ocian
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
                                                    <img src="{{asset('static/media/avatars\300-9.jpg')}}" class=""
                                                        alt="" />

                                                </div>
                                                <span class="text-gray-600 fw-bolder d-block fs-6">Junaid</span>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="text-gray-600 fw-bolder fs-6">8 C</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                            fill="currentColor" />
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
                                                    <img src="{{asset('static/media\Fleet\images-2.jpg')}}" class=""
                                                        alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Suzuki</a>
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
                                                    <img src="{{asset('static/media/avatars\300-14.jpg')}}" class=""
                                                        alt="" />
                                                </div>
                                                <span class="text-gray-600 fw-bolder d-block fs-6">Ahmed</span>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="text-gray-600 fw-bolder fs-6">8 C</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                            fill="currentColor" />
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
                                                    <img src="{{asset('static/media\Fleet\images-4.jpg')}}" class=""
                                                        alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Toyota
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
                                                    <img src="{{asset('static/media/avatars\300-27.jpg')}}" class=""
                                                        alt="" />
                                                </div>
                                                <span class="text-gray-600 fw-bolder d-block fs-6">Waqas</span>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="text-gray-600 fw-bolder fs-6">13 C</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                            fill="currentColor" />
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
                                                    <img src="{{asset('static/media\Fleet\images-5.jpg')}}" class=""
                                                        alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Honda
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
                                                    <img src="{{asset('static/media/avatars\300-21.jpg')}}" class=""
                                                        alt="" />
                                                </div>
                                                <span class="text-gray-600 fw-bolder d-block fs-6">zeshan</span>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="text-gray-600 fw-bolder fs-6">15 C</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                            fill="currentColor" />
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
                                                    <img src="{{asset('static/media\Fleet\img-2.jpg')}}" class=""
                                                        alt="" />
                                                </div>
                                                <div class="d-flex justify-content-start flex-column">
                                                    <a href="#"
                                                        class="text-gray-800 fw-bolder text-hover-primary mb-1 fs-6">Nisan
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
                                                    <img src="{{asset('static/media\avatars\300-25.jpg')}}" class=""
                                                        alt="" />
                                                </div>
                                                <span class="text-gray-600 fw-bolder d-block fs-6">Ahmed</span>
                                            </div>
                                        </td>
                                        <td class="text-end pe-0">
                                            <span class="text-gray-600 fw-bolder fs-6">17 C</span>
                                        </td>
                                        <td class="text-end">
                                            <a href="#"
                                                class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                            fill="currentColor" />
                                                        <path opacity="0.3"
                                                            d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                            fill="currentColor" />
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