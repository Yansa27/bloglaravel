@extends('layouts.main')
@section('container')
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
@endsection
   
