<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>

<table>
    <center>
        <td>
            <div class="card card-custom">
                <div class="card-header">
                    <h3 class="card-title">
                        Fill Form
                    </h3>
                </div>
                <!--begin::Form-->

                    <div class="card-body">
                        {!! $data->data !!}
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <a onclick="history.back()" class="btn btn-secondary">Back</a>
                    </div>

                <!--end::Form-->
            </div>

        </td>

    </center>

</table>
</body>
</html>
