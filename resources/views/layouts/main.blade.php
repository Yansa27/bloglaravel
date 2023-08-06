<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset("bootstrap5/css/bootstrap.min.css")}}" rel="stylesheet" >
    <script src="{{asset("bootstrap5/js/bootstrap.bundle.min.js")}}" ></script>
    <title>Document</title>
</head>
<body>
    {{-- navbar --}}
    @include('partials.nav')
    {{-- end navbar --}}
    <div class="container">
        @yield('container')
    </div>
</body>
</html>