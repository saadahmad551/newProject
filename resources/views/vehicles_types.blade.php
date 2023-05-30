@extends('layouts.master')
@section('title', ' Vehicles Type')

@section("extra_style")
@endsection

@section('main_content')

<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-fluid">








        <!--begin::Form-->
        <form id="re_add_property_form" class="form d-flex flex-column flex-lg-row" method="post" enctype="multipart/form-data" action="https://phplaravel-890314-3321246.cloudwaysapps.com/re/properties/add">
            <!--begin::Aside column-->
            <input type="hidden" name="_token" value="OxXit1GWcMtiGfcDWumc7o0jaEYmAIOfiIfjN3UP">
            <!--end::Aside column-->
            <!--begin::Main column-->

            <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                <!--begin:::Tabs-->

                <!--end:::Tabs-->
                <!--begin::Tab content-->
                <div class="">
                    <!--begin::Tab pane-->
                    <div class="" id="" role="">

                        <div class="d-flex flex-column gap-7 gap-lg-10">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Vehicles Type</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">

                                    <div class="mb-10 row">
                                        <!--begin::Label-->
                                        <div class="col-lg-5 fv-row">
                                            <!--begin::Input-->

                                            <label class="required form-label">Name</label>
                                            <input type="text" name="property_price" class="form-control mb-2" value="" />


                                            <!--end::Input-->

                                        </div>

                                        <div class="col-lg-5 fv-row">

                                            <!--begin::Input-->
                                            <label class="required form-label">Capacity</label>
                                            <input type="text" name="property_price" class="form-control mb-2" value="" />
                                            <!--end::Input-->
                                        </div>

                                    </div>


                                    <div class="form-check form-check-custom form-check-solid me-10">
                                        <input class="form-check-input h-20px w-20px" type="checkbox" value="" id="flexCheckbox30" />
                                        <label class="form-check-label" for="flexCheckbox30">
                                            Active Status
                                        </label>
                                    </div>


                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::General options-->
                            <!--begin::Media-->




                        </div>
                    </div>







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