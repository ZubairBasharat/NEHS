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
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-2 mr-5 text-uppercase">all managers</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{url('/dashboard2')}}" class="text-muted">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('/manager')}}" class="text-muted">Managers</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->

        </div>
    </div>
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
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">
                            <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline mr-2">
                            <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<span class="svg-icon svg-icon-md">
													<!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
													<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
														<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															<rect x="0" y="0" width="24" height="24" />
															<path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
															<path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
														</g>
													</svg>
                                                    <!--end::Svg Icon-->
												</span>Export</button>
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi flex-column navi-hover py-2">
                                    <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                                    <li class="navi-item">
                                        <a href="{{route('Export_Record',['XLSX','manager'])}}" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-excel-o"></i>
																</span>
                                            <span class="navi-text">XLSX</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="{{route('Export_Record',['CSV','manager'])}}" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-text-o"></i>
																</span>
                                            <span class="navi-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="{{route('Export_Record',['pdf','manager'])}}" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-pdf-o"></i>
																</span>
                                            <span class="navi-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>
                        <!--end::Dropdown-->
                        <!--begin::Button-->
                        <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <!--begin::Search Form-->
                    <div class="mb-7">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="row align-items-center">
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="Search..." id="kt_datatable_search_query" />
                                            <span>
																	<i class="flaticon2-search-1 text-muted"></i>
																</span>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-2 my-md-0">
                                        <div class="d-flex align-items-center">
                                            <label class="mr-3 mb-0 d-none d-md-block">Status:</label>
                                            <select class="form-control" id="kt_datatable_search_status">
                                                <option value="">All</option>
                                                <option value="1">Active</option>
                                                <option value="0">Deactive</option>
                                                {{--<option value="3">Canceled</option>--}}
                                                {{--<option value="4">Success</option>--}}
                                                {{--<option value="5">Info</option>--}}
                                                {{--<option value="6">Danger</option>--}}
                                            </select>
                                        </div>
                                    </div>
                                    {{--<div class="col-md-4 my-2 my-md-0">--}}
                                    {{--<div class="d-flex align-items-center">--}}
                                    {{--<label class="mr-3 mb-0 d-none d-md-block">Type:</label>--}}
                                    {{--<select class="form-control" id="kt_datatable_search_type">--}}
                                    {{--<option value="">All</option>--}}
                                    {{--<option value="1">Online</option>--}}
                                    {{--<option value="2">Retail</option>--}}
                                    {{--<option value="3">Direct</option>--}}
                                    {{--</select>--}}
                                    {{--</div>--}}
                                    {{--</div>--}}
                                </div>
                            </div>
                            {{--<div class="col-lg-3 col-xl-4 mt-5 mt-lg-0">--}}
                            {{--<a href="#" class="btn btn-light-primary px-6 font-weight-bold">Search</a>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <thead>
                        <tr>
                            {{--<th title="Field #1">ID</th>--}}
                            <th title="Field #2">Name</th>
                            <th title="Field #3">Email</th>
                            <th title="Field #3">Last Auth</th>
                            <th title="Field #4">Status</th>
                            <th title="Field #5">Created On</th>
                            <th title="Field #6">Edit</th>
                            <th title="Field #7">Action</th>

                            {{--<th title="Field #8">Type</th>--}}

                        </tr>
                        </thead>
                        <tbody>

                        @foreach($managers as $manager)
                            @if($manager->hasRole('User') || $manager->hasRole('Admin'))
                                @else
                            <tr>
                                {{--<td>{{$companie->id}}</td>--}}
                                <td>{{$manager->name}}@if($manager->email_verified_at == null) <br> <p class="text-danger">Not Active Yet<p></p> @endif</td>
                                <td>{{$manager->email}}</td>
                                <td>{{$manager->last_auth}}</td>
                                <td>{{$manager->status}}</td>
                                <td >{{$manager->created_at}}</td>
                                <td><a class="btn btn-primary font-weight-bolder " onclick="editcomp({{$manager->id}})" data-id="{{$manager->id}}" data-toggle="modal" data-target="#edit_manager"><i class="fa fa-edit"></i></a></td>

                                <td><form action="{{ route('manager.destroy',$manager->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i class="fa fa-trash"></i></button>
                                    </form></td>

                            </tr>
                            @endif
                        @endforeach


                        </tbody>
                    </table>
                    <!--end: Datatable-->
                    <div class="modal fade w-100" id="edit_manager" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background: #4a4e6b;">
                                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Manager</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close text-white"></i>
                                    </button>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="row">
                                        <div class="col-12">
                                            <form class="form"  method="post" action="" id="edit-form">
                                                <div class="card-body">
                                                    @method('PUT')
                                                    @csrf
                                                    <input type="hidden" name="edit_id" id="edit-id" >
                                                    <div class="form-group row">
                                                        <div class="col-12">
                                                            <label for="companyName">Name</label>
                                                            <div class="input-group">
                                                                <input type="text" name="name" id="edit-name" placeholder="Canvasolution" class='form-control' id="companyName">
                                                            </div>

                                                        </div>
                                                        <div class="col-12">
                                                            <label for="description">Email</label>
                                                            <div class="input-group">
                                                                <input name="gmail" id="edit-email" cols="30" rows="10" class="form-control" style="resize:none;width:100%;" readonly/>
                                                            </div>

                                                        </div>
                                                        <div class="col-12">
                                                            <label for="description">Phone</label>
                                                            <div class="input-group">
                                                                <input name="edit_phone" id="edit-phone" cols="30" rows="10" class="form-control" style="resize:none;width:100%;" />
                                                            </div>

                                                        </div>
                                                        <div class="col-12">
                                                            <label for="description">Joined Date</label>
                                                            <div class="input-group">
                                                                <input  id="edit-date" cols="30" rows="10" class="form-control" style="resize:none;width:100%;" readonly/>
                                                            </div>

                                                        </div>
                                                        <div class="col-12">
                                                            <label for="description">Last Auth</label>
                                                            <div class="input-group">
                                                                <input id="edit-auth" cols="30" rows="10" class="form-control" style="resize:none;width:100%;" readonly/>
                                                            </div>

                                                        </div>

                                                        <div class="col-12">
                                                            <label for="companyName">Status</label>
                                                            <div class="input-group">
                                                                <select class="form-control" name="edit_status" id="edit_status">
                                                                    <option value="" disabled selected readonly="">Choose</option>
                                                                    <option value="1">Active</option>
                                                                    <option value="0">Deactive</option>
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

                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection
@section('js')


    <script>

        function editcomp(id){


            // alert(id);
            var host = "{{url('manager')}}"
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
                    $('#edit-id').val(id);
                    $('#edit-form').attr('action',url2);
                    $('#edit-name').val(data.name);
                    $('#edit-email').val(data.email);
                    $('#edit-auth').val(data.last_auth);
                    $('#edit-date').val(data.created_at);
                    $('#edit-phone').val(data.phone);
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
                            field: 'Status',
                            title: 'status',

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
                                return '<span class="label font-weight-bold label-lg' + sstatus[row.Status].class + ' label-inline">' + sstatus[row.Status].title + '</span>';
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
