@extends('layout.dash1')



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
                    <h5 class="text-dark font-weight-bold my-2 mr-5 text-uppercase">Groups</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}" class="text-muted">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('/groups')}}" class="text-muted">Groups</a>
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
    <!-- Modal-->
    <div class="modal fade w-100" id="addEquipment" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #4a4e6b;">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Create Group</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close text-white"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <form class="form" action="{{route('groups.create')}}">
                                <div class="card-body">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="edit-id" >

                                    <div class="col-12">
                                        <label for="CertificateName">Name</label>
                                        <div class="input-group">
                                            <input type="text" name="name" placeholder="Canvasolution" class='form-control' >
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="CertificateName">Description</label>
                                        <div class="input-group">
                                            <input type="text" name="descr"   class='form-control'>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <label for="companyName">Status</label>
                                        <div class="input-group">
                                            <select class="form-control" name="status" >
                                                <option value="1">Active</option>
                                                <option value="0">Deactive</option>
                                            </select>

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
    <div class="modal fade w-100" id="editEquipment" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #4a4e6b;">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Edit</h5>
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
                                    <input type="hidden" name="edit-id" >

                                        <div class="col-12">
                                            <label for="CertificateName">Name</label>
                                            <div class="input-group">
                                                <input type="text" name="edit_name" placeholder="Canvasolution" class='form-control' id="edit_name">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="CertificateName">Description</label>
                                            <div class="input-group">
                                                <input type="text" name="edit_descr"   class='form-control' id="edit_descr">
                                            </div>
                                        </div>

                                    <div class="col-12">
                                        <label for="companyName">Status</label>
                                        <div class="input-group">
                                            <select class="form-control" name="edit_status" id="edit_status">
                                                <option value="1">Active</option>
                                                <option value="0">Deactive</option>
                                            </select>

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
    <div class="modal fade w-100" id="assignEquipment" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #4a4e6b;">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Assign Course To Group</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close text-white"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <form class="form"  method="post" action="{{route('groups.assigns')}}" >
                                <div class="card-body">
                                    @csrf

                                        <div class="col-12">
                                            <label >Groups</label>
                                            <select class="form-control" name="group" required>
                                                <option value="" disabled selected readonly>choose</option>
                                                @foreach($groups as $group)
                                                <option value="{{$group->id}}">{{$group->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label >Course</label>
                                            <select class="form-control" name="course" required>
                                                <option value="" disabled selected readonly>choose</option>
                                                @foreach($course as $cours)
                                                    <option value="{{$cours->id}}">{{$cours->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    <div class="col-12">
                                        <label >Target Finish</label>
                                        <input class="form-control" type="date" name="target_finish" required>
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

    <!-- begin::personel-modal-->
    <div class="modal fade w-100" id="add_remove_employee" data-backdrop="static"  tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document" id="fetch_data">

        </div>
    </div>
    <!--end::Model-->
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
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Groups And Classes
                        </h3>
                    </div>
                    <div class="card-toolbar">

                    @if(Auth::user()->hasPermissionTo('add groups'))
                        <!--begin::Button-->
                        <a href="#" class="btn btn-primary font-weight-bolder my-2 mx-2" data-toggle="modal" data-target="#addEquipment">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<circle fill="#000000" cx="9" cy="15" r="6" />
														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>New Groups</a>
                        @endif
                        @if(Auth::user()->hasPermissionTo('assign group'))
                            <a href="#" class="btn btn-primary font-weight-bolder my-2 mx-2" data-toggle="modal" data-target="#assignEquipment">
											<span class="svg-icon svg-icon-md">
												<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<circle fill="#000000" cx="9" cy="15" r="6" />
														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>
                                                <!--end::Svg Icon-->
											</span>Assign Groups</a>
                        <!--end::Button-->
                        @endif

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

                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!--end::Search Form-->
                    <!--end: Search Form-->
                    <!--begin: Datatable-->
                    <table class="datatable datatable-bordered datatable-head-custom" id="kt_datatable">
                        <thead>
                        <tr>
                            {{-- <th title="Field #1">ID</th> --}}
                            <th title="Field #2">Name</th>
                            <th title="Field #3">Description</th>
                            <th title="Field #4">Status</th>
                            <th title="Field #6">Employees</th>
                            <th title="Field #5">Added_at</th>
                            @if(Auth::user()->hasPermissionTo('edit groups'))
                            <th title="Field #7">Edit</th>
                            @endif
                            @if(Auth::user()->hasPermissionTo('delete groups'))
                            <th title="Field #8">Delete</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($groups as $group)
                            <tr>
                                {{-- <td>{{$companie->id}}</td> --}}
                                <td>{{$group->name}}</td>
                                <td>{{$group->descr}}</td>
                                <td>{{$group->status}}</td>
                                <td><a href="#" onclick="group_employees({{$group->id}})" data-id="{{$group->id}}" data-toggle="modal" data-target="#add_remove_employee" ><i class="fa fa-book"></i> </a></td>
                                <td >{{$group->created_at}}</td>
                                @if(Auth::user()->hasPermissionTo('edit groups'))

                                <td><a class="btn btn-primary font-weight-bolder " onclick="editcomp({{$group->id}})" data-id="{{$group->id}}" data-toggle="modal" data-target="#editEquipment"><i class="fa fa-edit"></i></a></td>
                                @endif
                                @if(Auth::user()->hasPermissionTo('delete groups'))

                                <td><form action="{{ route('groups.destroy',$group->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"><i class="fa fa-trash"></i></button>
                                    </form></td>
                                    @endif

                            </tr>
                        @endforeach


                        </tbody>
                    </table>
                    <!--end: Datatable-->
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

        function group_employees(id){

            var url="{{url('group-workers')}}/"+id;

            $.ajax({
                type: "GET",
                url: url,
                cache: false,
                success: function(data){
                    $('#fetch_data').html(data);

                }
            });
        }

 function editcomp(idd){


            // alert(id);

            var host = "{{url('groups')}}";
            var id=parseInt(idd);
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
                    $('#edit_name').val(data.name);
                    $('#edit_descr').val(data.descr);
                    $('#edit_status').val(data.status);

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
