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
   <form action="{{url('post')}}" method="POST" class="container">
    @csrf
    <div class="mb-3">
        <h1 class="form-label">Judul</h1>
        <input type="text" class="form-control" id="title" name="title" >
      </div>
      <div class="mb-3">
        <h1  class="form-label">Content</h1>
        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Simpan</button>
   </form>
</body>
</html>