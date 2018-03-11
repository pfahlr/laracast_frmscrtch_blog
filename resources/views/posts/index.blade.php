@extends('master-layout')

@section('content')
  <div class="col-md-8">
    @foreach($posts as $post)
     @include('posts.post')
    @endforeach
  </div>
  <div class="col-md-4">
      @include('partials.sidebar-right')

  </div>
@endsection

