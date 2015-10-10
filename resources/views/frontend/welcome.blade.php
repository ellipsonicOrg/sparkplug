<!DOCTYPE html>
<html>
    <head>
        <title>{{ $product_name }}</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            h1 {
                font-weight: 900;
                color: #5C6BC0;;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">
                    <img class="icon icons8-Spark-Plug" src="data:image/png;base64,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" width="100" height="100">
                </div>
                <h1>Sparkplug</h1>
                @can('access_superadmin_panel')
                    <h4>You are logged in, and you can access superadmin panel!</h4>
                @endcan
            </div>
        </div>
    </body>
</html>
