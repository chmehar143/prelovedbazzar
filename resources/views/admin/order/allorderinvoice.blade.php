@extends('admin.layouts.app')

@section('content')



<div class="toolbar py-2" id="kt_toolbar">
						<!--begin::Container-->
						<div id="kt_toolbar_container" class="container-fluid d-flex align-items-center"><div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
									<!--begin::Title-->
									<h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3" style="margin-left:3pc"> All Orders</h1>
									<!--end::Title-->
									<!--begin::Separator-->
									<span class="h-20px border-gray-200 border-start mx-3"></span>
									<!--end::Separator-->
									<!--begin::Breadcrumb-->
									<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 my-1">
										<!--begin::Item-->
										
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-200 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-muted">Invoice</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item">
											<span class="bullet bg-gray-200 w-5px h-2px"></span>
										</li>
										<!--end::Item-->
										<!--begin::Item-->
										<li class="breadcrumb-item text-dark"> Order Invoice</li>
										<!--end::Item-->
									</ul>
									<!--end::Breadcrumb-->
								</div>
							<!--begin::Page title-->
							<div class="flex-grow-1 flex-shrink-0 me-5">
								<!--begin::Page title-->
								
								<!--end::Page title-->
							</div>
							<!--end::Page title-->
							<!--begin::Action group-->
							<div class="d-flex align-items-center flex-wrap">
								<!--begin::Wrapper-->
								<div class="flex-shrink-0 me-2">
									<ul class="nav">
										<li class="nav-item">
											<a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light active fw-bold fs-7 px-4 me-1" data-bs-toggle="tab" href="#">Day</a>
										</li>
										<li class="nav-item">
											<a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-bold fs-7 px-4 me-1" data-bs-toggle="tab" href="">Week</a>
										</li>
										<li class="nav-item">
											<a class="nav-link btn btn-sm btn-color-muted btn-active-color-primary btn-active-light fw-bold fs-7 px-4" data-bs-toggle="tab" href="#">Year</a>
										</li>
									</ul>
								</div>
								<!--end::Wrapper-->
								<!--begin::Wrapper-->
								<div class="d-flex align-items-center">
									<!--begin::Daterangepicker-->
									<a href="#" class="btn btn-sm btn-bg-light btn-color-gray-500 btn-active-color-primary me-2" id="kt_dashboard_daterangepicker" data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-trigger="hover" title="" data-bs-original-title="Select dashboard daterange">
										<span class="fw-bold me-1" id="kt_dashboard_daterangepicker_title">Today:</span>
										<span class="fw-bolder" id="kt_dashboard_daterangepicker_date">Sep 7</span>
									</a>
									<!--end::Daterangepicker-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center">
										<button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light btn-active-color-primary">
											<!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
											<span class="svg-icon svg-icon-2x">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13H13V10C13 9.4 12.6 9 12 9C11.4 9 11 9.4 11 10V13H8C7.4 13 7 13.4 7 14C7 14.6 7.4 15 8 15H11V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18V15H16C16.6 15 17 14.6 17 14C17 13.4 16.6 13 16 13Z" fill="black"></path>
													<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
												</svg>
											</span>
											<!--end::Svg Icon-->
										</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Wrapper-->
							</div>
							<!--end::Action group-->
						</div>
						<!--end::Container-->
					</div>


	<!--begin::Main-->
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main" style="margin-top:7pc;">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
								
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!-- begin::Invoice 1-->
									<div class="card">
										<!-- begin::Body-->
										<div class="card-body py-20">
											<!-- begin::Wrapper-->
											<div class="mw-lg-950px mx-auto w-100">
												<!-- begin::Header-->
												<div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
													<h4 class="fw-bolder text-gray-800 fs-2qx pe-5 pb-7">INVOICE</h4>
													<!--end::Logo-->
													<div class="text-sm-end">
														<!--begin::Logo-->
														<a href="#">
															<img alt="Logo" src="https://preview.keenthemes.com/metronic8/demo1/assets/media/svg/brand-logos/duolingo.svg" />
														</a>
														<!--end::Logo-->
														<!--begin::Text-->
														<div class="text-sm-end fw-semibold fs-4 text-muted mt-7">
															<div>Cecilia Chapman, 711-2880 Nulla St, Mankato</div>
															<div>Mississippi 96522</div>
														</div>
														<!--end::Text-->
													</div>
												</div>
												<!--end::Header-->
												<!--begin::Body-->
												<div class="border-bottom pb-12">
													<!--begin::Image-->
													<div class="d-flex flex-row-fluid bgi-no-repeat bgi-position-x-center bgi-size-cover card-rounded h-150px h-lg-250px mb-lg-20" style="background-image: url(https://preview.keenthemes.com/metronic8/demo1/assets/media/misc/pattern-4.jpg)"></div>
													<!--end::Image-->
													<!--begin::Wrapper-->
													<div class="d-flex justify-content-between flex-column flex-md-row">
														<!--begin::Content-->
														<div class="flex-grow-1 pt-8 mb-13">
															<!--begin::Table-->
															<div class="table-responsive border-bottom mb-14">
																<table class="table">
																	<thead>
																		<tr class="border-bottom fs-6 fw-bold text-muted text-uppercase">
																			<th class="min-w-175px pb-9">Description</th>
																			<th class="min-w-70px pb-9 text-end">Hours</th>
																			<th class="min-w-80px pb-9 text-end">Rate</th>
																			<th class="min-w-100px pe-lg-6 pb-9 text-end">Amount</th>
																		</tr>
																	</thead>
																	<tbody>
																		<tr class="fw-bold text-gray-700 fs-5 text-end">
																			<td class="d-flex align-items-center pt-11">
																			<i class="fa fa-genderless text-danger fs-1 me-2"></i>Creative Design</td>
																			<td class="pt-11">80</td>
																			<td class="pt-11">$40.00</td>
																			<td class="pt-11 fs-5 pe-lg-6 text-dark fw-bolder">$3200.00</td>
																		</tr>
																		<tr class="fw-bold text-gray-700 fs-5 text-end">
																			<td class="d-flex align-items-center">
																			<i class="fa fa-genderless text-success fs-1 me-2"></i>Logo Design</td>
																			<td>120</td>
																			<td>$40.00</td>
																			<td class="fs-5 text-dark fw-bolder pe-lg-6">$4800.00</td>
																		</tr>
																		<tr class="fw-bold text-gray-700 fs-5 text-end">
																			<td class="d-flex align-items-center pb-10">
																			<i class="fa fa-genderless text-primary fs-1 me-2"></i>Web Development</td>
																			<td>210</td>
																			<td>$60.00</td>
																			<td class="fs-5 text-dark fw-bolder pe-lg-6">$12600.00</td>
																		</tr>
																	</tbody>
																</table>
															</div>
															<!--end::Table-->
															<!--begin::Section-->
															<div class="d-flex flex-column mw-md-300px w-100">
																<!--begin::Label-->
																<div class="fw-semibold fs-5 mb-3 text-dark00">BANK TRANSFER</div>
																<!--end::Label-->
																<!--begin::Item-->
																<div class="d-flex flex-stack text-gray-800 mb-3 fs-6">
																	<!--begin::Accountname-->
																	<div class="fw-semibold pe-5">Account Name:</div>
																	<!--end::Accountname-->
																	<!--begin::Label-->
																	<div class="text-end fw-norma">Barclays UK</div>
																	<!--end::Label-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-stack text-gray-800 mb-3 fs-6">
																	<!--begin::Accountnumber-->
																	<div class="fw-semibold pe-5">Account Number:</div>
																	<!--end::Accountnumber-->
																	<!--begin::Number-->
																	<div class="text-end fw-norma">1234567890934</div>
																	<!--end::Number-->
																</div>
																<!--end::Item-->
																<!--begin::Item-->
																<div class="d-flex flex-stack text-gray-800 fs-6">
																	<!--begin::Code-->
																	<div class="fw-semibold pe-5">Code:</div>
																	<!--end::Code-->
																	<!--begin::Label-->
																	<div class="text-end fw-norma">BARC0032UK</div>
																	<!--end::Label-->
																</div>
																<!--end::Item-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Content-->
														<!--begin::Separator-->
														<div class="border-end d-none d-md-block mh-450px mx-9"></div>
														<!--end::Separator-->
														<!--begin::Content-->
														<div class="text-end pt-10">
															<!--begin::Total Amount-->
															<div class="fs-3 fw-bold text-muted mb-3">TOTAL AMOUNT</div>
															<div class="fs-xl-2x fs-2 fw-bolder">$20,600.00</div>
															<div class="text-muted fw-semibold">Taxes included</div>
															<!--end::Total Amount-->
															<div class="border-bottom w-100 my-7 my-lg-16"></div>
															<!--begin::Invoice To-->
															<div class="text-gray-600 fs-6 fw-semibold mb-3">INVOICE TO.</div>
															<div class="fs-6 text-gray-800 fw-semibold mb-8">Iris Watson.
															<br />Fredrick Nebraska 20620</div>
															<!--end::Invoice To-->
															<!--begin::Invoice No-->
															<div class="text-gray-600 fs-6 fw-semibold mb-3">INVOICE NO.</div>
															<div class="fs-6 text-gray-800 fw-semibold mb-8">56758</div>
															<!--end::Invoice No-->
															<!--begin::Invoice Date-->
															<div class="text-gray-600 fs-6 fw-semibold mb-3">DATE</div>
															<div class="fs-6 text-gray-800 fw-semibold">12 May, 2020</div>
															<!--end::Invoice Date-->
														</div>
														<!--end::Content-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Body-->
												<!-- begin::Footer-->
												<div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13">
													<!-- begin::Actions-->
													<div class="my-1 me-5">
														<!-- begin::Pint-->
														<button type="button" class="btn btn-success my-1 me-12" onclick="window.print();">Print Invoice</button>
														<!-- end::Pint-->
														<!-- begin::Download-->
														<button type="button" class="btn btn-light-success my-1">Download</button>
														<!-- end::Download-->
													</div>
													<!-- end::Actions-->
													<!-- begin::Action-->
													<!-- end::Action-->
												</div>
												<!-- end::Footer-->
											</div>
											<!-- end::Wrapper-->
										</div>
										<!-- end::Body-->
									</div>
									<!-- end::Invoice 1-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->

@endsection
