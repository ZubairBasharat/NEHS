@extends('layout.dashadmin')

@section('css')
    <style>
        .save-template{
            display:none !important;
        }
    </style>
@endsection
@section('dashboard')


<div id="build-wrap"></div>
<div class="row">
    {{--<div class="col-md-6"></div>--}}
<div class="setDataWrap col-md-12">
    <form action="{{route('form.show')}}" method="post" id="ex_form" >
        @csrf
        <input type="text" class="form-control" placeholder="Enter Form Name" name="f-name"  >
        <input type="hidden" name="formm" id="insert">
    </form>
<!-- <button id="getXML" type="button">Get XML Data</button> -->
    <button class="btn btn-success col-md-3" id="getJSON" type="button" style="float:right;">Create form</button>
    <!-- <button id="getJS" type="button">Get JS Data</button> -->
</div>
</div>

@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-builder.min.js"></script>
    <script src="https://formbuilder.online/assets/js/form-render.min.js"></script>

    <script>
        // jQuery(function($) {
        //     $(document.getElementById('fb-editor')).formBuilder();
        // });


        jQuery(function($) {
            var fbEditor = document.getElementById('build-wrap');
            var formBuilder = $(fbEditor).formBuilder();

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
               // alert($('#insert').val());
                $('#ex_form').submit();
            });
            document.getElementById('getJS').addEventListener('click', function() {
                var full_form=formBuilder.actions.getData('json');
                $('#insert').val(full_form);
                $('#ex_form').submit();

                console.log(formBuilder.actions.getData());
            });

        });

        jQuery($ => {
            // const escapeEl = document.createElement("textarea");
            // const code = document.getElementById("markup");
            // const formData =
            //     '[{"type":"button","label":"Button","subtype":"button","className":"btn-default btn","name":"button-1619510393984","access":false,"style":"default"},{"type":"number","required":false,"label":"Number","className":"form-control","name":"number-1619510395759","access":false},{"type":"checkbox-group","required":false,"label":"Checkbox Group","toggle":false,"inline":false,"name":"checkbox-group-1619510394631","access":false,"other":false,"values":[{"label":"Option 1","value":"option-1","selected":true}]}]';
            // const addLineBreaks = html => html.replace(new RegExp("><", "g"), ">\n<");
            //
            // // Grab markup and escape it
            // const $markup = $("<div/>");
            // $markup.formRender({ formData });
            //
            // // set < code > innerText with escaped markup
            // code.innerText = addLineBreaks($markup.formRender("html"));
            //     console.log(code);
            // hljs.highlightBlock(code);
        });

















    </script>
    {{--<script>--}}
        {{--window._rav = window._rav || {};--}}
        {{--_rav.save_route = "{{ route('save.form') }}";--}}
        {{--_rav.boardData = @json($builder_data);--}}
    {{--</script>--}}

    {{--<script src="{{ asset('js/formbuilder/main.js') }}"></script>--}}
@endsection
