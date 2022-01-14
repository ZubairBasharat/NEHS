@extends('layout.dashadmin')

@section('header-mobile')
    <!--begin::Logo-->
    <a href="#">
        <img alt="Logo" src="{{asset('assets/media/logos/logo-light.png')}}" class="img-fluid" />
    </a>
    <!--end::Logo-->
    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
        <!--begin::Aside Mobile Toggle-->
        <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
            <span></span>
        </button>
        <!--end::Aside Mobile Toggle-->
        <!--begin::Header Menu Mobile Toggle-->
        <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
            <span></span>
        </button>
        <!--end::Header Menu Mobile Toggle-->
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
@endsection

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
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-2 mr-5 text-uppercase">Users</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            {{--<a href="{{url('/dashboard2')}}" class="text-muted">Add New User</a>--}}
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('/users')}}" class="text-muted">Add New User</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
            <!--begin::Toolbar-->

            <!--end::Toolbar-->
        </div>
    </div>
    <!--end::Subheader-->
@endsection
@section('dashboard')
    <!--begin::Entry-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->

            <div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image:url('{{asset("assets/media/bg/bg-2.jpg")}}');">
                <div class="login-form text-center text-white p-7 position-relative overflow-hidden">
                    <!--begin::Login Sign up form-->
                    <div class="">
                        <div class="mb-20">

                            <p class="opacity-40">Enter Details To Create New User</p>
                        </div>
                        <form method="POST" action="{{ route('users.store') }}">
                            @csrf
                            <div class="form-group">
                                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('name') is-invalid @enderror" type="text" placeholder="name" name="name" value="{{ old('name') }}" required />
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('email') is-invalid @enderror" id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required  autocomplete="off" />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input id="password" type="password" name="password" class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('password') is-invalid @enderror" placeholder="Password"  required />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" id="password-confirm" type="password" placeholder="Confirm Password" name="password_confirmation" required/>
                            </div>

                            <div class="form-group">
                                <select class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" name="role">
                                    <option disabled selected readonly class="text-dark">Select Role</option>
                                    @foreach($rolls as $rol)
                                        <option class="text-dark" value="{{$rol->id}}">{{$rol->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group text-left px-8">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-outline checkbox-white opacity-60 text-white m-0">
                                        {{--<input type="checkbox" name="agree" />--}}
                                        ------------------------------------------------------
                                        <a href="#" class="text-white font-weight-bold ml-1"></a></label>
                                </div>
                                <div class="form-text text-muted text-center"></div>
                            </div>
                            <div class="form-group">
                                <button id="submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2">Create</button>


                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>

@endsection
@section('js')


    <script>

        function editcomp(id){

            var host ="{{url('personnel')}}";
            var id=parseInt(id);
            var url=host;
            var url2=host+'/'+id;

            $.ajax({
                type: "GET",
                url: url + '/' + id + '/edit',
                data:{id:id},
                cache: false,
                success: function(data){
                    // console.log(data);
                    $('#edit-id').val(data.id);

                    $('#edit-form').attr('action',url2);
                    $('#edit-first_name').val(data.first_name);
                    $('#card-first_name').html(data.first_name);
                    $('#card-last_name').html(data.last_name);
                    $('#edit-last_name').val(data.last_name);

                    $('#edit-gender').val(data.gender);
                    $('#edit-email').val(data.email);
                    $('#edit-date_of_birth').val(data.date_of_birth);
                    $('#edit-hire_date').val(data.hire_date);
                    $('#edit-native_language').val(data.native_language);
                    $('#edit-phone').val(data.phone);
                    $('#edit-title').val(data.title);
                    $('#edit-dep_id').val(data.dep_id);
                    $('#edit-job_no').val(data.job_no);
                    $('#edit-type').val(data.type);
                    $('#edit-em_no').val(data.em_no);
                    $('#edit-status').val(data.status);

                }
            });
        }




    </script>
    <script >
        // "use strict";
        // Class definition

        var KTDatatableHtmlTableDemo = function() {
            // Private functions

            // demo initializer
            var demo = function() {

                var datatable = $('#kt_datatable').KTDatatable({
                    data: {
                        saveState: {cookie: false},
                    },
                    search: {
                        input: $('#kt_datatable_search_query'),
                        key: 'generalSearch'
                    },
                    columns: [
                        {
                            field: 'ID',
                            type: 'number',
                        },{
                            field: 'name',
                            type: 'text',
                        },{
                            field: 'description',
                            type: 'text',
                        },
                        {
                            field: 'created_at',
                            type: 'datetime',
                            format: 'YYYY-MM-DD',
                        },
                        {
                            field: 'updated_at',
                            type: 'datetime',
                            format: 'YYYY-MM-DD',
                        }, {
                            field: 'Status',
                            title: 'Status',

                            // callback function support for column rendering
                            template: function(row) {
                                var status = {
                                    1: {
                                        'title': 'Active',
                                        'class': ' label-light-success'
                                    },
                                    0: {
                                        'title': 'Deactive',
                                        'class': ' label-light-danger'
                                    }

                                };
                                return '<span class="label font-weight-bold label-lg' + status[row.Status].class + ' label-inline">' + status[row.Status].title + '</span>';
                            },
                        },
                    ],
                });



                $('#kt_datatable_search_status').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_search_type').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Type');
                });

                $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

            };

            return {
                // Public functions
                init: function() {
                    // init dmeo
                    demo();
                },
            };
        }();

        jQuery(document).ready(function() {
            KTDatatableHtmlTableDemo.init();
        });

    </script>
    <!--begin::Page Scripts(used by this page)-->
    {{--<script src="assets/js/pages/crud/ktdatatable/advanced/column-width.js?v=7.0.3"></script>--}}
    <!--end::Page Scripts-->


@endsection