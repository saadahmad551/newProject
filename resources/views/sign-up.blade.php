<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <base href="">
    <title>@yield('title') - Sign Up</title>
    <meta charset="utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <link rel="canonical" href="" />
    <link rel="shortcut icon" href="" />
    <style>

    </style>
    @include('partials.styles')
    @yield("extra_style")

</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="bg-body">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Authentication - Multi-steps-->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid stepper stepper-pills stepper-column"
            id="kt_create_account_stepper">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto w-xl-400px bg-lighten shadow-sm">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-400px scroll-y">
                    <!--begin::Header-->
                    <div class="d-flex flex-row-fluid flex-column flex-center p-10 pt-lg-20">
                        <!--begin::Logo-->
                        <a href="#" class="mb-10 mb-lg-20">
                            <img alt="Logo" src="{{ asset('static/media\logos\logo_dark_horizontal.png')}}"
                                class="h-75px logo" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Nav-->
                        <div class="stepper-nav">
                            <!--begin::Step 1-->
                            <div class="stepper-item current" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">1</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Account Info</h3>
                                    <div class="stepper-desc fw-bold">Setup Your Account Details</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">2</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Business Info</h3>
                                    <div class="stepper-desc fw-bold">Setup Your Account Settings</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">3</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Extra Detail</h3>
                                    <div class="stepper-desc fw-bold">Your Business Related Info</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">4</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Billing Details</h3>
                                    <div class="stepper-desc fw-bold">Set Your Payment Methods</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <!--begin::Line-->
                                <div class="stepper-line w-40px"></div>
                                <!--end::Line-->
                                <!--begin::Icon-->
                                <div class="stepper-icon w-40px h-40px">
                                    <i class="stepper-check fas fa-check"></i>
                                    <span class="stepper-number">5</span>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Label-->
                                <div class="stepper-label">
                                    <h3 class="stepper-title">Completed</h3>
                                    <div class="stepper-desc fw-bold">Woah, we are here</div>
                                </div>
                                <!--end::Label-->
                            </div>
                            <!--end::Step 5-->
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Header-->

                </div>
                <!--end::Wrapper-->
            </div>
            <!--begin::Aside-->
            <!--begin::Body-->
            <div class="d-flex flex-column flex-lg-row-fluid ">
                <!--begin::Content-->
                <div class="d-flex flex-center flex-column flex-column-fluid">
                    <!--begin::Wrapper-->
                    <div class="w-lg-800px p-10 mx-auto ">
                        <!--begin::Form-->
                        <form class="my-auto pb-5" novalidate="novalidate" id="kt_create_account_form">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-lg-700px  mx-auto">


                                    <!--begin::Heading-->
                                    <div class="mb-10 text-center">
                                        <!--begin::Title-->
                                        <h1 class="text-dark mb-3">Create an Account</h1>
                                        <!--end::Title-->
                                        <!--begin::Link-->
                                        <div class="text-gray-400 fw-bold fs-4">Already have an account?
                                            <a href="../../demo1/dist/authentication/layouts/aside/sign-in.html"
                                                class="link-primary fw-bolder">Sign in here</a>
                                        </div>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Separator-->
                                    <div class="d-flex align-items-center mb-10">
                                        <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                        <span class="fw-bold text-gray-400 fs-7 mx-2">OR</span>
                                        <div class="border-bottom border-gray-300 mw-50 w-100"></div>
                                    </div>
                                    <!--end::Separator-->
                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <!--begin::Col-->
                                        <div class="col-xl-6 fv-row">
                                            <label class="form-label fw-bolder text-dark fs-6">First Name</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text"
                                                placeholder="" name="first_name" autocomplete="off" />
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-6 fv-row">
                                            <label class="form-label fw-bolder text-dark fs-6">Last Name</label>
                                            <input class="form-control form-control-lg form-control-solid" type="text"
                                                placeholder="" name="last_name" autocomplete="off" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6">Business Name</label>
                                        <input class="form-control form-control-lg form-control-solid"
                                            placeholder="" name="buisness_name" autocomplete="off" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <label class="form-label fw-bolder text-dark fs-6">Email Adress</label>
                                        <input class="form-control form-control-lg form-control-solid" 
                                            placeholder="" name="email" autocomplete="off" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row" data-kt-password-meter="true">
                                        <!--begin::Wrapper-->
                                        <div class="mb-1">
                                            <!--begin::Label-->
                                            <label class="form-label fw-bolder text-dark fs-6">Password</label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative mb-3">
                                                <input class="form-control form-control-lg form-control-solid"
                                                    type="password" placeholder="" name="password" autocomplete="off"  />
                                                <span
                                                    class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                    data-kt-password-meter-control="visibility">
                                                    <i class="bi bi-eye-slash fs-2"></i>
                                                    <i class="bi bi-eye fs-2 d-none"></i>
                                                </span>
                                            </div>
                                            <!--end::Input wrapper-->
                                            <!--begin::Meter-->
                                            <div class="d-flex align-items-center mb-3"
                                                data-kt-password-meter-control="highlight">
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div
                                                    class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                </div>
                                                <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px">
                                                </div>
                                            </div>
                                            <!--end::Meter-->
                                        </div>
                                        <!--end::Wrapper-->
                                        <!--begin::Hint-->
                                        <div class="text-muted">Use 8 or more characters with a mix of letters,
                                            numbers &amp; symbols.</div>
                                        <!--end::Hint-->
                                    </div>
                                    <!--end::Input group=-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-5">
                                        <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                                        <input class="form-control form-control-lg form-control-solid" type="password"
                                            placeholder="" name="confirm_password" autocomplete="off" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <label class="form-check form-check-custom form-check-solid form-check-inline">
                                            <input class="form-check-input" type="checkbox" name="toc" value="1" />
                                            <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                                                <a href="#" class="ms-1 link-primary">Terms and
                                                    conditions</a>.</span>
                                        </label>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <!--end::Actions-->


                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-12">
                                        <!--begin::Title-->
                                        <h2 class="fw-bolder text-dark">Buisness Info</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-bold fs-6">If you need more info, please check out
                                            <a href="#" class="link-primary fw-bolder">Help Page</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Buisness Logo</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input name="logo" class="form-control form-control-lg form-control"
                                            value="Keenthemes Inc." type="file" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Phone Number</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input name="phone_no"
                                            class="form-control form-control-lg form-control-solid" type="numbers" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="row fv-row mb-7">
                                        <!--begin::Col-->
                                        <div class="col-lg-6">
                                            <label class="form-label required">Country</label>

                                            <!--begin::Input group-->
                                            <select id="country" class="form-select form-select-solid" name="country"
                                                data-control="select2" data-placeholder="Select an option"
                                                data-allow-clear="true"></select>
                                            <!--end::Input group-->

                                        </div>
                                        <!--end::Input group-->
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-3">
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label required">City</label>
                                                <!--end::Label-->
                                                <select id="city" class="form-select form-select-solid"
                                                    data-control="select2" data-placeholder="Choose" name="city"
                                                    data-allow-clear="true">
                                                    <option value="">Select City</option>

                                                    <option value="Dubai City">Dubai City</option>
                                                    <option value="Jebel Ali">Jebel Ali</option>
                                                    <option value="Jumeirah">Jumeirah</option>
                                                    <option value="Marina">Marina</option>
                                                    <option value="Deira">Deira</option>
                                                    <option value="Al Barsha">Al Barsha</option>
                                                    <option value="Al Qusais">Al Qusais</option>
                                                    <option value="Bur Dubai">Bur Dubai</option>
                                                    <option value="Dubai Festival City">Dubai Festival City</option>
                                                    <option value="Palm Jumeirah">Palm Jumeirah</option>
                                                    <option value="Sports City">Sports City</option>
                                                    <option value="Business Bay">Business Bay</option>
                                                    <option value="Dubai Silicon Oasis">Dubai Silicon Oasis</option>
                                                    <option value="Discovery Gardens">Discovery Gardens</option>
                                                    <option value="International City">International City</option>

                                                </select>
                                            </div>
                                        </div>
                                        <!--end::Col-->
                                        <div class="col-xl-3">
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="form-label required">State</label>
                                                <!--end::Label-->
                                                <select name="state" class="form-select form-select-solid"
                                                    data-control="select2" data-placeholder="Choose"
                                                    data-allow-clear="true">
                                                    <option value="">Select Emirate</option>
                                                    <option value="Abu Dhabi">Abu Dhabi</option>
                                                    <option value="Ajman">Ajman</option>
                                                    <option value="Dubai">Dubai</option>
                                                    <option value="Fujairah">Fujairah</option>
                                                    <option value="Ras Al Khaimah">Ras Al Khaimah</option>
                                                    <option value="Sharjah">Sharjah</option>
                                                    <option value="Umm Al Quwain">Umm Al Quwain</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>

                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-0">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-bold form-label required">Contact Email</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input name="contact_email"
                                            class="form-control form-control-lg form-control-solid" value="" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Wrapper-->
                            </div>



                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bolder text-dark">Extra Detail</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-bold fs-6">If you need more info, please check out
                                            <a href="#" class="link-primary fw-bolder">Help Page</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>

                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center form-label mb-3">Number OF Branches
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Provide your team size to help us setup your billing"></i></label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row mb-2" data-kt-buttons="true">
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                                    <input type="radio" class="btn-check" name="account_team_size"
                                                        value="1-1" />
                                                    <span class="fw-bolder fs-3">1-1</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4 active">
                                                    <input type="radio" class="btn-check" name="account_team_size"
                                                        checked="checked" value="2-10" />
                                                    <span class="fw-bolder fs-3">2-10</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                                    <input type="radio" class="btn-check" name="account_team_size"
                                                        value="10-50" />
                                                    <span class="fw-bolder fs-3">10-50</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                                    <input type="radio" class="btn-check" name="account_team_size"
                                                        value="50+" />
                                                    <span class="fw-bolder fs-3">50+</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->

                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label required">Category</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <select name="Category"
                                            class="form-select form-select-lg form-select-solid" data-control="select2"
                                            data-placeholder="Select..." data-allow-clear="true"
                                            data-hide-search="true">
                                            <option></option>
                                            <option value="1">Category_1</option>
                                            <option value="1">Category_2</option>
                                            <option value="2">Category_3</option>
                                            <option value="3">Category_4</option>

                                        </select>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center form-label mb-3">No of Dileveries
                                            Per
                                            Day
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Provide your team size to help us setup your billing"></i></label>
                                        <!--end::Label-->
                                        <!--begin::Row-->
                                        <div class="row mb-2" data-kt-buttons="true">
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                                    <input type="radio" class="btn-check" name="account_team_size"
                                                        value="1-50" />
                                                    <span class="fw-bolder fs-3">1-50</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4 active">
                                                    <input type="radio" class="btn-check" name="account_team_size"
                                                        checked="checked" value="50-100" />
                                                    <span class="fw-bolder fs-3">50-100</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                                    <input type="radio" class="btn-check" name="account_team_size"
                                                        value="100-150" />
                                                    <span class="fw-bolder fs-3">100-150</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-outline-default w-100 p-4">
                                                    <input type="radio" class="btn-check" name="account_team_size"
                                                        value="500+" />
                                                    <span class="fw-bolder fs-3">500+</span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Row-->

                                    </div>
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bolder text-dark">Billing Details</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-bold fs-6">If you need more info, please check out
                                            <a href="#" class="text-primary fw-bolder">Help Page</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                            <span class="required">Name On Card</span>
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Specify a card holder's name"></i>
                                        </label>
                                        <!--end::Label-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="card_name" value="Max Doe" />
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-flex flex-column mb-7 fv-row">
                                        <!--begin::Label-->
                                        <label class="required fs-6 fw-bold form-label mb-2">Card Number</label>
                                        <!--end::Label-->
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative">
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid"
                                                placeholder="Enter card number" name="card_number"
                                                value="4111 1111 1111 1111" />
                                            <!--end::Input-->
                                            <!--begin::Card logos-->
                                            <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                <img src="assets/media/svg/card-logos/visa.svg" alt="" class="h-25px" />
                                                <img src="assets/media/svg/card-logos/mastercard.svg" alt=""
                                                    class="h-25px" />
                                                <img src="assets/media/svg/card-logos/american-express.svg" alt=""
                                                    class="h-25px" />
                                            </div>
                                            <!--end::Card logos-->
                                        </div>
                                        <!--end::Input wrapper-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="row mb-10">
                                        <!--begin::Col-->
                                        <div class="col-md-8 fv-row">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-bold form-label mb-2">Expiration
                                                Date</label>
                                            <!--end::Label-->
                                            <!--begin::Row-->
                                            <div class="row fv-row">
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_month"
                                                        class="form-select form-select-solid" data-control="select2"
                                                        data-hide-search="true" data-placeholder="Month">
                                                        <option></option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="9">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-6">
                                                    <select name="card_expiry_year"
                                                        class="form-select form-select-solid" data-control="select2"
                                                        data-hide-search="true" data-placeholder="Year">
                                                        <option></option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                        <option value="2025">2025</option>
                                                        <option value="2026">2026</option>
                                                        <option value="2027">2027</option>
                                                        <option value="2028">2028</option>
                                                        <option value="2029">2029</option>
                                                        <option value="2030">2030</option>
                                                        <option value="2031">2031</option>
                                                        <option value="2032">2032</option>
                                                    </select>
                                                </div>
                                                <!--end::Col-->
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-md-4 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                <span class="required">CVV</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Enter a card CVV code"></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid" minlength="3"
                                                    maxlength="4" placeholder="CVV" name="card_cvv" />
                                                <!--end::Input-->
                                                <!--begin::CVV icon-->
                                                <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                                    <span class="svg-icon svg-icon-2hx">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none">
                                                            <path d="M22 7H2V11H22V7Z" fill="currentColor" />
                                                            <path opacity="0.3"
                                                                d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </div>
                                                <!--end::CVV icon-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Input group-->

                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 4-->
                            <!--begin::Step 5-->
                            <div class="" data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-8 pb-lg-10">
                                        <!--begin::Title-->
                                        <h2 class="fw-bolder text-dark">Your Are Done!</h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-bold fs-6">If you need more info, please
                                            <a href="../../demo1/dist/authentication/sign-in/basic.html"
                                                class="link-primary fw-bolder">Sign In</a>.
                                        </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Body-->
                                    <div class="mb-0">
                                        <!--begin::Text-->
                                        <div class="fs-6 text-gray-600 mb-5">Writing headlines for blog posts is as
                                            much
                                            an art as it is a science and probably warrants its own post, but for
                                            all
                                            advise is with what works for your great &amp; amazing audience.</div>
                                        <!--end::Text-->
                                        <!--begin::Alert-->
                                        <!--begin::Notice-->
                                        <div
                                            class="notice d-flex bg-light-warning rounded border-warning border border-dashed p-6">
                                            <!--begin::Icon-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                            <span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                        fill="currentColor" />
                                                    <rect x="11" y="14" width="7" height="2" rx="1"
                                                        transform="rotate(-90 11 14)" fill="currentColor" />
                                                    <rect x="11" y="17" width="2" height="2" rx="1"
                                                        transform="rotate(-90 11 17)" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                            <!--end::Icon-->
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-stack flex-grow-1">
                                                <!--begin::Content-->
                                                <div class="fw-bold">
                                                    <h4 class="text-gray-900 fw-bolder">We need your attention!</h4>
                                                    <div class="fs-6 text-gray-700">To start using great tools,
                                                        please,
                                                        please
                                                        <a href="#" class="fw-bolder">Create Team Platform</a>
                                                    </div>
                                                </div>
                                                <!--end::Content-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Notice-->
                                        <!--end::Alert-->
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 5-->
                         <!--begin::Actions-->
								<div class="d-flex flex-stack pt-15">
									<div class="mr-2">
										<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
										<span class="svg-icon svg-icon-4 me-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
												<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->Previous</button>
									</div>
									<div>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
											<span class="indicator-label">Submit
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
											<span class="svg-icon svg-icon-4 ms-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
													<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon--></span>
											<span class="indicator-progress">Please wait...
											<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										</button>
										<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">Continue
										<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
										<span class="svg-icon svg-icon-4 ms-1">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
												<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon--></button>
									</div>
								</div>
								<!--end::Actions-->
                        </form>
                        <!--end::Form-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Content-->
                <!--begin::Footer-->
                <div class="d-flex flex-center flex-wrap fs-6 p-5 pb-0">
                    <!--begin::Links-->
                    <div class="d-flex flex-center fw-bold fs-6">
                        <a href="#" class="text-muted text-hover-primary px-2" target="_blank">About</a>
                        <a href="#" class="text-muted text-hover-primary px-2" target="_blank">Support</a>
                        <a href="#" class="text-muted text-hover-primary px-2" target="_blank">Purchase</a>
                    </div>
                    <!--end::Links-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authentication - Multi-steps-->
    </div>
    <!--end::Root-->

    @include('partials.scripts')

    @yield('extra_scripts')


</body>
<!--end::Body-->

</html>