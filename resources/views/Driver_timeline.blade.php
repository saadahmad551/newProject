@extends('layouts.master')
@section('title', ' Driver Timeline')

@section("extra_style")
@endsection

@section('main_content')



<!--begin::Post-->
<div class="post d-flex flex-column-fluid" id="kt_post">
	<!--begin::Container-->
	<div id="kt_content_container" class="container-xxl">

		<h1 class="fs-lg-2x   px-2">Fleet LoGs </h1>
		<div class="col-lg-12  py-5">
			<!--begin::Engage widget 8-->
			<div class="card ">

				<!--begin::Body-->
				<div class="card-body">

					<h3 class="card-title align-items-start flex-row">
						<span class="card-label fw-bolder text-dark">Honda Model X</span>
						<span class=" card-label text-muted  fw-bold px-5">KDGD67873894</span>

					</h3>
					<!--begin::Row-->
					<div class="row align-items-center ">

						<!--begin::Col-->
						<div class="col-lg-8 col-sm-6  flex-column ">

							<div class=" h-350px d-flex flex-column	align-items-center gap-2  ">
								<img src="{{asset('static/media\Fleet\image-6.png')}}" class="img-fluid" alt="" style="height:350px;" />
							</div>


						</div>

						<div class="col-lg-4 col-sm-6  flex-column ">

							<!--begin::List widget 25-->
							<div class="card card-flush h-lg-50" style="background-color:aliceblue">

								<!--begin::Body-->
								<div class="card-body pt-5">
									<!--begin::Item-->
									<div class="d-flex flex-stack">
										<!--begin::Section-->
										<div class="text-gray-400 fw-bolder fs-6me-2">Registration NO :</div>
										<!--end::Section-->
										<!--begin::Statistics-->
										<div class="d-flex align-items-senter">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->

											<!--end::Svg Icon-->
											<!--begin::Number-->
											<span class="text-gray-900 fw-boldest fs-6">AGX5677848740</span>
											<!--end::Number-->

										</div>
										<!--end::Statistics-->
									</div>
									<!--end::Item-->
									<!--begin::Separator-->
									<div class="separator separator-dashed my-3"></div>
									<!--end::Separator-->
									<div class="d-flex flex-stack">
										<!--begin::Section-->
										<div class="text-gray-400 fw-bolder fs-6me-2">Engine NO :</div>
										<!--end::Section-->
										<!--begin::Statistics-->
										<div class="d-flex align-items-senter">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->

											<!--end::Svg Icon-->
											<!--begin::Number-->
											<span class="text-gray-900 fw-boldest fs-6">677848740</span>
											<!--end::Number-->

										</div>
										<!--end::Statistics-->
									</div>
									<!--begin::Separator-->
									<div class="separator separator-dashed my-3"></div>
									<!--end::Separator-->
									<div class="d-flex flex-stack">
										<!--begin::Section-->
										<div class="text-gray-400 fw-bolder fs-6me-2">Model :</div>
										<!--end::Section-->
										<!--begin::Statistics-->
										<div class="d-flex align-items-senter">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->

											<!--end::Svg Icon-->
											<!--begin::Number-->
											<span class="text-gray-900 fw-boldest fs-6">Ak756</span>
											<!--end::Number-->

										</div>
										<!--end::Statistics-->
									</div>
									<div class="separator separator-dashed my-3"></div>
									<!--end::Separator-->
									<div class="d-flex flex-stack">
										<!--begin::Section-->
										<div class="text-gray-400 fw-bolder fs-6 ">Color :</div>
										<!--end::Section-->
										<!--begin::Statistics-->
										<div class="d-flex align-items-senter">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->

											<!--end::Svg Icon-->
											<!--begin::Number-->
											<span class="text-gray-900 fw-boldest fs-6">Blue</span>
											<!--end::Number-->

										</div>
										<!--end::Statistics-->
									</div>
									<div class="separator separator-dashed my-3"></div>
									<!--end::Separator-->
									<div class="d-flex flex-stack">
										<!--begin::Section-->
										<div class="text-gray-400 fw-bolder fs-6 me-2">Milage :</div>
										<!--end::Section-->
										<!--begin::Statistics-->
										<div class="d-flex align-items-center">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr094.svg-->

											<!--end::Svg Icon-->
											<!--begin::Number-->
											<span class="text-gray-900 fw-boldest fs-6">12 KM/LIT</span>
											<!--end::Number-->

										</div>
										<!--end::Statistics-->
									</div>
								</div>
								<!--end::Body-->
							</div>
							<!--end::LIst widget 25-->

						</div>

						<!--end::Col-->
					</div>
					<!--end::Row-->
				</div>
				<!--end::Body-->
			</div>

		</div>
		<div class="row my-7">

			<div class=" col-lg-5 d-flex justify-content-center mb-10">

				<!--begin::Tables Widget 9-->
				<!--begin::List widget 10-->
				<div class="card card-flush ">
					<!--begin::Header-->

					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body">
						<!--begin::Nav-->

						<!--end::Nav-->
						<!--begin::Tab Content-->
						<div class="row mb-2">
							<div class="col-lg-3 col-sm-6">
								<div class="me-7 mb-4">
									<div class="symbol symbol-100px symbol-lg-50px symbol-fixed position-relative">
										<img src="{{ asset('static/media/avatars/300-7.jpg') }}" alt="image" />
										<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
									</div>
								</div>
								<div class="d-flex align-items-center flex-row-fluid flex-wrap mb-3">

									<span class="text-gray-800 fw-bolder d-block fs-6">Ali Ahmed </span>



								</div>
							</div>
							<div class="col-lg-9  col-sm-6 mt-4">

								<div class="table-responsive ">
									<!--begin::Table-->
									<table class="table table-flush align-middle border-0">
										<!--begin::Thead-->
										<!--end::Thead-->
										<thead class="border-0">
											<th class="fs-7 fw-bolder text text-gray-800">ID Number</th>
											<th class="fs-7 fw-bolder text text-gray-800">Experience</th>
										</thead>
										<!--begin::Tbody-->
										<tbody class="fw-6 fw-bold text-gray-600">

											<tr>
												<td>
													<a class="text-hover-primary text-gray-600">029823932</a>
												</td>

												<td>
													<a class="text-hover-primary text-gray-600">2+ years</a>
												</td>

											</tr>





										</tbody>
										<!--end::Tbody-->
									</table>
									<!--end::Table-->
								</div>
								<!--end::Table wrapper-->
							</div>
						</div>
						<!--begin::Tap pane-->
						<div class="" id="kt_list_widget_10_tab_1">
							<!--begin::Item-->
							<div class="m-0">
								<!--begin::Wrapper-->
								<div class="timeline-label ">
									<!--begin::Item-->

									<!--end::Item-->
									<!--begin::Item-->
									<!--begin::Item-->
									<div class="timeline-item mb-15">
										<!--begin::Label-->
										<div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
										<!--end::Label-->
										<!--begin::Badge-->
										<div class="timeline-badge">
											<i class="fa fa-genderless text-success fs-1"></i>
										</div>
										<!--end::Badge-->
										<!--begin::Desc-->
										<div class="d-flex align-items-center flex-row-fluid flex-wrap">
											<div class="flex-grow-1 ">
												<span class="text-gray-800 fw-bolder d-block fs-6">Departure </span>

												<span href="#" class="text-gray-400 fs-1x d-block fw-bold">Southend
													Artriel Road (A127),</span>
												<span class="text-gray-500 fw-bolder fs-1x">60 km\h -> 51.3 km\h </span> <span class="text-gray-500 fw-bolder fs-1x ps-3">.58 mins</span>



											</div>

										</div>


										<!--end::Desc-->
									</div>
									<!--end::Item-->
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
										<div class="d-flex align-items-center flex-row-fluid flex-wrap">
											<div class="flex-grow-1 ">
												<span class="text-gray-800 fw-bolder d-block fs-6">Arival </span>

												<span href="#" class="text-gray-400 fs-1x d-block fw-bold">Southend
													Artriel Road (A127),</span>
												<span class="text-gray-500 fw-bolder fs-1x">60 km\h -> 51.3 km\h </span> <span class="text-gray-500 fw-bolder fs-1x ps-3">.58 mins</span>



											</div>

										</div>


										<!--end::Desc-->
									</div>
									<!--end::Item-->

								</div>


								<!--end::Item-->

							</div>
							<!--end::Tap pane-->

						</div>
						<!--end::Tab Content-->
					</div>
					<!--end: Card Body-->
				</div>


				<!--end::Col-->

			</div>
			
			<div class="col-lg-1 ">
			<div class="d-flex justify-content-center align-items-center" style="height: 400px;">
			
					<span class="svg-icon svg-icon-muted svg-icon-4hx" ><svg xmlns="http://www.w3.org/2000/svg" width="50" height="24" viewBox="0 0 24 24" fill="none">
							<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
							<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
						</svg></span>

				</div>
				<!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr001.svg-->

				<!--end::Svg Icon-->

			</div>
			<!--end::Message(in)-->
			<div class="col-lg-5 d-flex justify-content-center mb-10 ">

				<!--begin::Tables Widget 9-->
				<!--begin::List widget 10-->
				<div class="card card-flush ">
					<!--begin::Header-->

					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body">
						<!--begin::Nav-->

						<!--end::Nav-->
						<!--begin::Tab Content-->
						<div class="row mb-2">
							<div class="col-lg-3 col-sm-6">
								<div class="me-7 mb-4">
									<div class="symbol symbol-100px symbol-lg-50px symbol-fixed position-relative">
										<img src="{{ asset('static/media/avatars/300-7.jpg') }}" alt="image" />
										<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-white h-20px w-20px"></div>
									</div>
								</div>
								<div class="d-flex align-items-center flex-row-fluid flex-wrap mb-3">

									<span class="text-gray-800 fw-bolder d-block fs-6">Ali Ahmed </span>



								</div>
							</div>
							<div class="col-lg-9  col-sm-6 mt-4">

								<div class="table-responsive ">
									<!--begin::Table-->
									<table class="table table-flush align-middle border-0">
										<!--begin::Thead-->
										<!--end::Thead-->
										<thead class="border-0">
											<th class="fs-7 fw-bolder text text-gray-800">ID Number</th>
											<th class="fs-7 fw-bolder text text-gray-800">Experience</th>
										</thead>
										<!--begin::Tbody-->
										<tbody class="fw-6 fw-bold text-gray-600">

											<tr>
												<td>
													<a class="text-hover-primary text-gray-600">029823932</a>
												</td>

												<td>
													<a class="text-hover-primary text-gray-600">2+ years</a>
												</td>

											</tr>





										</tbody>
										<!--end::Tbody-->
									</table>
									<!--end::Table-->
								</div>
								<!--end::Table wrapper-->
							</div>
						</div>
						<!--begin::Tap pane-->
						<div class="" id="kt_list_widget_10_tab_1">
							<!--begin::Item-->
							<div class="m-0">
								<!--begin::Wrapper-->
								<div class="timeline-label ">
									<!--begin::Item-->

									<!--end::Item-->
									<!--begin::Item-->
									<!--begin::Item-->
									<div class="timeline-item mb-15">
										<!--begin::Label-->
										<div class="timeline-label fw-bolder text-gray-800 fs-6">14:37</div>
										<!--end::Label-->
										<!--begin::Badge-->
										<div class="timeline-badge">
											<i class="fa fa-genderless text-success fs-1"></i>
										</div>
										<!--end::Badge-->
										<!--begin::Desc-->
										<div class="d-flex align-items-center flex-row-fluid flex-wrap">
											<div class="flex-grow-1 ">
												<span class="text-gray-800 fw-bolder d-block fs-6">Departure </span>

												<span href="#" class="text-gray-400 fs-1x d-block fw-bold">Southend
													Artriel Road (A127),</span>
												<span class="text-gray-500 fw-bolder fs-1x">60 km\h -> 51.3 km\h </span> <span class="text-gray-500 fw-bolder fs-1x ps-3">.58 mins</span>



											</div>

										</div>


										<!--end::Desc-->
									</div>
									<!--end::Item-->
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
										<div class="d-flex align-items-center flex-row-fluid flex-wrap">
											<div class="flex-grow-1 ">
												<span class="text-gray-800 fw-bolder d-block fs-6">Arival </span>

												<span href="#" class="text-gray-400 fs-1x d-block fw-bold">Southend
													Artriel Road (A127),</span>
												<span class="text-gray-500 fw-bolder fs-1x">60 km\h -> 51.3 km\h </span> <span class="text-gray-500 fw-bolder fs-1x ps-3">.58 mins</span>



											</div>

										</div>


										<!--end::Desc-->
									</div>
									<!--end::Item-->

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
		<!--end::Message(in)-->

		<!--end::Engage widget 8-->
	</div>


	<!--begin::Row-->

	<!--end::Row-->


	<!--begin::Modals-->


	<!--end::Modals-->
</div>
<!--end::Container-->
</div>

<!--end::Post-->

<!--end::Post-->
@endsection

@section('extra_scripts')
/

@endsection