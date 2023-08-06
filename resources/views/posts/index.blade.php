@extends('layouts.main')
@section('container')
     <h1 class="text-primary text-center">Yansa Blog
        <a href="{{url("post/create")}}" class="btn btn-danger">Tambah blog</a>
    </h1>
    @foreach ( $posts as $post)
    @php ($post = explode("," , $post));
        <div class="card w-75 mb-3 container">
            <div class="card-body">
            <h5 class="card-title">{{$post[1]}}</h5>
            <p class="card-text">{{$post[2]}}</p>
            <a href="{{url("post/{$post[0]}")}}" class="btn btn-primary">Selengkapnya</a>
            </div>
        </div>
    @endforeach 
@endsection
   

    