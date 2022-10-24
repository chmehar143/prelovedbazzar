<div id="kt_header" style="" class="header align-items-stretch ">
   <!--begin::Container-->
   <div class="container-fluid d-flex align-items-stretch justify-content-between">
      <!--begin::Aside mobile toggle-->
      <div class="d-flex align-items-center d-lg-none ms-n1 me-2" title="Show aside menu">
         <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_aside_mobile_toggle">
            <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
            <span class="svg-icon svg-icon-2x mt-1">
               <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
                  <path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
               </svg>
            </span>
            <!--end::Svg Icon-->
         </div>
      </div>
      <!--end::Aside mobile toggle-->
      <!--begin::Mobile logo-->
      <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
         <a href="../../demo6/dist/index.html" class="d-lg-none">
         <img alt="Logo" src="assets/media/logos/logo-demo6.svg" class="h-30px" />
         </a>
      </div>
      <!--end::Mobile logo-->
      <!--begin::Wrapper-->
      <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
         <!--begin::Navbar-->
         <div class="d-flex align-items-stretch" id="kt_header_nav" style="margin-left:3pc">
            <!--begin::Menu wrapper-->
            <div class="header-menu align-items-stretch" style="margin-left:4pc" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
               <!--begin::Menu-->
               <div class="d-flex align-items-stretch" id="kt_header_nav" style="margin-left:3pc">
                  <!--begin::Menu wrapper-->
                  <div class="header-menu align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_header_menu_mobile_toggle" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header_nav'}">
                     <!--begin::Menu-->
                     <div class="menu menu-lg-rounded menu-column menu-lg-row menu-state-bg menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-400 fw-bold my-5 my-lg-0 align-items-stretch" id="#kt_header_menu" data-kt-menu="true">
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                           <a class="menu-link py-3" href="{{url('admin')}}">
                           <span class="menu-title">Dashboards</span>
                           </a>
                        </div>
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                           <span class="menu-link py-3">
                           <span class="menu-title">Orders</span>
                           <span class="menu-arrow d-lg-none"></span>
                           </span>
                           <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-100 w-lg-300px p-5 p-lg-5">
                              <!--begin:Row-->
                              <div class="row" data-kt-menu-dismiss="true">
                                 <!--begin:Col-->
                                 <div class="menu-inline menu-column menu-active-bg">
                                    <div class="menu-item">
                                       <a href="{{url('admin/order_allorder')}}" class="menu-link">
                                       <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                       </span>
                                       <span class="menu-title">All Orders </span>
                                       </a>
                                    </div>
                                    <div class="menu-item">
                                       <a href="{{url('admin/order_complete_completedorder')}}" class="menu-link">
                                       <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                       </span>
                                       <span class="menu-title">Completed Orders</span>
                                       </a>
                                    </div>
                                    <div class="menu-item">
                                       <a href="{{url('admin/order_pending_pendingorder')}}" class="menu-link">
                                       <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                       </span>
                                       <span class="menu-title">Pending Orders</span>
                                       </a>
                                    </div>
                                    <div class="menu-item">
                                       <a href="{{url('admin/order_processing_processingorder')}}" class="menu-link">
                                       <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                       </span>
                                       <span class="menu-title">Proceesing Orders</span>
                                       </a>
                                    </div>
                                    <div class="menu-item">
                                       <a href="{{url('admin/order_decline_declinedorder')}}" class="menu-link">
                                       <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                       </span>
                                       <span class="menu-title">Declined Orders</span>
                                       </a>
                                    </div>
                                 </div>
                                 <!--end:Col-->
                              </div>
                              <!--end:Row-->
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                           <span class="menu-link py-3">
                           <span class="menu-title">Products</span>
                           <span class="menu-arrow d-lg-none"></span>
                           </span>
                           <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-100 w-lg-300px p-5 p-lg-5">
                              <!--begin:Row-->
                              <div class="row" data-kt-menu-dismiss="true">
                                 <!--begin:Col-->
                                 <div class="menu-inline menu-column menu-active-bg">
                                    <div class="menu-item">
                                       <a href="{{url('admin/allproducts_list')}}" class="menu-link">
                                       <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                       </span>
                                       <span class="menu-title">All Products </span>
                                       </a>
                                    </div>
                                    <div class="menu-item">
                                       <a href="{{url('admin/deactivateproduct_list')}}" class="menu-link">
                                       <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                       </span>
                                       <span class="menu-title">Deactived Products </span>
                                       </a>
                                    </div>
                                    <div class="menu-item">
                                       <a href="{{url('admin/productcatalog_list')}}" class="menu-link">
                                       <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                       </span>
                                       <span class="menu-title">Products Catalog</span>
                                       </a>
                                    </div>
                                 </div>
                                 <!--end:Col-->
                              </div>
                              <!--end:Row-->
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                           <span class="menu-link py-3">
                           <span class="menu-title">Cusomters</span>
                           <span class="menu-arrow d-lg-none"></span>
                           </span>
                           <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-100 w-lg-300px p-5 p-lg-5">
                              <!--begin:Row-->
                              <div class="row" data-kt-menu-dismiss="true">
                                 <!--begin:Col-->
                                 <div class="menu-inline menu-column menu-active-bg">
                                    <div class="menu-item">
                                       <a href="{{url('admin/customer_list')}}" class="menu-link">
                                       <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                       </span>
                                       <span class="menu-title">Customer list </span>
                                       </a>
                                    </div>
                                    <div class="menu-item">
                                       <a href="{{url('admin/customer_withdraw')}}" class="menu-link">
                                       <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                       </span>
                                       <span class="menu-title"> Withdraw</span>
                                       </a>
                                    </div>
                                    <div class="menu-item">
                                       <a href="{{url('admin/customer_transaction')}}" class="menu-link">
                                       <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                       </span>
                                       <span class="menu-title">Transactions</span>
                                       </a>
                                    </div>
                                 </div>
                                 <!--end:Col-->
                              </div>
                              <!--end:Row-->
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                           <span class="menu-link py-3">
                           <span class="menu-title">Vendor verification</span>
                           <span class="menu-arrow d-lg-none"></span>
                           </span>
                           <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-100 w-lg-300px p-5 p-lg-5">
                              <!--begin:Row-->
                              <div class="row" data-kt-menu-dismiss="true">
                                 <!--begin:Col-->
                                 <div class="menu-inline menu-column menu-active-bg">
                                    <div class="menu-item">
                                       <a href="{{route('admin.vendorverification_list')}}" class="menu-link">
                                       <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                       </span>
                                       <span class="menu-title">All Verification</span>
                                       </a>
                                    </div>
                                    <div class="menu-item">
                                       <a href="{{route('admin.vendorverification_pending')}}" class="menu-link">
                                       <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                       </span>
                                       <span class="menu-title">Pending Verification</span>
                                       </a>
                                    </div>
                                    <div class="menu-item">
                                       <a href="{{route('admin.vendors_withdraw')}}" class="menu-link">
                                       <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                       </span>
                                       <span class="menu-title">Vendor Withdraw</span>
                                       </a>
                                    </div>
                                 </div>
                                 <!--end:Col-->
                              </div>
                              <!--end:Row-->
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                           <span class="menu-link py-3">
                           <span class="menu-title">Message</span>
                           <span class="menu-arrow d-lg-none"></span>
                           </span>
                           <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-100 w-lg-300px p-5 p-lg-5">
                              <!--begin:Row-->
                              <div class="row" data-kt-menu-dismiss="true">
                                 <!--begin:Col-->
                                 <div class="menu-inline menu-column menu-active-bg">
                                    <div class="menu-item">
                                       <a href="{{url('admin/message_messagelist')}}" class="menu-link">
                                       <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                       </span>
                                       <span class="menu-title">  Message </span>
                                       </a>
                                    </div>
                                 </div>
                                 <!--end:Col-->
                              </div>
                              <!--end:Row-->
                           </div>
                        </div>
                        <div data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" class="menu-item menu-lg-down-accordion me-lg-1">
                           <span class="menu-link py-3">
                           <span class="menu-title">Banners</span>
                           <span class="menu-arrow d-lg-none"></span>
                           </span>
                           <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown w-100 w-lg-300px p-5 p-lg-5">
                              <!--begin:Row-->
                              <div class="row" data-kt-menu-dismiss="true">
                                 <!--begin:Col-->
                                 <div class="menu-inline menu-column menu-active-bg">
                                    <div class="menu-item">
                                       <a href="{{ route('admin.webbanner_list')}}" class="menu-link">
                                       <span class="menu-bullet">
                                       <span class="bullet bullet-dot"></span>
                                       </span>
                                       <span class="menu-title">  Banners </span>
                                       </a>
                                    </div>
                                 </div>
                                 <!--end:Col-->
                              </div>
                              <!--end:Row-->
                           </div>
                        </div>
                     </div>
                     <!--end::Menu-->
                  </div>
                  <!--end::Menu wrapper-->
               </div>
            </div>
            <!--end::Menu wrapper-->
         </div>
         <!--end::Navbar-->
         <!--begin::Topbar-->
         <div class="d-flex align-items-stretch flex-shrink-0">
            <!--begin::Toolbar wrapper-->
            <div class="d-flex align-items-stretch flex-shrink-0">
               <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                  <!--begin::Menu wrapper-->
                  <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                     <img src="{{asset('admin-assets/media/avatars/150-26.jpg')}}" alt="image" />
                  </div>
                  <!--begin::Menu-->
                  <div style="margin-left: 4pc;" class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
                     <!--begin::Menu item-->
                     <div class="menu-item px-3">
                        <div class="menu-content d-flex align-items-center px-3">
                           <!--begin::Avatar-->
                           <div class="symbol symbol-50px me-5">
                              <img alt="Logo" src="{{asset('admin-assets/media/avatars/150-26.jpg')}}" />
                           </div>
                           <!--end::Avatar-->
                           <!--begin::Username-->
                           <div class="d-flex flex-column">
                              {{--                                        
                              <div class="fw-bolder d-flex align-items-center fs-5">{{ Auth::guard('admin')->user()->name }}--}}
                              </div>
                           </div>
                           <!--end::Username-->
                        </div>
                     </div>
                     <!--end::Menu item-->
                     <div class="separator my-2"></div>
                     <div class="menu-item px-5">
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"
                           onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                           @csrf
                        </form>
                        {{--                                <a href="../../demo6/dist/authentication/flows/basic/sign-in.html" class="menu-link px-5">Sign Out</a>--}}
                     </div>
                  </div>
                  <!--end::Menu-->
                  <!--end::Menu wrapper-->
               </div>
               <!--end::User -->
               <!--begin::Heaeder menu toggle-->
               <div class="d-flex align-items-center d-lg-none ms-2" title="Show header menu">
                  <div class="btn btn-icon btn-active-color-primary w-30px h-30px w-md-40px h-md-40px" id="kt_header_menu_mobile_toggle">
                     <!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
                     <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                           <path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="black" />
                           <path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="black" />
                        </svg>
                     </span>
                     <!--end::Svg Icon-->
                  </div>
               </div>
               <!--end::Heaeder menu toggle-->
            </div>
            <!--end::Toolbar wrapper-->
         </div>
         <!--end::Topbar-->
      </div>
      <!--end::Wrapper-->
   </div>
   <!--end::Container-->
</div>