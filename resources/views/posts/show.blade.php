@extends('layouts.main')

@section('container')
<article>
    <h2>{{ $post["title"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
  
         {!! $post["body"] !!}
   
   </article>
   <a href="/post" class="btn btn-success">Back</a>
@endsection
