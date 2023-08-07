
@extends('layouts.main')
@section('container')
     <h1 class="text-primary text-center">Yansa Blog
        <a href="{{url("post/create")}}" class="btn btn-danger">Tambah blog</a>
    </h1>
  
     @foreach ($post as $post)
        <a href="/post/{{ $post["id"] }}"><h2>{{ $post['title'] }}</h2></a>
        <h3>{{ $post['author'] }}</h3>
        <hr>
        <p>{{ $post['excerpt'] }}</p>
    @endforeach
@endsection
   

    