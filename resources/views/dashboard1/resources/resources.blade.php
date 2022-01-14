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
                    <h5 class="text-dark font-weight-bold my-2 mr-5 text-uppercase">Resources</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{url('/home')}}" class="text-muted">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{url('/resource')}}" class="text-muted">resource</a>
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
            <!--begin::Card-->
            <div class="card card-custom">
                @if(!Auth::user()->hasRole('User'))
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title w-100">

                        <div class="row w-100">
                            <div class="form-group col-md-12">
                                <form  action="{{route('admin-resources.store')}}" method="post">
                                    @csrf

                                    <input type="hidden" name="action" value="0">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="folder_name" placeholder="Folder" required />
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="submit">Add Folder</button>
                                        </div>
                                    </div>
                                </form>
                                <br>
                                <h3>Upload File</h3>
                                <form action="{{route('admin-resources.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="action" value="1">
                                    <div class="input-group">
                                        <select class="form-control" name="folder">
                                            <option value="" disabled selected readonly>Choose-folder</option>
                                            @foreach($folders as $folder)
                                                <option value="{{$folder->id}}">{{$folder->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="input-group">
                                        <input type="file" class="form-control" name="o_file" placeholder="File" />
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="submit">Add File</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
                @endif


                        <div class="card-body">
                            <!--begin::Search Form-->

                            <h1 style='background:skyblue; color:white;'>FOLDERS</h1>

                            <div class="row align-center">

                                @foreach($folders as $folder)
                                    <div class="col-md-4">
                                        <div class="row">
                                            <div class="col-8"> <h4><a  class="showfiles" data-folderid="{{$folder}}"  data-toggle="modal" data-target="#showfiles" style="cursor:pointer; color:lightskyblue;"><i class="fa fa-folder"></i> {{$folder->name}}</a>
                                                </h4></div>
                                            @if(!Auth::user()->hasRole('User'))
                                            <div class="col-4" style="float: right;">
                                                <form action="{{ route('manager.folder.delete',$folder->id)}}" method="post">
                                                    @csrf
                                                    <input type="hidden" value="{{$folder->id}}" name="folder_id">
                                                    <button type="submit" style="border:white !important;"><i class="fa fa-trash" ></i></button>
                                                </form>
                                            </div>
                                                @endif

                                        </div>

                                    </div>
                                @endforeach
                            </div>
                        </div>
        </div>
        <!--end::Container-->
    </div>
        <!-- begin::personel-modal-->
        <div class="modal fade w-100" id="showfiles" data-backdrop="static"  tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background: #4a4e6b;">
                        <h5 class="modal-title text-uppercase text-white" id="exampleModalLabel">Files</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <i aria-hidden="true" class="ki ki-close text-white"></i>
                        </button>
                    </div>
                    <div class="modal-body p-5">
                        <div class="row" id="showajax">

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--end::Model-->
    <!--end::Entry-->
@endsection
@section('js')
    <script >
        // "use strict";
        // Class definition


        $(document).ready(function () {

            $('.showfiles').click(function (event) {

                event.preventDefault();
                var url = "{{route('um-resource.create')}}";

                $.ajax({
                    type: "GET",
                    url: url,
                    data:{folder:$(this).data('folderid')},
                    cache: false,
                    success: function(data){
                        $('#showajax').html(data);

                    }
                });



            });


        });

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
@endsection
