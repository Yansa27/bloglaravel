<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset("bootstrap5/css/bootstrap.min.css")}}" rel="stylesheet" >
    <script src="{{asset("bootstrap5/js/bootstrap.bundle.min.js")}}" ></script>
    <title>Blog</title>
</head>
<body>
    <h1>{{$post[1]}}</h1>
    <p>{{$post[2]}}</p>

   <a href="{{url("post")}}"> << kembali </a>
</body>
</html>