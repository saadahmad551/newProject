@extends('layouts.master')
@section('title', ' Driver Timeline')

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
			<div class="col-xl-6">
				<!--begin::Tables Widget 9-->
				<!--begin::List widget 10-->
				<div class="card card-flush ">
					<!--begin::Header-->
					<div class="card-header pt-7">
						<!--begin::Title-->
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder text-gray-800">Driver History</span>
							<span class="text-gray-400 mt-1 fw-bold fs-6">59 Active Dilevery</span>
						</h3>
						<!--end::Title-->
						<!--begin::Toolbar-->
						<div class="card-toolbar">
							<a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip' data-bs-dismiss='click' data-bs-custom-class="tooltip-dark" title="Logistics App is coming soon">View All</a>
						</div>
						<!--end::Toolbar-->
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body">
						<!--begin::Nav-->

						<!--end::Nav-->
						<!--begin::Tab Content-->
						<div class="">
							<!--begin::Tap pane-->
							<div class="" id="kt_list_widget_10_tab_1">
								<!--begin::Item-->
								<div class="m-0">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-sm-center pb-15">
										<!--begin::Symbol-->
										<div class="me-7 mb-4">
											<div class="symbol symbol-100px symbol-lg-100px symbol-fixed position-relative">
												<img src="{{ asset('static/media/avatars/300-7.jpg') }}" alt="image" />
												<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Section-->
										<div class="d-flex align-items-center flex-row-fluid flex-wrap">
											<div class="flex-grow-1 ">
												<span class="text-gray-800 fw-bolder d-block fs-6">Ali Ahmed </span>
												<a href="#" class="text-gray-400 fs-1x fw-bold">#AJHE7890</a>
												<span href="#" class="text-gray-400 fs-1x d-block fw-bold">Southend
													Artriel Road (A127),</span>
												<span href="#" class="text-gray-400 fs-1x d-block fw-bold">WickFord,SS213
													,Uk</span>

											</div>

										</div>

										<div class="me-2 mb-4 ps-10">
											<div class="symbol symbol-100px symbol-lg-150px symbol-fixed position-relative">
											<img src="{{asset('static/media\Fleet\images-2.jpg')}}" class="" alt="" />
											</div>
										</div>

										<div class="d-flex align-items-center flex-row-fluid flex-wrap">
											<div class="flex-grow-1 me-2">

												<a href="#" class="text-gray-400 fs-1x fw-bold">Honda</a>
												<a href="#" class="text-gray-400 fs-1x fw-bold">#AJHE7890</a>

												

											</div>

										</div>





										<!--end::Section-->
									</div>
									<div class=" d-flex justify-content-center mb-7 ">
										<div class=" me-2">
											<span class="text-gray-500 fw-bolder fs-1x">60 km\h -> 51.3 km\h </span> <span class="text-gray-500 fw-bolder fs-1x ps-">.58 mins</span>

										</div>
									</div>



									<!--end::Wrapper-->
									<!--begin::Timeline-->
									<div class="timeline-label">
										<!--begin::Item-->
										<div class="timeline-item mb-15">


											<!--begin::Label-->
											<div class="timeline-label fw-bolder text-gray-800 fs-6 ">08:42</div>
											<!--end::Label-->
											<!--begin::Badge-->
											<div class="timeline-badge">
												<i class="fa fa-genderless text-warning fs-1"></i>
											</div>
											<!--end::Badge-->
											<!--begin::Text-->
											<!--end::Text-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="timeline-item mb-15 mt-5">
											<!--begin::Label-->
											<div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
											<!--end::Label-->
											<!--begin::Badge-->
											<div class="timeline-badge">
												<i class="fa fa-genderless text-success fs-1"></i>
											</div>
											<!--end::Badge-->
											<!--begin::Content-->
											<div class="timeline-content d-flex">
												<span class="fw-bolder text-gray-800 ps-3">Start Timing</span>
												<div class="fw-mormal timeline-content text-muted ps-3"></div>
												<span class="badge badge-lg badge-light-success fw-bolder ">10:00</span>

											</div>
											<!--end::Content-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="timeline-item mb-15">
											<!--begin::Label-->
											<div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
											<!--end::Label-->
											<!--begin::Badge-->
											<div class="timeline-badge">
												<i class="fa fa-genderless text-danger fs-1"></i>
											</div>
											<!--end::Badge-->
											<!--begin::Desc-->
											<div class="timeline-content fw-bolder text-gray-800 ps-3">End Timing</div>
											<span class="badge badge-lg badge-light-danger fw-bolder ">14:37</span>

											<!--end::Desc-->
										</div>
										<!--end::Item-->

									</div>
								</div>
								<!--end::Item-->

							</div>
							<!--end::Tap pane-->

						</div>
						<!--end::Tab Content-->
					</div>
					<!--end: Card Body-->
				</div>

			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-xl-6">
				<!--begin::Tables Widget 9-->
				<!--begin::List widget 10-->
				<div class="card card-flush ">
					<!--begin::Header-->
					<div class="card-header pt-7">
						<!--begin::Title-->
						<h3 class="card-title align-items-start flex-column">
							<span class="card-label fw-bolder text-gray-800">Driver History</span>
							<span class="text-gray-400 mt-1 fw-bold fs-6">59 Active Dilevery</span>
						</h3>
						<!--end::Title-->
						<!--begin::Toolbar-->
						<div class="card-toolbar">
							<a href="#" class="btn btn-sm btn-light" data-bs-toggle='tooltip' data-bs-dismiss='click' data-bs-custom-class="tooltip-dark" title="Logistics App is coming soon">View All</a>
						</div>
						<!--end::Toolbar-->
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body">
						<!--begin::Nav-->

						<!--end::Nav-->
						<!--begin::Tab Content-->
						<div class="">
							<!--begin::Tap pane-->
							<div class="" id="kt_list_widget_10_tab_1">
								<!--begin::Item-->
								<div class="m-0">
									<!--begin::Wrapper-->
									<div class="d-flex align-items-sm-center pb-15">
										<!--begin::Symbol-->
										<div class="me-7 mb-4">
											<div class="symbol symbol-100px symbol-lg-100px symbol-fixed position-relative">
												<img src="{{ asset('static/media/avatars/300-7.jpg') }}" alt="image" />
												<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
											</div>
										</div>
										<!--end::Symbol-->
										<!--begin::Section-->
										<div class="d-flex align-items-center flex-row-fluid flex-wrap">
											<div class="flex-grow-1 ">
												<span class="text-gray-800 fw-bolder d-block fs-6">Ali Ahmed </span>
												<a href="#" class="text-gray-400 fs-1x fw-bold">#AJHE7890</a>
												<span href="#" class="text-gray-400 fs-1x d-block fw-bold">Southend
													Artriel Road (A127),</span>
												<span href="#" class="text-gray-400 fs-1x d-block fw-bold">WickFord,SS213
													,Uk</span>

											</div>

										</div>

										<div class="me-2 mb-4 ps-10">
											<div class="symbol symbol-100px symbol-lg-150px symbol-fixed position-relative">
											<img src="{{asset('static/media\Fleet\images-2.jpg')}}" class="" alt="" />
											</div>
										</div>

										<div class="d-flex align-items-center flex-row-fluid flex-wrap">
											<div class="flex-grow-1 me-2">

												<a href="#" class="text-gray-400 fs-1x fw-bold">Honda</a>
												<a href="#" class="text-gray-400 fs-1x fw-bold">#AJHE7890</a>

												

											</div>

										</div>





										<!--end::Section-->
									</div>
									<div class=" d-flex justify-content-center mb-7 ">
										<div class=" me-2">
											<span class="text-gray-500 fw-bolder fs-1x">60 km\h -> 51.3 km\h </span> <span class="text-gray-500 fw-bolder fs-1x ps-">.58 mins</span>

										</div>
									</div>



									<!--end::Wrapper-->
									<!--begin::Timeline-->
									<div class="timeline-label">
										<!--begin::Item-->
										<div class="timeline-item mb-15">


											<!--begin::Label-->
											<div class="timeline-label fw-bolder text-gray-800 fs-6 ">08:42</div>
											<!--end::Label-->
											<!--begin::Badge-->
											<div class="timeline-badge">
												<i class="fa fa-genderless text-warning fs-1"></i>
											</div>
											<!--end::Badge-->
											<!--begin::Text-->
											<!--end::Text-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="timeline-item mb-15 mt-5">
											<!--begin::Label-->
											<div class="timeline-label fw-bolder text-gray-800 fs-6">10:00</div>
											<!--end::Label-->
											<!--begin::Badge-->
											<div class="timeline-badge">
												<i class="fa fa-genderless text-success fs-1"></i>
											</div>
											<!--end::Badge-->
											<!--begin::Content-->
											<div class="timeline-content d-flex">
												<span class="fw-bolder text-gray-800 ps-3">Start Timing</span>
												<div class="fw-mormal timeline-content text-muted ps-3"></div>
												<span class="badge badge-lg badge-light-success fw-bolder ">10:00</span>

											</div>
											<!--end::Content-->
										</div>
										<!--end::Item-->
										<!--begin::Item-->
										<div class="timeline-item mb-15">
											<!--begin::Label-->
											<div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
											<!--end::Label-->
											<!--begin::Badge-->
											<div class="timeline-badge">
												<i class="fa fa-genderless text-danger fs-1"></i>
											</div>
											<!--end::Badge-->
											<!--begin::Desc-->
											<div class="timeline-content fw-bolder text-gray-800 ps-3">End Timing</div>
											<span class="badge badge-lg badge-light-danger fw-bolder ">14:37</span>

											<!--end::Desc-->
										</div>
										<!--end::Item-->

									</div>
								</div>
								<!--end::Item-->

							</div>
							<!--end::Tap pane-->

						</div>
						<!--end::Tab Content-->
					</div>
					<!--end: Card Body-->
				</div>

			</div>
			<!--end::Col-->
		</div>

	</div>
	<!--end::Container-->
</div>



<!--end::Post-->
@endsection

@section('extra_scripts')
/

@endsection