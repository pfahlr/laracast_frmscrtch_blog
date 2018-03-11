@extends('master-layout')
@section('content')
<form action="/posts" method="POST">
  {{ csrf_field() }}
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
  </div>
  <div class="form-group">
    <label for="body">Body</label>
    <textarea name="body" class="form-control" id="body" placeholder="content here" required></textarea>
  </div>

  <div class="form-group">
  <button type="submit" class="btn btn-default">Submit</button>
  </div>
</form>
@endsection

