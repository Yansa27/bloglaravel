@extends('layouts.main')

@section('container')
    <h1>{{$post[1]}}</h1>
    <p>{{$post[2]}}</p>

   <a href="{{url("post")}}" class="btn btn-primary"> << kembali </a>
@endsection
