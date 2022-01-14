<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->
<head><base href="">
	<meta charset="utf-8" />
	<title>City Wide Mechanical</title>
	<meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--begin::Fonts-->
	<link rel="stylesheet" href="{{url('https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700')}}" />
	<!--end::Fonts-->
	<!--begin::Page Vendors Styles(used by this page)-->
	<link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.3')}}" rel="stylesheet" type="text/css" />
	<!--end::Page Vendors Styles-->
	<!--begin::Global Theme Styles(used by all pages)-->
	<link href="{{asset('assets/plugins/global/plugins.bundle.css?v=7.0.3')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.3')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/style.bundle.css?v=7.0.3')}}" rel="stylesheet" type="text/css" />
	<!--end::Global Theme Styles-->
	<!--begin::Layout Themes(used by all pages)-->
	<link href="{{asset('assets/css/themes/layout/header/base/light.css?v=7.0.3')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/themes/layout/header/menu/light.css?v=7.0.3')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/themes/layout/brand/dark.css?v=7.0.3')}}" rel="stylesheet" type="text/css" />
	<link href="{{asset('assets/css/themes/layout/aside/dark.css?v=7.0.3')}}" rel="stylesheet" type="text/css" />
	<!--end::Layout Themes-->
	<link rel="shortcut icon" href="{{asset('assets/media/logos/log.png')}}" />
	<link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

	@yield('css')
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile align-items-center header-mobile-fixed">
	<!--begin::Logo-->
	<a href="#">
		<img alt="Logo" src="{{asset('assets/media/logos/logo2.png')}}" class="img-fluid" style="height: 50px !important;" />

	</a>
	<!--end::Logo-->
	<!--begin::Toolbar-->
	<div class="d-flex align-items-center">
		<!--begin::Aside Mobile Toggle-->
		<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
			<span></span>
		</button>
		<!--end::Aside Mobile Toggle-->

		<!--begin::Topbar Mobile Toggle-->
		<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                <span class="svg-icon svg-icon-xl">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
					<!--end::Svg Icon-->
                </span>
		</button>
		<!--end::Topbar Mobile Toggle-->
	</div>
	<!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
	<!--begin::Page-->
	<div class="d-flex flex-row flex-column-fluid page">
		<!--begin::Aside-->
		<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
			<!--begin::Brand-->
			<div class="brand flex-column-auto" id="kt_brand" style="height:110px !important;" >

				<!--begin::Logo-->
				<a href="#" class="brand-logo">
					<img alt="Logo" src="{{asset('company/logos/')}}{{'/'.mylogo()->logo}}" style="height:120px !important;" class="img-fluid" />
				</a>
				<!--end::Logo-->

				@yield('button-toggle-mobile')
			</div>
			<!--end::Brand-->
			<!--begin::Aside Menu-->
			<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
				<!--begin::Menu Container-->
				<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">

					<!--begin::Menu Nav-->
					<ul class="menu-nav">
						<li  class="menu-item {{request()->is('home')?'menu-item-active':''}}" aria-haspopup="true" >
							<a href="{{url('/home')}}" class="menu-link">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24" />
												<path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
												<path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
                                @role('User')
								<span class="menu-text">Your App</span>
                                @endrole
                                @role('Manager')
								<span class="menu-text">Dashboard</span>
                                @endrole
							</a>
						</li>
						@if(Auth::user()->hasPermissionTo('view course-stats'))
							<li class="menu-item {{request()->is('course-statistics')?'menu-item-active':''}}" aria-haspopup="true" data-menu-toggle="hover">
								<a href="{{route('usertests.index')}}" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<rect fill="#000000" opacity="0.3" x="4" y="4" width="8" height="16" />
												<path d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z" fill="#000000" fill-rule="nonzero" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-text">Course Statistics</span>

								</a>
							</li>
						@endif
						@role('User')
						@if(Auth::user()->hasPermissionTo('view personel'))

							<li class="menu-item {{request()->is('userpersonnel')?'menu-item-active':''}}" aria-haspopup="true" data-menu-toggle="hover">
								<a href="{{route('userpersonnel.index')}}" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<rect fill="#000000" opacity="0.3" x="4" y="4" width="8" height="16" />
												<path d="M6,18 L9,18 C9.66666667,18.1143819 10,18.4477153 10,19 C10,19.5522847 9.66666667,19.8856181 9,20 L4,20 L4,15 C4,14.3333333 4.33333333,14 5,14 C5.66666667,14 6,14.3333333 6,15 L6,18 Z M18,18 L18,15 C18.1143819,14.3333333 18.4477153,14 19,14 C19.5522847,14 19.8856181,14.3333333 20,15 L20,20 L15,20 C14.3333333,20 14,19.6666667 14,19 C14,18.3333333 14.3333333,18 15,18 L18,18 Z M18,6 L15,6 C14.3333333,5.88561808 14,5.55228475 14,5 C14,4.44771525 14.3333333,4.11438192 15,4 L20,4 L20,9 C20,9.66666667 19.6666667,10 19,10 C18.3333333,10 18,9.66666667 18,9 L18,6 Z M6,6 L6,9 C5.88561808,9.66666667 5.55228475,10 5,10 C4.44771525,10 4.11438192,9.66666667 4,9 L4,4 L9,4 C9.66666667,4 10,4.33333333 10,5 C10,5.66666667 9.66666667,6 9,6 L6,6 Z" fill="#000000" fill-rule="nonzero" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-text">Personel</span>

								</a>
							</li>
						@endif
						@endrole
                        @if(Auth::user()->hasAnyRole(3,4,5,6,7,8,9,10))
						@if(Auth::user()->hasPermissionTo('view personel'))
							<li class="menu-item menu-item-submenu {{request()->is('manager')?'menu-item-active':''}}" aria-haspopup="true" data-menu-toggle="hover">
								<a href="{{route('all-personnel.index')}}" class="menu-link menu-toggle">
						<span class="svg-icon menu-icon">
							<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24" />
									<rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
									<path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
									<span class="menu-text">All Personel</span>
								</a>
							</li>
						@endif
						@endif

{{--                        @if(Auth::user()->hasPermissionTo('view assignment'))--}}
{{--						<li class="menu-item {{request()->is('allassignments')?'menu-item-active':''}}" aria-haspopup="true" data-menu-toggle="hover">--}}
{{--							<a href="{{route('allassignmnet')}}" class="menu-link menu-toggle">--}}
{{--									<span class="svg-icon menu-icon">--}}
{{--										<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->--}}
{{--										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--												<rect x="0" y="0" width="24" height="24" />--}}
{{--												<path d="M5,5 L5,15 C5,15.5948613 5.25970314,16.1290656 5.6719139,16.4954176 C5.71978107,16.5379595 5.76682388,16.5788906 5.81365532,16.6178662 C5.82524933,16.6294602 15,7.45470952 15,7.45470952 C15,6.9962515 15,6.17801499 15,5 L5,5 Z M5,3 L15,3 C16.1045695,3 17,3.8954305 17,5 L17,15 C17,17.209139 15.209139,19 13,19 L7,19 C4.790861,19 3,17.209139 3,15 L3,5 C3,3.8954305 3.8954305,3 5,3 Z" fill="#000000" fill-rule="nonzero" transform="translate(10.000000, 11.000000) rotate(-315.000000) translate(-10.000000, -11.000000)" />--}}
{{--												<path d="M20,22 C21.6568542,22 23,20.6568542 23,19 C23,17.8954305 22,16.2287638 20,14 C18,16.2287638 17,17.8954305 17,19 C17,20.6568542 18.3431458,22 20,22 Z" fill="#000000" opacity="0.3" />--}}
{{--											</g>--}}
{{--										</svg>--}}
{{--										<!--end::Svg Icon-->--}}
{{--									</span>--}}
{{--								<span class="menu-text">All Assignments</span>--}}
{{--							</a>--}}
{{--						</li>--}}
{{--                        @endif--}}
                        @if(Auth::user()->hasPermissionTo('view groups') && !Auth::user()->hasRole('User'))
						<li class="menu-item {{request()->is('4')?'menu-item-active':''}}" aria-haspopup="true" data-menu-toggle="hover">
							<a href="{{route('groups.index')}}" class="menu-link">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
												<rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								<span class="menu-text">Groups / Classes</span>
							</a>
						</li>
                        @endif
                        @if(!Auth::user()->hasRole('User'))
                        <li class="menu-item {{request()->is('department')?'menu-item-active':''}}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('department.index')}}" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
												<path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
											</g>
										</svg>
                                        <!--end::Svg Icon-->
									</span>
                                <span class="menu-text">Departments</span>
                            </a>
                        </li>
                        @endif
						@if(Auth::user()->hasPermissionTo('view resources'))
							<li class="menu-item {{request()->is('resources')?'menu-item-active':''}}" aria-haspopup="true" data-menu-toggle="hover">
								<a href="{{url('/resource')}}" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
												<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-text">Resources</span>
								</a>
							</li>
						@endif
                        <li class="menu-item {{request()->is('user-forms')?'menu-item-active':''}}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{url('/user-forms')}}" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
												<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
											</g>
										</svg>
                                        <!--end::Svg Icon-->
									</span>
                                <span class="menu-text">Forms</span>
                            </a>
                        </li>
                        @if(!Auth::user()->hasRole('Admin'))
                        <li class="menu-item menu-item-submenu {{request()->is('toolbox-talk')?'menu-item-active':''}}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{url('toolbox-talk')}}" class="menu-link menu-toggle">
                     <span class="svg-icon menu-icon">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                            <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                                <span class="menu-text">Toolbox Talks</span>
                            </a>
                        </li>
                    @endif
                    @if(Auth::user()->hasPermissionTo('view equipment'))
						<li class="menu-item {{request()->is('equipments')?'menu-item-active':''}}" aria-haspopup="true" data-menu-toggle="hover">
							<a href="{{route('equipments.index')}}" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-left-panel-2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M10,4 L21,4 C21.5522847,4 22,4.44771525 22,5 L22,7 C22,7.55228475 21.5522847,8 21,8 L10,8 C9.44771525,8 9,7.55228475 9,7 L9,5 C9,4.44771525 9.44771525,4 10,4 Z M10,10 L21,10 C21.5522847,10 22,10.4477153 22,11 L22,13 C22,13.5522847 21.5522847,14 21,14 L10,14 C9.44771525,14 9,13.5522847 9,13 L9,11 C9,10.4477153 9.44771525,10 10,10 Z M10,16 L21,16 C21.5522847,16 22,16.4477153 22,17 L22,19 C22,19.5522847 21.5522847,20 21,20 L10,20 C9.44771525,20 9,19.5522847 9,19 L9,17 C9,16.4477153 9.44771525,16 10,16 Z" fill="#000000" />
												<rect fill="#000000" opacity="0.3" x="2" y="4" width="5" height="16" rx="1" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								<span class="menu-text">Equipment</span>
							</a>
						</li>
                        @endif

						<li class="menu-item {{request()->is('changepass')?'menu-item-active':''}}" aria-haspopup="true" data-menu-toggle="hover">
							<a href="{{url('changepass')}}" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Files/Upload.svg-->
										<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-09-093151/theme/html/demo1/dist/../src/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24"/>
												<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
												<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
											</g>
										</svg>
											<!--end::Svg Icon--></span>
										<!--end::Svg Icon-->
									</span>
								<span class="menu-text">Your Profile</span>
							</a>
						</li>
                        @if(Auth::user()->hasRole('User'))
                        <li class="menu-item {{request()->is('worker-print-card')?'menu-item-active':''}}" aria-haspopup="true" data-menu-toggle="hover">
							<a href ="{{url('worker-print-card')}}/{{Auth::user()->user_personel->id}}" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Files/Upload.svg-->
										<span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-04-09-093151/theme/html/demo1/dist/../src/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24"/>
												<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
												<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
											</g>
										</svg>
											<!--end::Svg Icon--></span>
										<!--end::Svg Icon-->
									</span>
								<span class="menu-text">ID Card</span>
							</a>
						</li>

                        @endif
                        <li class="menu-item menu-item-submenu {{request()->is('partnerlib-user')?'menu-item-active':''}}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('partnerlib-user.index')}}" class="menu-link menu-toggle">
                <span class="svg-icon menu-icon">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                            <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                                <span class="menu-text">Partner Library</span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-submenu {{request()->is('faq')?'menu-item-active':''}}" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="{{route('faq.index')}}" class="menu-link menu-toggle">
                <span class="svg-icon menu-icon">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Files/Upload.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                            <rect fill="#000000" opacity="0.3" x="11" y="2" width="2" height="14" rx="1" />
                            <path d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                    <!--end::Svg Icon-->
                </span>
                                <span class="menu-text">FAQ</span>
                            </a>
                        </li>

						<li class="menu-item {{request()->is('dff')?'menu-item-active':''}}" aria-haspopup="true" data-menu-toggle="hover">
							<a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logoutform').submit();" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Box2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M2,13 C2,12.5 2.5,12 3,12 C3.5,12 4,12.5 4,13 C4,13.3333333 4,15 4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 C2,15 2,13.3333333 2,13 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
												<rect fill="#000000" opacity="0.3" x="11" y="2" width="2" height="14" rx="1" />
												<path d="M12.0362375,3.37797611 L7.70710678,7.70710678 C7.31658249,8.09763107 6.68341751,8.09763107 6.29289322,7.70710678 C5.90236893,7.31658249 5.90236893,6.68341751 6.29289322,6.29289322 L11.2928932,1.29289322 C11.6689749,0.916811528 12.2736364,0.900910387 12.6689647,1.25670585 L17.6689647,5.75670585 C18.0794748,6.12616487 18.1127532,6.75845471 17.7432941,7.16896473 C17.3738351,7.57947475 16.7415453,7.61275317 16.3310353,7.24329415 L12.0362375,3.37797611 Z" fill="#000000" fill-rule="nonzero" />
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
								<span class="menu-text">Log Out</span>
							</a>
						</li>
					</ul>
					<!--end::Menu Nav-->

				</div>
				<!--end::Menu Container-->
			</div>
			<!--end::Aside Menu-->
		</div>
		<!--end::Aside-->
		<!--begin::Wrapper-->
		<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
			<!--begin::Header-->
			<div id="kt_header" class="header header-fixed">
				<!--begin::Container-->
				<div class="container-fluid d-flex align-items-stretch justify-content-between">
					<!--begin::Header Menu Wrapper-->
                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                        <!--begin::Header Menu-->
                        <div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
                            <!--begin::Header Nav-->
                            <ul class="menu-nav">
                                <li class="menu-item menu-item-open menu-item-here menu-item-submenu menu-item-rel menu-item-open menu-item-here menu-item-active" data-menu-toggle="click" aria-haspopup="true">

                                </li>

                            </ul>
                            <!--end::Header Nav-->
                        </div>
                        <!--end::Header Menu-->
                    </div>

                    <!--end::Header Menu Wrapper-->
					<!--begin::Topbar-->
					<div class="topbar">

						<!--begin::Notifications-->
						@role('User')
						@include('partial.notification')
						@endrole
						<!--end::Notifications-->

						<!--begin::User-->
						<div class="topbar-item">
							<div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
								<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
								<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{Auth::user()->name}}</span>
								<span class="symbol symbol-35 symbol-light-success">
										<span class="symbol-label font-size-h5 font-weight-bold">=</span>
									</span>
							</div>
						</div>
						<!--end::User-->
					</div>
					<!--end::Topbar-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Header-->
			<!--begin::Content-->
			<div class="content d-flex flex-column flex-column-fluid toollboxx" id="kt_content">
				@yield('subheader')
				@yield('filter')
				@yield('dashboard')
			</div>
			<!--end::Content-->
			<!--begin::Footer-->
			<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
				<!--begin::Container-->
				<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
					<!--begin::Copyright-->
					<div class="text-dark order-2 order-md-1">
						<span class="text-muted font-weight-bold mr-2"></span>
                        <a href="" target="_blank" class="text-dark-75 text-hover-primary"> DFWCZ (c) all rights reserved 2021</a>

                    </div>
					<!--end::Copyright-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Footer-->
		</div>
		<!--end::Wrapper-->
	</div>
	<!--end::Page-->
</div>
<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
	<!--begin::Header-->

	<!--end::Header-->
	<!--begin::Content-->
	<div class="offcanvas-content pr-5 mr-n5">
		<!--begin::Header-->
		<div class="d-flex align-items-center mt-5">
			<div class="symbol symbol-100 mr-5">
				<div class="symbol-label" style="background-image:url({{asset('/')}}{{Auth::user()->photo}})"></div>
				<i class="symbol-badge bg-success"></i>
			</div>
			<div class="d-flex flex-column">
				<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{Auth::user()->name}}</a>
				<div class="text-muted mt-1"></div>
				<div class="navi mt-2">
					<a href="#" class="navi-item">
								<span class="navi-link p-0 pb-2">
									<span class="navi-icon mr-1">
										<span class="svg-icon svg-icon-lg svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
													<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</span>
									<span class="navi-text text-muted text-hover-primary">{{Auth::user()->email}}</span>
								</span>
					</a>
					<form method="POST" action="{{url('/logout')}}" id="logoutform">
						@csrf
						<button type="submit" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</button>
					</form>
				</div>
			</div>
		</div>
		<!--end::Header-->
		<!--begin::Separator-->
		<div class="separator separator-dashed mt-8 mb-5"></div>
		<!--end::Separator-->
		<!--begin::Nav-->

		<!--end::Nav-->
		<!--begin::Separator-->
		<div class="separator separator-dashed my-7"></div>
		<!--end::Separator-->
		<!--begin::Notifications-->

		<!--end::Notifications-->
	</div>
	<!--end::Content-->
</div>
<!-- end::User Panel-->


<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
					<span class="svg-icon">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								<polygon points="0 0 24 0 24 24 0 24" />
								<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
								<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
							</g>
						</svg>
						<!--end::Svg Icon-->
					</span>
</div>
<!--end::Scrolltop-->
<!--begin::Sticky Toolbar-->

<!--end::Sticky Toolbar-->
<!--begin::Demo Panel-->


<script> var HOST_URL = "https://keenthemes.com/metronic/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{asset('assets/plugins/global/plugins.bundle.js?v=7.0.3')}}"></script>
<script src="{{asset('assets/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.3')}}"></script>
<script src="{{asset('assets/js/scripts.bundle.js?v=7.0.3')}}"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->
<script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.3')}}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('assets/js/pages/widgets.js?v=7.0.3')}}"></script>
<!--end::Page Scripts-->
@yield('js')
</body>
<!--end::Body-->
</html>
@if(Session::has('errormsg'))
	<script>

		toastr.error('','{{Session::get('errormsg')}}');
	</script>
@endif
@if(Session::has('succesmsg'))
	<script>

		toastr.success('','{{Session::get('succesmsg')}}');
	</script>
@endif
@if(Session::has('warnmsg'))
	<script>

		toastr.warning('','{{Session::get('warnmsg')}}');

	</script>
@endif
