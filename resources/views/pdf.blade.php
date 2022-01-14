@extends('layout.dashadmin')

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
@endsection

@section('dashboard')
    <div class="card card-custom">
        <button class="btn btn-primary"onclick="pdf()">PDF</button>
    </div>
    <div class="container" id="print_area12">
        <table class="table border m-0">
            <tr>
                {{--<td class="p-2 align-middle" style="width:50%;"><img src="assets/images/pro2.jpg" alt="Brand-logo" class="img-fluid w-25 h-auto"></td>--}}
                <td class="p-2 text-right" style="width:50%;"><h1>SiteDocs</h1><h5>200-2548 Clearbrook Road, Abbotsford, BC V2T 2Y4</h5><h6>1.866.871.1892</h6></td>
            </tr>
        </table>
        <table class="table table-bordered m-0">
            <tr class="heading-light text-uppercase bg-light">
                <td colspan="2" class="p-1 align-middle px-2 py-3 h2"><sup>*</sup> flha / jha / hazard assessment</td>
            </tr>
            <tr>
                <td class="p-1 bg-light align-middle text-center" style="width:10%;">Label</td>
                <td style='width:90%;'>Andrea</td>
            </tr>
            <tr>
                <td class="p-1 bg-light align-middle text-center" style="width:10%;">Icon</td>
                <td style='width:90%;'>Andrea</td>
            </tr>
            <tr>
                <td class="p-1 bg-light align-middle text-center" style="width:10%;">Icon</td>
                <td style='width:90%;'>Andrea</td>
            </tr>
        </table>
        <table class="table table-bordered m-0">
            <tr class="bg-dark text-white">
                <th>Instruction</th>
            </tr>
            <tr>
                <td class="p-0">
                    <ol class="m-0 p-0" style="list-style-position: inside;">
                        <li class="p-2 border">text -one</li>
                        <li class="p-2 border">text -one</li>
                        <li class="p-2 border">text -one</li>
                        <li class="p-2 border">text -one</li>
                        <li class="p-2 border">text -one</li>
                    </ol>
                </td>
            </tr>
        </table>
        <table class="table table-bordered m-0">
            <tr class="bg-dark text-white">
                <th colspan="2">General Information</th>
            </tr>
            <tr>
                <td colspan="2">text</td>
            </tr>
            <tr>
                <td colspan="2">
                    <h6>Supervisor in charge:</h6>
                    <details class="border m-2 p-2">
                        <summary class="mb-2 w-25">Peter Parker</summary>
                        Some text goes .....
                    </details>
                </td>
            </tr>
            <tr>
                <td>text -one</td>
                <td class="font-italic">date</td>
            </tr>
            <tr>
                <td>text -one</td>
                <td class="font-italic">date</td>
            </tr>
        </table>
        <table class="table table-bordered m-0">
            <tr class="bg-dark text-white">
                <th colspan="4">Items To Review:</th>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">text</td>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">text</td>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">text</td>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">text</td>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">text</td>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">text</td>
            </tr>
            <tr>
                <td colspan="4">Equipment</td>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">text</td>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">text</td>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">text</td>
            </tr>
            <tr>
                <td colspan="4">Environment</td>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">text</td>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">text</td>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">text</td>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">text</td>
            </tr>
        </table>
        <table class="table table-bordered m-0">
            <tr class="bg-dark text-white">
                <th>Hazard Assessment</th>
            </tr>
            <tr>
                <td>Task</td>
            </tr>
            <tr>
                <td>
                    <h6>Select Hazard</h6>
                    <details class="border m-2 p-2">
                        <summary class="mb-2 w-100">Access/Egress Hazard</summary>
                        Some text goes .....
                    </details>
                    <details class="border m-2 p-2">
                        <summary class="mb-2 w-100">Aerial lift/man basket (inspected & tagged), Ladders (tied off), Slips/trips</summary>
                        Some text goes .....
                    </details>
                    Severity
                </td>
            </tr>
            <tr>
                <td>Barriers of Controls</td>
            </tr>
            <tr>
                <td>text -one</td>
            </tr>
        </table>
        <table class="table table-bordered m-0">
            <tr class="bg-dark text-white">
                <th colspan="4">Items To Review:</th>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">
                    <h5>Fire Extinguisher</h5>
                    <p class="font-italic">Fire Extinguisher expired</p>
                </td>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;"><h5>First Aid Supplies</h5><img src="assets/images/pro1.png" alt="image" class="img-fluid w-25 h-auto"></td>
            </tr>
            <tr>
                <td colspan="4">Material</td>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">text</td>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">text</td>
            </tr>
            <tr>
                <td style="width:10%;" class="text-center align-middle">Yes</td>
                <td style="width:10%;" class="text-center align-middle">No</td>
                <td style="width:10%;" class="text-center align-middle">N/A</td>
                <td style="width:70%;">text</td>
            </tr>
        </table>
    </div>

@endsection

@section('js')
    {{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>--}}
    {{--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>--}}
    {{--<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>--}}
    <script>
        (function(){
            $('.datepicker').datepicker({
                format: 'yyyy/mm/dd'
            });
        })()

    </script>
    <script>
        function  pdf() {

            var printContents = document.getElementById('print_area12').innerHTML;


            var originalContents = document.body.innerHTML;


            document.body.innerHTML = printContents;


            // document.body.style.marginTop="-45px";


            window.print();


            document.body.innerHTML = originalContents;


            //
            // window.onafterprint = function(event) {
            //
            //     window.location.href = 'index.php'
            //
            // };

        }
    </script>
@endsection
