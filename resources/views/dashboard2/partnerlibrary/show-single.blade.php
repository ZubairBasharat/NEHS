@extends('layout.dashadmin')


@section('subheader')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5 text-uppercase">Partner Library</h5>
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
                <div class="dropdown dropdown-inline" data-toggle="tooltip" title="Back" data-placement="left">
                    <a href="" onclick="window.history.go(-1); return false;" class="btn btn-sm btn-secondary" >
                    <span >Back

                        <!--end::Svg Icon-->
                    </span>
                    </a>

                </div>
                <!--end::Dropdowns-->
            </div>
            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
@endsection
@section('dashboard')
    <!--begin::Entry-->
    <div class="row mt-4">


        <div class=" col-md-10 mx-auto d-block">
            <div class="card">

                <div class="card-body">


                    <video src="{{ URL::to('/') }}/assets/patnerlibrary/{{$video->video}}"   controls class="img-fluid" style="width:100%; height:100%;">
                    </video>
                </div>

            </div>
        </div>


    </div>

    <!--end::Entry-->

@endsection
