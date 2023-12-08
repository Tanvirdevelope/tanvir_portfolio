<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tanvir Chowdhury</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/img/favicon.ico')}}" />
    <link href="{{asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
</head>

<body class="d-flex flex-column h-100">

    @include('layout.main.header')
    @include('layout.main.loader')
    <div class="" id="content-div">
        @yield('content')
    </div>
    
    @include('layout.main.footer')
    
    
    <script src="{{asset('assets/js/axios.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
    
    </body>
    </html>
