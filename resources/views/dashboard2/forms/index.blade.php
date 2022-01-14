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
                    <h5 class="text-dark font-weight-bold my-2 mr-5 text-uppercase">Form</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{url('/dashboard2')}}" class="text-muted">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('/form')}}" class="text-muted">Forms</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

        </div>
    </div>
    <!-- Modal-->
    <div class="modal fade w-100" id="assigntoproj" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #4a4e6b;">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Assign To</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close text-white"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <form class="form"  method="post" action="{{route('form.addto')}}" >
                                <div class="card-body">
                                    @csrf
                                    <input class="form-id" type="hidden"  name="form_id" value="" >
                                    <input type="hidden"  name="type" value="project" >
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="companyName">project</label>
                                            <div class="input-group">
                                                <select class="form-control" name="project" required>
                                                    <option value="" readonly disabled selected>Select</option>
                                                    @foreach($projects as $project)
                                                    <option value="{{$project->id}}">{{$project->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="reset" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-secondary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--end::Model-->
    <!-- Modal-->
    <div class="modal fade w-100" id="assigntoemp" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #4a4e6b;">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Assign To</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close text-white"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <form class="form"  method="post" action="{{route('form.addto')}}" >
                                <div class="card-body">
                                    @csrf
                                    <input class="form-id" type="hidden"  name="form_id" value="" >
                                    <input  type="hidden"  name="type" value="worker" >
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="companyName">Employee</label>
                                            <div class="input-group">
                                                <select class="form-control" name="worker_id" required>
                                                    <option value="" readonly disabled selected>Select</option>
                                                    @foreach($employee as $employe)
                                                    <option value="{{$employe->id}}">{{$employe->name}}--{{$employe->email}}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="reset" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-secondary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--end::Model--> <!-- Modal-->
    <div class="modal fade w-100" id="type" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #4a4e6b;">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Choose Who Fill</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close text-white"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <form class="form"  method="post" action="{{route('form.addto')}}" >
                                <div class="card-body">
                                    @csrf
                                    <input class="form-id" type="hidden"  name="form_id" value="" >
                                    <input  type="hidden"  name="type" value="whofill" >
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="companyName">Who Fill</label>
                                            <div class="input-group">
                                                <select class="form-control" name="whofill" required>
                                                    <option value="0" >No One</option>
{{--                                                    <option value="1" >User</option>--}}
                                                    <option value="2" >Manager</option>

                                                </select>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <button type="reset" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-secondary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--end::Model-->
    <!--end::Subheader-->
@endsection

@section('dashboard')
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Notice-->

            <!--end::Notice-->
            <!--begin::Card-->
            <div class="card card-custom">



{{--                        <tbody>--}}
{{--                        @php $counter=1;  @endphp--}}
{{--                        @foreach($forms as $form)--}}
{{--                            <tr>--}}
{{--                                <td>{{$counter}}</td>--}}
{{--                                <td>{{$form->form_name}}</td>--}}
{{--                                <td ><a href="{{route('form.view',$form->id)}}" class="btn btn-info">View</a>--}}
{{--                                </td>--}}
{{--                                <td>--}}
{{--                                    <a href="{{route('form.addto',$form->id)}}" class="btn btn-primary">Add To Assign Job</a>--}}
{{--                                    <a  class="btn btn-primary" data-toggle="modal" data-target="#assigntoproj" onclick="assign({{$form->id}})">Assign To Project</a>--}}
{{--                                </td>--}}

{{--                                <td >{{$form->created_at}}</td>--}}
{{--                                <td ><a href="{{url('form/edit/'.$form->id)}}"><i class="fa fa-edit"></i></a></td>--}}
{{--                                <td><form action="{{ route('form.destroy',$form->id)}}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        <button type="submit"><i class="fa fa-trash"></i></button>--}}
{{--                                    </form></td>--}}
{{--                                <td></td>--}}
{{--                            </tr>--}}
{{--                            @php  $counter++; @endphp--}}
{{--                        @endforeach--}}


{{--                        </tbody>--}}



                <div class="card-body">
                    <!--begin::Search Form-->
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query2" />
                                            <span>
                                                <i class="flaticon2-search-1 text-muted"></i>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <h1 style='background:skyblue; color:white;'>Forms</h1>

                    <!--begin: Datatable-->
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable2">
                        <thead>
                        <tr>

                            <th title="Field #1" >Files</th>
                            <th title="Field #2">view Signatures</th>
                            <th title="Field #3">To Project</th>
                            <th title="Field #4">To Employee</th>
                            <th title="Field #5">Type</th>
                            <th title="Field #6">Edit</th>
                            <th title="Field #7">Delete</th>
                            <th title="Field #8"></th>


                        </tr>
                        </thead>
                        <tbody>

                        @foreach($folders as $folder)
{{--                            @if(count($folder->resources) > 0 )--}}
{{--                                <tr style="background-color:lightgray !important;">--}}
{{--                                    <td><h5 style="color:white;"><i class="fa fa-folder"></i> {{$folder->name}}</h5></td>--}}
{{--                                    <td></td>--}}
{{--                                    <td></td>--}}
{{--                                    <td></td>--}}
{{--                                    <td></td>--}}
{{--                                    <td></td>--}}
{{--                                </tr>--}}
{{--                            @endif--}}

                            @foreach($folder->resources as $files)

                                <tr>
                                    <td><a href="{{route('admin-resources.edit',$files->id)}}" >{{$files->name}}</a></td>
                                    <td><a href="{{route('v.all.signs',$files->id)}}">view</a></td>
                                    <td>
                                        <a  class="btn btn-primary" data-toggle="modal" data-target="#assigntoproj" onclick="assign({{$files->form_id}})">Assign To Project/Job</a>
                                    </td>
                                    <td>
                                        <a  class="btn btn-primary" data-toggle="modal" data-target="#assigntoemp" onclick="assign({{$files->form_id}})">Assign To Employee</a>
                                    </td>
                                    <td>
                                        <a data-toggle="modal" data-target="#type" onclick="assign({{$files->form_id}})" style="color:#bd93f9; cursor:pointer; ">@if($files->type == '0') -- @elseif($files->type == '1') User @else Manager @endif</a>
                                    </td>
                                    <td ><a href="{{url('form/edit/'.$files->form_id)}}"><i class="fa fa-edit"></i></a></td>
                                    <td><form action="{{ route('admin-resources.destroy',$files->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="border:white !important;"><i class="fa fa-trash" ></i></button>
                                        </form></td>
                                </tr>

                        @endforeach
                            @endforeach


                        </tbody>
                    </table>

                </div>


            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>

    <!--end::Entry-->
@endsection
@section('js')

    <script >

        function assign(id){

            $('.form-id').val(id);

        }

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
                        },
                        {
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
                            field: 'Type',
                            title: 'Type',

                            // callback function support for column rendering
                            template: function(row) {
                                var sstatus = {
                                    1: {
                                        'title': 'Active',
                                        'class': ' label-light-success'
                                    },
                                    0: {
                                        'title': 'Deactive',
                                        'class': ' label-light-danger'
                                    }

                                };
                                return '<span class="label font-weight-bold label-lg' + sstatus[row.Type].class + ' label-inline">' + sstatus[row.Type].title + '</span>';
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
            var demo2 = function() {

                var datatable = $('#kt_datatable2').KTDatatable({
                    data: {
                        saveState: {cookie: false},
                    },
                    search: {
                        input: $('#kt_datatable_search_query2'),
                        key: 'generalSearch'
                    },
                    columns: [
                        {
                            field: 'File',
                            type: 'text',
                        },{
                            field: 'Folder',
                            type: 'text',
                        }
                    ],
                });



                $('#kt_datatable_search_status').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Status');
                });

                $('#kt_datatable_search_type').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Type');
                });
                $('#kt_datatable_search_type2').on('change', function() {
                    datatable.search($(this).val().toLowerCase(), 'Type');
                });

                $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();

            };
            return {
                // Public functions
                init: function() {
                    // init dmeo
                    demo();
                    demo2();
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
