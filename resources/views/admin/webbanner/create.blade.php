@extends('admin.layouts.app')
@section('content')
<head>
   <script src="https://cdn.ckeditor.com/ckeditor5/12.0.0/classic/ckeditor.js"></script>
</head>
<div class="toolbar py-2" id="kt_toolbar">
   <!--begin::Container-->
   <div id="kt_toolbar_container" class="container-fluid d-flex align-items-center">
      <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
         <!--begin::Title-->
         <h1 class="d-flex align-items-center text-dark fw-bolder my-1 fs-3" style="margin-left:3pc"> Website Banner </h1>
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
            <li class="breadcrumb-item text-muted">  Banner </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item">
               <span class="bullet bg-gray-200 w-5px h-2px"></span>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="breadcrumb-item text-dark"> Website Banner Create</li>
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
<div class="content d-flex flex-column flex-column-fluid" style="margin-top:5pc" id="kt_content">
   <!--begin::Container-->
   <div id="kt_content_container" class="container-xl" >
      <!--begin::Navbar-->
      <div class="card mb-5 mb-xl-10" style="margin-top:3pc">
      </div>
      <!--end::Navbar-->
      <!--begin::Basic info-->
      <div class="card mb-5 mb-xl-10">
         <!--begin::Card header-->
         <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
            <!--begin::Card title-->
            <div class="card-title m-0">
               <h3 class="fw-bolder m-0">Create Website Banner </h3>
            </div>
            <!--end::Card title-->
         </div>
         <!--begin::Card header-->
         <!--begin::Content-->
         <form id="kt_account_settings_profile_details" 
            action="{{ route('admin.webbanner_store') }}" class="collapse show" method="post" enctype="multipart/form-data">
            @csrf
            <!--begin::Form-->
            <!--begin::Card body-->
            <div class="card-body border-top p-9">
               <div class="row mb-6">
                  <br />
               </div>
               <!--begin::Input group-->
               <div class="row mb-6">
                  <!--begin::Label-->
                  <label class="col-lg-4 col-form-label fw-bold required fs-6">First  Image 
                  </label>
                  <!--end::Label-->
                  <!--begin::Col-->
                  <div class="col-lg-8">
                     <!--begin::Image input-->
                     <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url(assets/media/avatars/blank.png)">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/150-26.jpg)"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                           <i class="bi bi-pencil-fill fs-7"></i>
                           <!--begin::Inputs-->
                           <input type="file" name="image" accept=".png, .jpg, .jpeg" required/>
                           <input type="hidden" name="avatar_remove" />
                           <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                        <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                        <i class="bi bi-x fs-2"></i>
                        </span>
                        <!--end::Remove-->
                     </div>
                     <!--end::Image input-->
                     <!--begin::Hint-->
                     <div class="form-text">Allowed Maximum size: 3MB,  file types: png, jpg, jpeg.</div>
                     @error('image')
                        <div class="validation text-danger mt-1">{{ $message }}</div>
                     @enderror
                     <!--end::Hint-->
                  </div>
                  <!--end::Col-->
               </div>
               <!--end::Input group-->
               <!--begin::Input group-->
               <div class="row mb-6">
                  <!--begin::Label-->
                  <label class="col-lg-4 col-form-label required fw-bold fs-6">Title  </label>
                  <!--end::Label-->
                  <!--begin::Col-->
                  <div class="col-lg-8">
                     <!--begin::Row-->
                     <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                           <input type="text" name="title" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 @error('title') is-invalid @enderror" placeholder="Title"  />
                        </div>
                        @error('title')
                           <div class="validation text-danger mt-1">{{ $message }}</div>
                        @enderror
                        <!--end::Col-->
                        <!--begin::Col-->
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                  </div>
                  <!--end::Col-->
               </div>
               <!--end::Input group-->
                              <!--begin::Input group-->
                              <div class="row mb-6">
                  <!--begin::Label-->
                  <label class="col-lg-4 col-form-label required fw-bold fs-6">Descriptions  </label>
                  <!--end::Label-->
                  <!--begin::Col-->
                  <div class="col-lg-8">
                     <!--begin::Row-->
                     <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                           <input type="text" name="description" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 @error('description') is-invalid @enderror" placeholder="Description"  />
                        </div>
                        @error('description')
                           <div class="validation text-danger mt-1">{{ $message }}</div>
                        @enderror
                        <!--end::Col-->
                        <!--begin::Col-->
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                  </div>
                  <!--end::Col-->
               </div>
               <!--end::Input group-->
                              <!--begin::Input group-->
                              <div class="row mb-6">
                  <!--begin::Label-->
                  <label class="col-lg-4 col-form-label required fw-bold fs-6">Offer  </label>
                  <!--end::Label-->
                  <!--begin::Col-->
                  <div class="col-lg-8">
                     <!--begin::Row-->
                     <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                           <input type="text" name="offer" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 @error('offer') is-invalid @enderror " placeholder="Offer"  />
                        </div>
                        @error('offer')
                           <div class="validation text-danger mt-1">{{ $message }}</div>
                        @enderror
                        <!--end::Col-->
                        <!--begin::Col-->
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                  </div>
                  <!--end::Col-->
               </div>
               <!--end::Input group-->
               <!--begin::Input group-->
               <div class="row mb-6">
                  <!--begin::Label-->
                  <label class="col-lg-4 col-form-label required fw-bold fs-6">Redirected Url </label>
                  <!--end::Label-->
                  <!--begin::Col-->
                  <div class="col-lg-8">
                     <!--begin::Row-->
                     <div class="row">
                        <!--begin::Col-->
                        <div class="col-lg-12 fv-row">
                           <input type="text" name="url" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0 @error('url') is-invalid @enderror " placeholder="Url"  />
                        </div>
                        @error('url')
                           <div class="validation text-danger mt-1">{{ $message }}</div>
                        @enderror
                        <!--end::Col-->
                        <!--begin::Col-->
                        <!--end::Col-->
                     </div>
                     <!--end::Row-->
                  </div>
                  <!--end::Col-->
               </div>
               <!--end::Input group-->
            </div>
            <!--end::Card body-->
            <!--begin::Actions-->
            <div class="card-footer d-flex justify-content-end py-6 px-9">
               <button type="reset" class="btn btn-light btn-active-light-primary me-2">Discard</button>
               <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">Create </button>
            </div>
            <!--end::Actions-->
            </form>
            <!--end::Form-->
         </form>
         <!--end::Content-->
      </div>
      <!--end::Modals-->
   </div>
</div>
</div>
<!--end::Container-->
</div>
<script>
   ClassicEditor
   	.create( document.querySelector( '#editor' ) )
   	.catch( error => {
   		console.error( error );
   	} );
</script>
<script>
   ClassicEditor
   	.create( document.querySelector( '#editornew' ) )
   	.catch( error => {
   		console.error( error );
   	} );
</script>
@endsection