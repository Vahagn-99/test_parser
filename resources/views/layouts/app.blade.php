<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            background-color: rgb(238, 238, 253);

        }

        .nav_bar {
            background-color: rgb(13, 0, 78);
        }



        th,
        td {
            text-align: left;
            padding: 8px;
        }

        .upload_btn {
            background-color: #fff !important;
            color: rgb(13, 0, 78) !important;
            border: 2px solid rgb(13, 0, 78) !important;
        }

        .nav-item {
            width: 100% !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.171);
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class=" col-md-2   px-0 nav_bar">
                <div class="d-flex flex-column align-items-center align-items-sm-start  pt-2 text-white min-vh-100">
                    <div class="p-3">
                        <img src="{{ asset('images/logo.png') }}" alt="" width="180px" height="auto">
                    </div>
                    <div class="border" style="width: 100%"></div>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start"
                        style=" width: 100%;" id="menu">
                        <li class="nav-item ">
                            <a href="#" class="nav-link align-middle mr-2 text-white fs-5">
                                Upload File
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 pt-4">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>
