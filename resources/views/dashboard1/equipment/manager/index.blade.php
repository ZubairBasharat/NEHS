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
                    <h5 class="text-dark font-weight-bold my-2 mr-5 text-uppercase">Equipments</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{url('/')}}" class="text-muted">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('/equipments')}}" class="text-muted">Equipments</a>
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
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Equipments</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close text-white"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <form class="form" action="{{route('equipments.create')}}">
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
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Equipment</h5>
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
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Equipment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close text-white"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <form class="form"  method="post" action="{{route('equipments.assigns')}}" >
                                <div class="card-body">
                                    @csrf

                                        <div class="col-12">
                                            <label for="CertificateName">Equipment</label>
                                            <select class="form-control" name="equipment" required>
                                                <option value="" disabled selected readonly>choose</option>
                                                @foreach($equipments as $equipment)
                                                <option value="{{$equipment->id}}">{{$equipment->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <label for="CertificateName">Worker</label>
                                            <select class="form-control" name="worker" required>
                                                <option value="" disabled selected readonly>choose</option>
                                                @foreach($workers as $worker)
                                                    <option value="{{$worker->id}}">{{$worker->first_name}} {{$worker->last_name}}</option>
                                                @endforeach
                                            </select>
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
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title">
                        <h3 class="card-label">Equipment Data
                        </h3>
                    </div>
                    <div class="card-toolbar">
                    @if(Auth::user()->hasPermissionTo('add equipment'))
                        <!--begin::Button-->
                        <a href="#" class="btn btn-primary font-weight-bolder mx-2 my-2" data-toggle="modal" data-target="#addEquipment">
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
											</span>New Equipment</a>
                        @endif
                        @if(Auth::user()->hasPermissionTo('assign equipment'))
                            <a href="#" class="btn btn-primary font-weight-bolder mx-2 my-2" data-toggle="modal" data-target="#assignEquipment">
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
											</span>Assign Equipment</a>
                        <!--end::Button-->
                        @endif

                        <!--begin::Dropdown-->
                        <div class="dropdown dropdown-inline mx-2 my-2">
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
                                        <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-print"></i>
																</span>
                                            <span class="navi-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-copy"></i>
																</span>
                                            <span class="navi-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-excel-o"></i>
																</span>
                                            <span class="navi-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
																<span class="navi-icon">
																	<i class="la la-file-text-o"></i>
																</span>
                                            <span class="navi-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
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
                            <th title="Field #5">Added_at</th>
                            @if(Auth::user()->hasPermissionTo('edit equipment'))

                            <th title="Field #6">Edit</th>
                            @endif
                            @if(Auth::user()->hasPermissionTo('delete equipment'))

                            <th title="Field #7">Delete</th>
                                @endif
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($equipments as $equipment)
                            <tr>
                                {{-- <td>{{$companie->id}}</td> --}}
                                <td>{{$equipment->name}}</td>
                                <td>{{$equipment->descr}}</td>
                                <td>{{$equipment->status}}</td>
                                <td >{{$equipment->created_at}}</td>
                                @if(Auth::user()->hasPermissionTo('edit equipment'))

                                <td><a class="btn btn-primary font-weight-bolder " onclick="editcomp({{$equipment->id}})" data-id="{{$equipment->id}}" data-toggle="modal" data-target="#editEquipment"><i class="fa fa-edit"></i></a></td>
                                @endif
                                @if(Auth::user()->hasPermissionTo('delete equipment'))

                                <td><form action="{{ route('equipments.destroy',$equipment->id)}}" method="post">
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

        function editcomp(idd){


            // alert(id);

            var host = "{{url('equipments')}}";
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
