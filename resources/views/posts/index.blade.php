<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset("bootstrap5/css/bootstrap.min.css")}}" rel="stylesheet" >
    <script src="{{asset("bootstrap5/js/bootstrap.bundle.min.js")}}" ></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ( $posts as $post)
    @php ($post = explode("," , $post));
        <div class="card w-75 mb-3 container">
            <div class="card-body">
            <h5 class="card-title">{{$post[1]}}</h5>
            <p class="card-text">{{$post[2]}}</p>
            <a href="#" class="btn btn-primary">Button</a>
            </div>
        </div>
    @endforeach 
</body>
</html>