@extends('master.layout')

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
                    <h5 class="text-dark font-weight-bold my-2 mr-5 text-uppercase">Companies</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{url('/master/dashboard')}}" class="text-muted">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('/master/companies')}}" class="text-muted">companies</a>
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
    <div class="modal fade w-100" id="addCompany" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #4a4e6b;">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Company</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close text-white"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <form class="form" action="{{route('master.companies.store')}}" method="post"  enctype="multipart/form-data" >
                                @csrf
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="companyName">Company Name</label>
                                            <div class="input-group">
                                                <input type="text" name="name" placeholder="Canvasolution" class='form-control' required>
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <label for="description">Email</label>
                                            <div class="input-group">
                                                <input type="email" name="email"  cols="30" rows="10" class="form-control" required/>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="description">Password</label>
                                            <div class="input-group">
                                                <input type="password" name="password"  cols="30" rows="10" class="form-control" required/>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="description">Logo</label>
                                            <div class="input-group">
                                                <input class="form-control" type="file" name="clogo"  required/>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="description">Description</label>
                                            <div class="input-group">
                                                <textarea class="form-control" name="description" id="description" cols="30" rows="10" required style="resize:none;width:100%;"></textarea>
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
    <div class="modal fade w-100" id="editCompany" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #4a4e6b;">
                    <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Company</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i aria-hidden="true" class="ki ki-close text-white"></i>
                    </button>
                </div>
                <div class="modal-body p-0">
                    <div class="row">
                        <div class="col-12">
                            <form class="form"  method="post" action="" id="edit-form" enctype="multipart/form-data">
                                <div class="card-body">
                                    @method('PUT')
                                    @csrf
                                    <input type="hidden" name="edit-id" >
                                    <div class="form-group row">
                                        <div class="col-12">
                                            <label for="companyName">Company Name</label>
                                            <div class="input-group">
                                                <input type="text" name="name" id="edit-name" placeholder="Company Name" class='form-control' >
                                            </div>

                                        </div>
                                        <div class="col-12">
                                            <label for="description">Email</label>
                                            <div class="input-group">
                                                <input type="email"  id="edit-email" placeholder="Company Name" class='form-control' readonly>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="description">Logo</label>
                                            <div class="input-group">
                                           <input type="file" name="edit_logo" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="description">Description</label>
                                            <div class="input-group">
                                                <textarea name="description" id="edit-description" cols="30" rows="10" class="form-control" style="resize:none;width:100%;"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="companyName">Status</label>
                                            <div class="input-group">
                                                <select class="form-control" name="status" id="edit-status">
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
                        <h3 class="card-label">
                            <span class="d-block text-muted pt-2 font-size-sm"></span></h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Dropdown-->

                        <!--end::Dropdown-->
                        <!--begin::Button-->
                        <a href="#" class="btn btn-primary font-weight-bolder" data-toggle="modal" data-target="#addCompany">
											<span class="svg-icon svg-icon-md">
											<!--	begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">-->
													<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
														<rect x="0" y="0" width="24" height="24" />
														<circle fill="#000000" cx="9" cy="15" r="6" />
														<path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3" />
													</g>
												</svg>
           <!--                                     end::Svg Icon-->
											</span>Add New Company</a>
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
                            <th title="Field #1">ID</th>
                            <th title="Field #2">Name</th>
                            <th title="Field #3">Secret Login</th>
                            <th title="Field #4">Logo</th>
                            <th title="Field #5">Description</th>
                            <th title="Field #6">Status</th>
                            <th title="Field #7">Created On</th>
                            <th title="Field #8">Edit</th>
                            <th title="Field #9">Action</th>



                        </tr>
                        </thead>
                        <tbody>

                        @foreach($companies as $companie)
                        <tr>
                            <td>{{$companie->id}}</td>
                            <td>{{$companie->name}}</td>
                            <td><a href="{{url('master/secret/login')}}/{{$companie->admin->id}}" target="_blank"><i class="fa fa-eye"></i></a></td>
                            <td><img src="{{asset('company/logos')}}/{{$companie->logo}}" height="70px" width="70px"></td>
                            <td>{{$companie->description}}</td>
                            <td>{{$companie->status}}</td>
                            <td >{{$companie->created_at}}</td>
                            <td><a class="btn btn-primary font-weight-bolder " onclick="editcomp({{$companie->id}})" data-id="{{$companie->id}}" data-toggle="modal" data-target="#editCompany"><i class="fa fa-edit"></i></a></td>

                            <td><form action="{{ route('master.companies.destroy',$companie->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit"><i class="fa fa-trash"></i></button>
                                </form></td>

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

       function editcomp(id){


           // alert(id);
           var host = "{{url('master/companies')}}"
           var id=parseInt(id);
           var url=host;
           var url2=host+'/'+id;
           $.ajax({
               type: "GET",
               url: url + '/' + id + '/edit',
               data:{id:id},
               cache: false,
               success: function(data){

                   var dataa= data.company;
                   console.log(data.companylog);
                   $('#edit-id').val(dataa.id);
                   $('#edit-form').attr('action',url2);
                   $('#edit-name').val(dataa.name);
                   $('#edit-email').val(data.companylog);
                   $('#edit-description').val(dataa.description);
                   $('#edit-status').val(dataa.status);
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
