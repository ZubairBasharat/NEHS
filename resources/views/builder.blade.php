@extends('layout.dashadmin')

@section('css')
    <style>
        .save-template{
            display:none !important;
        }
        .digisigns{
            width: 100%;
            height:200px;
            border:1px solid grey;
        }
        .digisigns .digisigns-clear-btn{
            position: absolute;
            bottom: 11px;
            right: 6px;
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
        {{--const export2Pdf = async () => {--}}
        {{--    let printHideClass = document.querySelectorAll('.print-hide');--}}
        {{--    printHideClass.forEach(item => item.style.display = 'none');--}}
        {{--    await fetch('http://localhost:8000/export-pdf', {--}}
        {{--        method: 'POST',--}}
        {{--        body:JSON.stringify({formm:{{$data}} }),--}}
        {{--    }).then(response => {--}}
        {{--        if (response.ok) {--}}
        {{--            response.json().then(response => {--}}
        {{--                var link = document.createElement('a');--}}
        {{--                link.href = response;--}}
        {{--                link.click();--}}
        {{--                printHideClass.forEach(item => item.style.display='');--}}
        {{--            });--}}
        {{--        }--}}
        {{--    }).catch(error => console.log(error));--}}
        }
    </script>

    <script>
        if (!window.fbControls){  window.fbControls = new Array();}
        window.fbControls.push(function (controlClass) {

            class controlDigiSign extends controlClass {
                static get definition() {
                    return {
                        icon: '✅',
                        i18n: {
                            default: 'Signatures',
                        },
                    }
                }
                configure() {
                    this.js =[
                        '{{asset('assets/plugins/custom/signature/js/jquery.ui.touch-punch.min.js')}}',
                        '{{asset('assets/plugins/custom/signature/js/jquery.signature.min.js')}}'
                    ];
                    this.css = [
                        '//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css',
                        '{{asset('assets/plugins/custom/signature/css/jquery.signature.css')}}'
                    ];
                }
                build() {
                    let isreq=(this.config.required)?'required':'';
                    console.log('req config:',this.config);
                    return this.markup('div', '<input class="digisigns-input" id="i'+this.config.id+'" name="'+this.config.name+'" type="hidden" '+isreq+' />' +
                        '<button type="button" data-digisign="'+this.config.id+'" class="digisigns-clear-btn">Clear</button>', {id: this.config.id,name:this.config.name,class:'digisigns'});
                }
                onRender() {
                    let id=this.config.id;
                    let ob_t='#'+id;
                    $(ob_t).signature({
                        guideline: true,
                        change: function(event, ui) {
                            $('#i'+event.target.id).val($(ob_t).signature('toDataURL'));
                        }
                    } );
                    $(ob_t+' button.digisigns-clear-btn').click(function() {
                        $(ob_t).signature('clear');
                        $('#i'+id).val();
                    });
                }
            }

            // register this control for the following types & text subtypes
            controlClass.register('digiSign', controlDigiSign);
            return controlDigiSign;
        });

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
                // console.log('fullform:',full_form);
                // return;/
                // $('#apendd').append(full_form);
                $('#insert').val(full_form);
               // alert($('#insert').val());
                $('#ex_form').submit();
            });

            // document.getElementById('getJS').addEventListener('click', function() {
            //     var full_form=formBuilder.actions.getData('json');
            //     $('#insert').val(full_form);
            //     $('#ex_form').submit();
            //
            //     console.log(formBuilder.actions.getData());
            // });

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
