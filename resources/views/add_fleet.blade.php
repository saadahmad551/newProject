@extends('layouts.master')
@section('title', ' Add Fleet')

@section("extra_style")
@endsection

@section('main_content')

<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-fluid">








        <!--begin::Form-->
        <form id="re_add_property_form" class="form d-flex flex-column flex-lg-row" method="post" enctype="multipart/form-data" action="https://phplaravel-890314-3321246.cloudwaysapps.com/re/properties/add">
            <!--begin::Aside column-->
            <input type="hidden" name="_token" value="OxXit1GWcMtiGfcDWumc7o0jaEYmAIOfiIfjN3UP"> <!--end::Aside column-->
            <!--begin::Main column-->

            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-bold mb-n2">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">Vehicles Details</a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#re_features">Insurance & Municipality</a>
                    </li>
                    <!--end:::Tab item-->
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#re_services">API</a>
                    </li>

                    <!--end:::Tab item-->
                </ul>
                <!--end:::Tabs-->
                <!--begin::Tab content-->
                <div class="tab-content">
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">

                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>General</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">

                                    <div class="mb-10 row">
                                        <!--begin::Label-->
                                        <div class="col-lg-4 fv-row">
                                            <!--begin::Input-->

                                            <label class="required form-label">Reg Number</label>
                                            <input type="text" name="property_price" class="form-control mb-2" value="" />


                                            <!--end::Input-->

                                        </div>

                                        <div class="col-lg-4 fv-row">

                                            <!--begin::Input-->
                                            <label class="required form-label">Engine Number</label>
                                            <input type="text" name="property_price" class="form-control mb-2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-lg-4 fv-row">
                                            <!--begin::Input-->
                                            <label class="required form-label">Chassis Number</label>
                                            <input type="text" name="property_price" class="form-control mb-2" value="" />
                                            <!--end::Input-->


                                        </div>
                                    </div>

                                    <div class="mb-10 row">
                                        <!--begin::Label-->
                                        <div class="col-lg-4 fv-row">
                                            <!--begin::Input-->

                                            <label class=" form-label">Make</label>
                                            <select class="form-select form-control form-control" name="property_category" id="Make" data-control="select2" data-placeholder="Select an option">


                                                <option value="3089ce8d-f476-11ed-8c5a-42b4abf843ed">Daily</option>

                                                <option value="37d1b992-f476-11ed-8c5a-42b4abf843ed">Weekly</option>

                                                <option value="3cdfc3d0-f476-11ed-8c5a-42b4abf843ed">Yearly</option>
                                            </select>
                                            <!--end::Input-->

                                        </div>

                                        <div class="col-lg-4 fv-row">

                                            <!--begin::Input-->
                                            <label class="required form-label">Model</label>
                                            <input type="text" name="property_price" class="form-control mb-2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-lg-4 fv-row">
                                            <!--begin::Input-->

                                            <label class="required form-label">Year</label>
                                            <select class="form-select form-control form-control" name="property_category" id="year" data-control="select2" data-placeholder="Select an option">


                                                <option value="3089ce8d-f476-11ed-8c5a-42b4abf843ed">2020</option>

                                                <option value="37d1b992-f476-11ed-8c5a-42b4abf843ed">2021</option>

                                                <option value="3cdfc3d0-f476-11ed-8c5a-42b4abf843ed">2022</option>
                                            </select>
                                            <!--end::Input-->

                                        </div>

                                    </div>
                                    <div class="mb-10 row">
                                        <!--begin::Label-->
                                        <div class="col-lg-4 fv-row mt-4">
                                            <!--begin::Input-->

                                            <label class=" form-label">Color</label>
                                            <input type="color" name="" class="form-control mb-2" value="#563d7c" />


                                            <!--end::Input-->

                                        </div>

                                        <div class="col-lg-4 fv-row">

                                            <!--begin::Input-->
                                            <label class=" form-label">QR Code</label>
                                            <input type="file" name="property_price" class="form-control mb-2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-lg-4 fv-row">
                                            <!--begin::Input-->
                                            <label class=" form-label">Status</label>
                                            <select class="form-select form-control form-control" name="property_category" id="Status" data-control="select2" data-placeholder="Select an option">


                                                <option value="3089ce8d-f476-11ed-8c5a-42b4abf843ed">Active</option>

                                                <option value="37d1b992-f476-11ed-8c5a-42b4abf843ed">Booked</option>

                                                <option value="3cdfc3d0-f476-11ed-8c5a-42b4abf843ed">In Maintenance</option>
                                            </select> <!--end::Input-->


                                        </div>



                                    </div>
                                    <div class="mb-10 row">
                                        <!--begin::Label-->
                                        <div class="col-lg-4 fv-row">
                                            <!--begin::Input-->

                                            <label class=" form-label">Type</label>
                                            <select class="form-select form-control form-control" name="property_category" id="property_category_id" data-control="select2" data-placeholder="Select an option">


                                                <option value="3089ce8d-f476-11ed-8c5a-42b4abf843ed">Van</option>

                                                <option value="37d1b992-f476-11ed-8c5a-42b4abf843ed">Sudan</option>

                                            </select>
                                            <!--end::Input-->

                                        </div>

                                        <div class="col-lg-4 fv-row">

                                            <!--begin::Input-->
                                            <label class=" form-label">Picture</label>
                                            <input type="File" name="property_price" class="form-control mb-2" value="" />
                                            <!--end::Input-->
                                        </div>
                                        <div class="col-lg-4 fv-row">
                                            <!--begin::Input-->
                                            <label class=" form-label">Milage</label>
                                            <input type="numbers" name="property_price" class="form-control mb-2" value="" />
                                            <!--end::Input-->


                                        </div>
                                    </div>


                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::General options-->
                            <!--begin::Media-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Registration</h2>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->


                                    <div class="mb-10 row">
                                        <!--begin::Label-->
                                        <div class="col-lg-4 fv-row">
                                            <label class="required form-label mb-4">Registration Picture</label>
                                            <input type="file" name="property_price" class="form-control mb-2" value="" />
                                        </div>

                                        <div class="col-lg-4 fv-row">
                                            <label class=" form-label mb-4">Reg Issue Date </label>
                                            <input type="Date" name="_date" class="form-control mb-2" value="" />

                                        </div>

                                        <div class="col-lg-4 fv-row">
                                            <label class=" form-label mb-4">Expiry Date </label>
                                            <input type="Date" name="_date" class="form-control mb-2" value="" />

                                        </div>

                                    </div>

                                    <div class="mb-10 row">
                                        <div class="col-lg-4 fv-row">
                                            <label class=" form-label">Maintenance Intervel</label>

                                            <select name="country" id="" class="form-select form-select-lg " data-control="select2" data-placeholder="Select..." data-allow-clear="true" data-hide-search="true">
                                                <option value="intervel 1" selected>Intervel 1</option>
                                            </select>
                                        </div>
                                    </div>



                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div>



                        </div>
                    </div>

                    <!--end::Tab pane-->
                    <!--begin::Tab pane-->
                    <div class="tab-pane fade" id="re_features" role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <!--begin::Inventory-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Insurance</h2>

                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                <div class="mb-10 row">
                                        <!--begin::Label-->
                                        <div class="col-lg-4 fv-row">
                                            <label class="required form-label mb-4">Insurance Picture</label>
                                            <input type="file" name="property_price" class="form-control mb-2" value="" />
                                        </div>

                                        <div class="col-lg-4 fv-row">
                                            <label class=" form-label mb-4">Insurance Issue Date </label>
                                            <input type="Date" name="_date" class="form-control mb-2" value="" />

                                        </div>

                                        <div class="col-lg-4 fv-row">
                                            <label class=" form-label mb-4"> Insurance Expiry Date </label>
                                            <input type="Date" name="_date" class="form-control mb-2" value="" />

                                        </div>

                                    </div>
                                </div>
                                <!--end::Card header-->
                            </div>

                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Municipality</h2>

                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                <div class="mb-10 row">
                                        <!--begin::Label-->
                                        <div class="col-lg-4 fv-row">
                                            <label class="required form-label mb-4">Municipality Picture</label>
                                            <input type="file" name="property_price" class="form-control mb-2" value="" />
                                        </div>

                                        <div class="col-lg-4 fv-row">
                                            <label class=" form-label mb-4">Municipality Issue Date </label>
                                            <input type="Date" name="_date" class="form-control mb-2" value="" />

                                        </div>

                                        <div class="col-lg-4 fv-row">
                                            <label class=" form-label mb-4"> Municipality Expiry Date </label>
                                            <input type="Date" name="_date" class="form-control mb-2" value="" />

                                        </div>

                                    </div>
                                </div>
                                <!--end::Card header-->
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane fade" id="re_services" role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <!--begin::Inventory-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>API</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="row mb-2" data-kt-buttons="true">
                                        <!--begin::Col-->
                                        <div class="mb-10 row">
                                        <div class="col-lg-8 fv-row">
                                            <label class=" form-label required">Api Unit Id</label>
                                            <input type="text" name="property_price" class="form-control mb-2" value="" />



                                           
                                        </div>
                                    </div>
                                        <!--end::Col-->

                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="tab-pane fade" id="re_nearby" role="tab-panel">
                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <!--begin::Inventory-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Project Near By</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="block-body">
                                            <ul class="avl-features third color">
                                            </ul>
                                        </div>

                                    </div>
                                    <div class="row mb-2" data-kt-buttons="true">
                                        <!--begin::Col-->
                                        <div class="col card shadow-sm border border-primary border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3 bg-light-primary justify-content-center text-center">
                                            <label class="form-check-label fw-bold" for="nearby_Hasnain Riaz">
                                                <div class="align-items-center">

                                                    <!--begin::Icon-->
                                                    <div class="symbol symbol-50px w-50px bg-light me-5 mb-4">
                                                        <i class="vv fs-1 text-primary p-3"></i>
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Option-->
                                                    <div class="form-check form-check-custom form-check-success form-check-solid form-check-lg justify-content-center text-center">
                                                        <input class="form-check-input h-25px w-25px" type="checkbox" value="9927d9e3-9e75-4012-aaea-0b2af35af3ef" name="nearby[]" id="nearby_9927d9e3-9e75-4012-aaea-0b2af35af3ef" />
                                                        Hasnain Riaz
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col card shadow-sm border border-primary border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3 bg-light-primary justify-content-center text-center">
                                            <label class="form-check-label fw-bold" for="nearby_School">
                                                <div class="align-items-center">

                                                    <!--begin::Icon-->
                                                    <div class="symbol symbol-50px w-50px bg-light me-5 mb-4">
                                                        <i class="fa fa-home fs-1 text-primary p-3"></i>
                                                    </div>
                                                    <!--end::Icon-->
                                                    <!--begin::Option-->
                                                    <div class="form-check form-check-custom form-check-success form-check-solid form-check-lg justify-content-center text-center">
                                                        <input class="form-check-input h-25px w-25px" type="checkbox" value="992fbc88-2bdd-4c6f-b745-7c210302dacc" name="nearby[]" id="nearby_992fbc88-2bdd-4c6f-b745-7c210302dacc" />
                                                        School
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                        <!--end::Col-->

                                    </div>


                                </div>
                                <!--end::Card header-->
                            </div>

                        </div>
                    </div>
                    <!--end::Tab pane-->

                </div>
                <!--end::Tab content-->
                <div class="d-flex justify-content-end">
                    <!--begin::Button-->
                    <a href="#" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                    <!--end::Button-->
                    <!--begin::Button-->
                    <button type="submit" id="re_add_property_submit" class="btn btn-primary">
                        <span class="indicator-label">Save Changes</span>
                        <span class="indicator-progress">Please wait...
                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                    </button>
                    <!--end::Button-->
                </div>
            </div>

        </form>
        <!--end::Form-->
    </div>
    <!--end::Container-->
</div>
<!--end::Post-->
<!--end::Post-->
@endsection

@section('extra_scripts')
/

@endsection