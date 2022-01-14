<!DOCTYPE html>

<html >
<!--begin::Head-->
<head>
    <meta charset="utf-8" />
    <style>
        * {
            box-sizing: border-box;
            margin:0;
            padding:0;
        }
        body{
            font-family:Arial, sans-serif;
            font-size:16px;
        }
        .rendered-form {
            border: none;
            margin: 20px 100px;
            padding: 25px;
            background-color: #d3d3d39e;
            border-radius: 20px;
            box-shadow: 0 0 10px 0 rgb(0 0 0 / 30%);
        }
        .rendered-form h1,
        .rendered-form h2,
        .rendered-form h3,
        .rendered-form h4,
        .rendered-form h5,
        .rendered-form h6,
        .rendered-form p,
        .rendered-form address,
        .rendered-form blockquote,
        .rendered-form canvas,
        .rendered-form output{
            border:none;
            padding:10px 5px;
            font-style:normal;
            font-family:Arial, sans-serif;
        }
        .rendered-form h1{
            background-color:black;
            color:white;
            border-radius:5px;
        }
        .rendered-form .formbuilder-textarea{
            border:none;
        }
        .rendered-form .formbuilder-textarea label{
            border:none;
            display:block;
            background-color: black;
            color:white;
            padding:10px;
            border-radius:5px;
        }
        .rendered-form .formbuilder-textarea textarea{
            /*border:none;*/
            width:100%;
            height:100px;
            resize:none;
            margin-top:10px;
            padding:10px;
            border-radius:5px;
        }
        .rendered-form .formbuilder-text{
            border:none;
            margin-top:10px;
        }
        .rendered-form .formbuilder-text label{
            border:none;
            display: block;
            background-color:black;
            color:white;
            padding:10px;
            border-radius:5px;
        }
        .rendered-form .formbuilder-text input{
            width:100%;
            margin-top:10px;
            padding:10px;
            border-radius:5px;
        }
        .rendered-form .formbuilder-autocomplete{
            border:none;
            margin-top:10px;
        }
        .rendered-form .formbuilder-autocomplete label{
            border:none;
            display:block;
            padding:10px;
            background-color:black;
            color:white;
            border-radius:5px;
        }
        .rendered-form .formbuilder-autocomplete input{
            width:100%;
            margin-top:10px;
            padding:10px;
            border-radius:5px;
        }
        .rendered-form .formbuilder-autocomplete ul{
            display:none;
        }
        .rendered-form .formbuilder-checkbox-group{
            border:none;
            margin-top:10px;
        }
        .rendered-form .formbuilder-checkbox-group .formbuilder-checkbox-group-label{
            border:none;
            display:block;
            background-color:black;
            color:white;
            padding:10px;
            border-radius:5px;
        }
        .rendered-form .formbuilder-checkbox-group .checkbox-group{
            border:none;
            margin-top:10px;
            padding:10px;
            width:100%;
        }
        .rendered-form .formbuilder-checkbox-group .checkbox-group .formbuilder-checkbox{
            border:none;
            width:100%;
        }
        .rendered-form .formbuilder-checkbox-group .checkbox-group .formbuilder-checkbox input{
            margin-right:5px;
        }
        .rendered-form .formbuilder-select{
            border:none;
        }
        .rendered-form .formbuilder-select label{
            border:none;
            display:block;
            background-color:black;
            color:white;
            padding:10px;
            border-radius:5px;
        }
        .rendered-form .formbuilder-select select{
            /*border:none;*/
            margin-top:10px;
            width:200px;
            padding:10px;
            border-radius:5px;
        }
        .rendered-form .formbuilder-date,
        .rendered-form .formbuilder-file,
        .rendered-form .formbuilder-number,
        .rendered-form .formbuilder-radio-group{
            border:none;
            margin-top:10px;
        }
        .rendered-form .formbuilder-date label,
        .rendered-form .formbuilder-file label,
        .rendered-form .formbuilder-number label,
        .rendered-form .formbuilder-radio-group .formbuilder-radio-group-label{
            border:none;
            display:block;
            background-color:black;
            color:white;
            width:100%;
            padding:10px;
            border-radius:5px;
        }
        .rendered-form .formbuilder-date input,
        .rendered-form .formbuilder-file input,
        .rendered-form .formbuilder-number input{
            padding:10px;
            width:100%;
            margin-top:10px;
            border-radius:5px;
        }
        .rendered-form .formbuilder-radio-group .radio-group{
            border:none;
            margin-top:10px;
        }
        .rendered-form .formbuilder-radio-group .radio-group .formbuilder-radio{
            margin:5px;
        }
        .rendered-form .formbuilder-radio-group .radio-group .formbuilder-radio input{
            margin-right:10px;
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<!--begin::Main-->


                {!! $data !!}



</body>

</html>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $('#abc').val(50);
    let radioInput = document.querySelector('.formbuilder-radio');
    let breakTag = document.createElement('br');
    radioInput.appendChild(breakTag);
    console.log(radioInput);
</script>



