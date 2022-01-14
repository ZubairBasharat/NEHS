@extends('layout.dashadmin')

@section('css')
    <style>
        .save-template{
            display:none !important;
        }
    </style>
@endsection
@section('dashboard')
    <form action="{{route('admin.ack-form.update')}}" method="post" id="ex_form" >
        @csrf
    <input type="text" class="form-control f-name" placeholder="Enter Form Name" value="{{$data->form_name}}" name="f_name" required readonly >
<div id="build-wrap"></div>
<div class="row">
    {{--<div class="col-md-6"></div>--}}
<div class="setDataWrap col-md-12">





    <button class="btn btn-success col-md-3" id="getJSON" type="button" style="float:right;">Update</button>
    <input type="hidden" name="form_id" value="{{$data->id}}">
    <input type="hidden" name="formm" id="insert">
    <input type="hidden" name="course_id" value="{{$course_id}}">
    <input type="hidden" name="jsondata" id="insert-json">
    <input id="set" type="hidden" value="{{$data->json}}">
</div>
</div>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>

    <script>


        jQuery(function($) {
            var fbEditor = document.getElementById('build-wrap');
            var formBuilder = $(fbEditor).formBuilder();
            var editdata=$('#set').val();

            setTimeout(function(){ formBuilder.actions.setData(editdata); }, 3000);

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

        });



    </script>

@endsection
