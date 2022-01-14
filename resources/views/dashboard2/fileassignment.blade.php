@extends('layout.dashadmin')


@section('css')
    <style>
        .save-template{
            display:none !important;
        }
    </style>
@endsection
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
        <div class="d-flex align-items-center flex-wrap mr-2">
            <!--begin::Page Title-->
            {{--<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5 text-uppercase">Video Library</h5>--}}
            <!--end::Page Title-->
            <!--begin::Actions-->
            <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>


            <!--end::Actions-->
        </div>
        <!--end::Info-->
        <!--begin::Toolbar-->

    </div>
</div>
<!--end::Subheader-->
@endsection


@section('dashboard')
    <!--begin::Entry-->


        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">

                    <div class="card-toolbar">


                        <!--end::Model-->
                        @if(session('success_msg'))
                            <div class="alert alert-success col-md-12 mb-1 mt-1">
                                {{ session('success_msg') }}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Search Form-->
                    <!--begin::Search Form-->
{{--                    <div class="mb-7 mt-7">--}}
{{--                        <div class="row align-items-center">--}}
{{--                            <div class="col-lg-9 col-xl-8 mx-auto d-block">--}}
{{--                                <div class="row align-items-center">--}}

{{--                                    <form class="form" id="videoform" action="{{url('admin/add-f-assignment')}}" method="POST" enctype="multipart/form-data">--}}
{{--                                        @csrf--}}
{{--                                        <div class="card-body">--}}
{{--                                            <div class="form-group row">--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <h1 class="text-center">Add File Assignment</h1>--}}

{{--                                                    <input type="hidden" name="id" value="{{$id}}">--}}
{{--                                                </div>--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <label for="videoTitle">Title</label>--}}
{{--                                                    <div class="input-group">--}}
{{--                                                        <input type="text" name="title" required placeholder="Enter  title" class='form-control' id="videoTitle">--}}
{{--                                                    </div>--}}
{{--                                                    <span class="form-text text-muted">Please Enter your Title</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <label for="description">Description</label>--}}
{{--                                                    <div class="input-group">--}}
{{--                                                        <textarea  name="description" id="description" cols="30" rows="10" class="form-control" style="resize:none;width:100%;"></textarea>--}}
{{--                                                    </div>--}}
{{--                                                    <span class="form-text text-muted">Please Enter your description 1000/1500</span>--}}
{{--                                                </div>--}}
{{--                                                <div class="col-12">--}}
{{--                                                    <label for="videoUpload">File Upload</label>--}}
{{--                                                    <div class="input-group">--}}
{{--                                                        <input type="file" required="" name="file" id="videoUpload" class='form-control'>--}}
{{--                                                    </div>--}}
{{--                                                    <span class="form-text text-muted">Please Upload  File</span>--}}
{{--                                                </div>--}}


{{--                                            </div>--}}
{{--                                        </div>--}}

{{--                                        <br>--}}
{{--                                        <div class="card-footer">--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-lg-12">--}}
{{--                                                    <button type="reset" class="btn btn-primary mr-2" data-dismiss="modal">Close</button>--}}
{{--                                                    <input type="submit" name="submit" class="btn btn-secondary" value="Save">--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}



                    <form action="{{url('admin/add-f-assignment')}}" method="post" id="ex_form" >
                        @csrf
                        <input type="text" class="form-control f-name" placeholder="Enter Name" name="f_name" required >
                        <div id="build-wrap"></div>
                        <div class="row">
                            {{--<div class="col-md-6"></div>--}}
                            <div class="setDataWrap col-md-12">


                                <input type="hidden" name="id" value="{{$id}}">
                                <input type="hidden" name="formm" id="insert">
                                <input type="hidden" name="jsondata" id="insert-json">
                                <input type="hidden" name="language" value="{{$language}}">


                                {{-- <button id="getXML" type="button">Get XML Data</button>--}}
                                <button class="btn btn-success col-md-3" id="getJSON" type="button" style="float:right;">Create form</button>
{{--                                <button id="getJS" type="button">Get JS Data</button>--}}
{{--                                <button id="setData" type="button">Set Data</button>--}}
                            </div>
                        </div>
                    </form>



                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
    <!--end::Entry-->

@endsection


@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/file-uploader/5.16.2/fine-uploader.min.js" integrity="sha512-8H6Fe/2QnJgxNhCOgnsDHBslpz3XNfWljueeGAAgfJY02jT9SYo9hFAFmbcgi6+KPNsSVPUHi2hSjWpjZIdeDg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        // jQuery(function($) {
        //     $(document.getElementById('fb-editor')).formBuilder();
        // });


        jQuery(function($) {
            var fbEditor = document.getElementById('build-wrap');
            var formBuilder = $(fbEditor).formBuilder();

            var formData = '[{"type":"header","subtype":"h1","label":"Header","access":false},{"type":"paragraph","subtype":"p","label":"Paragraph","access":false},{"type":"textarea","required":false,"label":"Text Area","className":"form-control","name":"textarea-1623742477289","access":false,"value":"ddsfsdfds","subtype":"textarea"},{"type":"text","required":false,"label":"name","className":"form-control","name":"text-1623742476530","access":false,"value":"fdsfsdfsdf","subtype":"text"},{"type":"date","required":false,"label":"Date Field","className":"form-control","name":"date-1623742562054","access":false,"value":"2021-06-17"}]';

            // document.getElementById('setData').addEventListener('click', function() {
            //     formBuilder.actions.setData(formData);
            // });

            document.getElementById('getJSON').addEventListener('click', function() {
                // alert(formBuilder.actions.getData('json'));
                const code = document.getElementById("markup");
                const formData =formBuilder.actions.getData('json');
                const addLineBreaks = html => html.replace(new RegExp("><", "g"), ">\n<");

                // Grab markup and escape it
                const $markup = $('<p>');
                $markup.formRender({ formData });

                // set < code > innerText with escaped markup
                // code.innerText = addLineBreaks($markup.formRender("html"));
                var full_form =addLineBreaks($markup.formRender("html"));
                // $('#apendd').append(full_form);
                $('#insert').val(full_form);

                var json_form=formBuilder.actions.getData('json');
                $('#insert-json').val(json_form);

                if($('.f-name').val() == ''){
                    alert('Please Fill Form Name Field');
                }else{
                    $('#ex_form').submit();

                }
            });
            // document.getElementById('getJS').addEventListener('click', function() {
            //     var full_form=formBuilder.actions.getData('json');
            //     $('#insert').val(full_form);
            //     alert(full_form);
            //
            //     console.log(formBuilder.actions.getData());
            // });

        });



    </script>

@endsection
