<!--begin::Card-->
<div class="card card-custom gutter-b">

    <input type="hidden" id="file_id" value="{{$resource->id}}">
        <iframe src="{{asset('/toolbox')}}/{{folder_byid($resource->folder_id)->name}}/{{$resource->name}}" width="auto" height="500px" />



</div>
<!--end::Card-->
<!--begin::Card-->
<div class=" card-custom gutter-b">
    <div class="row">
        @if(!Auth::user()->hasRole('User'))
        <div class="col-3">
            <button  class="btn btn-info assign-to-project" data-toggle="modal" data-target="#toproject" >Projects</button>
        </div>
        <div class="col-3">
            <button class="btn btn-info assign-to-department" data-toggle="modal" data-target="#toemploye" >Employee</button>
        </div>

        @endif
        @if(Auth::user()->hasRole('Admin'))
        <div class="col-3">
            <button class="btn btn-info assign-to-department" data-toggle="modal" data-target="#tomanager" >Manager</button>
        </div>
            @endif
            @if(!Auth::user()->hasRole('User'))

                <div class="col-3">
                    <button class="btn btn-info set_file" data-toolbox_id="{{$resource->id}}" data-toggle="modal" data-target="#toemail" >Send Mail</button>
                </div>
            @endif
            @if(Auth::user()->hasRole('User'))
            <div class="col-md-12">
                @if($sign)
                    @if($sign->sign != null)

                        <div id="done">
                            <div class="row">

                                <div class="col-md-12">
                                    <h2>Your Signatured</h2>
                                    <img id="sig-image" src="{{$sign->sign}}" alt="Your signature will go here!"/>
                                </div>
                            </div>
                        </div>

                    @else



                    <!-- Button trigger modal -->
                    <div class="">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
Signatured
</button>

<!-- Modal -->
<div class="modal fade container" style="margin-top:80px;" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-secondary">
        <h5 class="modal-title" id="exampleModalLongTitle">Your Signatured</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div id="notdone">
                            <div class="row">
                                <div class="col-md-12 my-1">
                                    <h2>E-Signature</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <canvas id="sig-canvas" width="auto" height="160" >
                                        Get a better browser.
                                    </canvas>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary" id="sig-submitBtn">Submit Signature</button>
                                    <button class="btn btn-default" id="sig-clearBtn">Clear Signature</button>
                                </div>
                            </div>
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>
</div>
              @endif
                @endif
            </div>
                @endif

    </div>
</div>
<!--end::Card-->

@if(!Auth::user()->hasRole('User'))
<div class="card card-custom">


    <div class="card-body">
        <!--begin::Search Form-->
        <div class="mb-7">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="row align-items-center">
                        <div class="col-md-4 my-2 my-md-0">
                            <label>All/Individual</label>
                            <select class="form-control seacrh_user" >
                                <option value="All">All</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->email}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 my-2 my-md-0">
                            <label>By Project</label>
                            <select class="form-control seacrh_project" >
                                @foreach($projects as $project)
                                <option value="{{$project->id}}">{{$project->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4 my-2 my-md-0">
                            <label>By Group</label>
                            <select class="form-control seacrh_group" >
                                @foreach($groups as $group)
                                    <option value="{{$group->id}}">{{$group->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <h3 style='background:skyblue; color:white;'>Signatures</h3>

        <!--begin: Datatable-->
        <div id="fetch_signs">
        <table class="table" >
            <thead>
            <tr>

                <th>User</th>
                <th>Email</th>
                <th>Role</th>
                <th>view signs</th>
                <th>Date/Time</th>
                <th></th>



            </tr>
            </thead>
            <tbody >


            @foreach($allsign as $signs)
                <tr>
                    <td>{{$signs->user->name}}</td>
                    <td>{{$signs->user->email}}</td>
                    <td>{{$signs->user->roles->pluck('name')}}</td>
                    <td>@if($signs->sign == '') Read But Not Signed @else <img src="{{$signs->sign}}" style="height:60px; width:140px;"> @endif   </td>
                    <td>{{$signs->updated_at}}</td>
                    <td></td>
                </tr>
            @endforeach


            </tbody>
        </table>
        <!--end: Datatable-->
        </div>
    </div>



</div>
@endif
<script>
    function validateEmail(email) {
        const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
    }

    $(document).ready(function () {

        $('.send-mail').click(function () {

            var mail=$('#to_email').val();
            var urll="{{asset('/dist/assets/ajax-loader.gif')}}";

            if (validateEmail(mail)) {
                $('#show-pdf').hide();
                $('#sendmail').html('<center><img src='+urll+' /></center>');
                var v_token = "{{csrf_token()}}";
                $.ajax({
                    type: 'POST',
                    url: "{{route('sendmail.toolbox')}}",
                    cache: false,
                    data: {toolbox_id: $('#toolbox_id').val(), mail_to:mail, _token: v_token},
                    success: function (data) {
                        $('#sendmail').html('');
                        $('#show-pdf').show();
                        toastr.success('', 'ok');

                    }


                });
            }else{
                alert('Invalid Email');
            }

        });


        $('.set_file').click(function () {

            $('#toolbox_id').val($(this).data('toolbox_id'));
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

        (function() {
            window.requestAnimFrame = (function(callback) {
                return window.requestAnimationFrame ||
                    window.webkitRequestAnimationFrame ||
                    window.mozRequestAnimationFrame ||
                    window.oRequestAnimationFrame ||
                    window.msRequestAnimaitonFrame ||
                    function(callback) {
                        window.setTimeout(callback, 1000 / 60);
                    };
            })();

            var canvas = document.getElementById("sig-canvas");
            var ctx = canvas.getContext("2d");
            ctx.strokeStyle = "#222222";
            ctx.lineWidth = 4;

            var drawing = false;
            var mousePos = {
                x: 0,
                y: 0
            };
            var lastPos = mousePos;

            canvas.addEventListener("mousedown", function(e) {
                drawing = true;
                lastPos = getMousePos(canvas, e);
            }, false);

            canvas.addEventListener("mouseup", function(e) {
                drawing = false;
            }, false);

            canvas.addEventListener("mousemove", function(e) {
                mousePos = getMousePos(canvas, e);
            }, false);

            // Add touch event support for mobile
            canvas.addEventListener("touchstart", function(e) {

            }, false);

            canvas.addEventListener("touchmove", function(e) {
                var touch = e.touches[0];
                var me = new MouseEvent("mousemove", {
                    clientX: touch.clientX,
                    clientY: touch.clientY
                });
                canvas.dispatchEvent(me);
            }, false);

            canvas.addEventListener("touchstart", function(e) {
                mousePos = getTouchPos(canvas, e);
                var touch = e.touches[0];
                var me = new MouseEvent("mousedown", {
                    clientX: touch.clientX,
                    clientY: touch.clientY
                });
                canvas.dispatchEvent(me);
            }, false);

            canvas.addEventListener("touchend", function(e) {
                var me = new MouseEvent("mouseup", {});
                canvas.dispatchEvent(me);
            }, false);

            function getMousePos(canvasDom, mouseEvent) {
                var rect = canvasDom.getBoundingClientRect();
                return {
                    x: mouseEvent.clientX - rect.left,
                    y: mouseEvent.clientY - rect.top
                }
            }

            function getTouchPos(canvasDom, touchEvent) {
                var rect = canvasDom.getBoundingClientRect();
                return {
                    x: touchEvent.touches[0].clientX - rect.left,
                    y: touchEvent.touches[0].clientY - rect.top
                }
            }

            function renderCanvas() {
                if (drawing) {
                    ctx.moveTo(lastPos.x, lastPos.y);
                    ctx.lineTo(mousePos.x, mousePos.y);
                    ctx.stroke();
                    lastPos = mousePos;
                }
            }

            // Prevent scrolling when touching the canvas
            document.body.addEventListener("touchstart", function(e) {
                if (e.target == canvas) {
                    e.preventDefault();
                }
            }, false);
            document.body.addEventListener("touchend", function(e) {
                if (e.target == canvas) {
                    e.preventDefault();
                }
            }, false);
            document.body.addEventListener("touchmove", function(e) {
                if (e.target == canvas) {
                    e.preventDefault();
                }
            }, false);

            (function drawLoop() {
                requestAnimFrame(drawLoop);
                renderCanvas();
            })();

            function clearCanvas() {
                canvas.width = canvas.width;
            }

            // Set up the UI
            var sigText = document.getElementById("sig-dataUrl");
            var sigImage = document.getElementById("sig-image");
            var clearBtn = document.getElementById("sig-clearBtn");
            var submitBtn = document.getElementById("sig-submitBtn");
            clearBtn.addEventListener("click", function(e) {
                clearCanvas();
                // sigText.innerHTML = "Data URL for your signature will go here!";
                // sigImage.setAttribute("src", "");
            }, false);
            submitBtn.addEventListener("click", function(e) {
                var dataUrl = canvas.toDataURL();

                if(dataUrl != '') {

                    var v_token = "{{csrf_token()}}";
                    var f_id = $('#file_id').val();
                    $.ajax({
                        type: 'POST',
                        url: "{{route('sign.toolbox')}}",
                        cache: false,
                        data: {img: dataUrl, f_id: f_id, _token: v_token},
                        success: function (data) {
                            $('#notdone').hide();
                            $('#done').show();
                            toastr.success('', 'Signatured');
                            $('#sig-image').attr('src', dataUrl);
                        }


                    });
                }else{

                }


            }, false);

        })();




    });

    function signs_by_type(id,type){

        var iid=id;
        var v_token = "{{csrf_token()}}";
        var f_id = $('#file_id').val();
        $.ajax({
            type: 'POST',
            url: "{{route('sign.get_sign_by_type')}}",
            cache: false,
            data: {id:iid,f_id: f_id, _token: v_token,type:type},
            success: function (data) {

                $('#fetch_signs').html('');
                $('#fetch_signs').html(data);

                toastr.success('', 'loaded');

            }

        });
    }

    $('.seacrh_project').change(function() {

        signs_by_type($(this).val(),'project');
    });
    $('.seacrh_group').change(function() {

        signs_by_type($(this).val(),'group');
    });
    $('.seacrh_user').change(function() {

        signs_by_type($(this).val(),'user');
    });



</script>
