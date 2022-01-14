@extends('layout.dashadmin')


@section('button-toggle-mobile')
    <!--begin::Toggle-->
    <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
        <span class="svg-icon svg-icon svg-icon-xl">
            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
                    <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
                </g>
            </svg>
            <!--end::Svg Icon-->
        </span>
    </button>
    <!--end::Toolbar-->
@endsection

@section('subheader')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
                <!--end::Page Title-->
                <!--begin::Actions-->
                <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>


                <!--end::Actions-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->
            <div class="d-flex align-items-center">
                <!--begin::Actions-->



                <!--end::Actions-->
                <!--begin::Dropdowns-->

                <!--end::Dropdowns-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
@endsection
@section('dashboard')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Dashboard-->
            <!--begin::Row-->

            <!--end::Row-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-8">
                    <img src="{{URL::asset('/images/videolib2.png')}}" style="width:100%; height: 475px !important;" class="img-fluid" />
                    <div class="col-md-12 overlay-text"  style="height: 110px;">
                        <h2 class="text-white gr-heading">MASTER ADMINISTRATION PAGE</h2>
                        <p class="text-white">MANAGE - CREATE - ASSIGN - BUILD - REPORTS - ANALYTICS AND MORE</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <a href="{{url('partnerlibrary')}}">
                    <img src="{{URL::asset('/images/22.jpg')}}" style="width:100%; height:475px;" class="img-fluid" />
                    <div class="col-md-12 overlay-text">
                        <h2 class="text-white gr-heading">Partners</h2>
                        <p class="text-white">Highly Recommended From Industry Professionals</p>
                    </div>
                    </a>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-md-4">
                    <a href="{{url('manager')}}">
                    <img src="{{URL::asset('/images/3.jpg')}}" style="width:100%; height: 205px;" class="img-fluid" />
                    <div class="col-md-12 overlay-text" style="height: 110px;">
                        <h2 class="text-white gr-heading">MANAGERS</h2>
                        <p class="text-white">IMPLEMENT / TRACK / TRAINING
                            REPORTS AND DOCUMENTATION</p>
                    </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{url('admin-resources')}}">
                    <img src="{{URL::asset('/images/44.jpg')}}" style="width:100%; height: 205px;" class="img-fluid" />
                    <div class="col-md-12 overlay-text" style="height: 110px;">
                        <h2 class="text-white gr-heading">HUMAN RESOURCE</h2>
                        <p class="text-white">MANAGING, RECRUITING, BENEFITS
                            AND TRAINING SOLUTIONS</p>
                    </div>
                    </a>

                </div>
                <div class="col-md-4">
                    <a href="{{url('')}}">
                    <img src="{{URL::asset('/images/55.jpg')}}" style="width:100%; height: 205px;" class="img-fluid" />
                    <div class="col-md-12 overlay-text" style="height: 110px;">
                        <h2 class="text-white gr-heading">CHARTS AND ANALYTICS</h2>
                        <p class="text-white">COMPANY / TEAM PERFORMANCE STATS</p>
                    </div>
                    </a>
                </div>


            </div>
            <!--end::Row-->
            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection
