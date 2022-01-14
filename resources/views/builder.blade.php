@extends('layout.dashadmin')

@section('css')
    <style>
        .save-template{
            display:none !important;
        }

    </style>
@endsection
@section('dashboard')

    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <div class="card-header flex-wrap border-0 pt-6 pb-0">
                    <div class="card-title w-100">

                        <div class="row w-100">
                            <div class="form-group col-md-12">
                                <form  action="{{route('admin-resources.store')}}" method="post">
                                    @csrf

                                    <input type="hidden" name="action" value="0">
                                    <div class="input-group">
                                        <input type="hidden" name="type" value="form">
                                        <input type="text" class="form-control" name="folder_name" placeholder="Folder" required autocomplete="off"/>
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" type="submit">Add Folder</button>
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

<br>
<br>



                <form action="{{route('form.show')}}" method="post" id="ex_form" >
        @csrf
    <input type="text" class="form-control f-name" placeholder="Enter Form Name" name="f_name" required autocomplete="off">
                    <select class="form-control folder" name="folder" required>
                        <option value=""  selected readonly>Choose-folder</option>
                        @foreach($folders as $folder)
                            <option value="{{$folder->id}}">{{$folder->name}}</option>
                        @endforeach
                    </select>
<div id="build-wrap"></div>
<div class="row">
    {{--<div class="col-md-6"></div>--}}
<div class="setDataWrap col-md-12">



        <input type="hidden" name="formm" id="insert">
        <input type="hidden" name="jsondata" id="insert-json">

{{-- <button id="getXML" type="button">Get XML Data</button>--}}
    <button class="btn btn-success col-md-3" id="getJSON" type="button" style="float:right;">Create form</button>
{{--    <button id="getJS" type="button">Get JS Data</button>--}}
{{--    <button id="setData" type="button">Set Data</button>--}}
</div>
</div>
    </form>
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
                }else if($('.folder').val() == ''){
                    alert('Please Select Folder');
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
