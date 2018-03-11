@extends('master-layout')
@section('content')
<div class="col-sm-8">
  <h1>Login</h1>
  <form method="POST" action="/login">
    {{csrf_field()}}
  <div class="form-group">
    <label for="email">email</label>
    <input name="email" type="email" id="email" class="form-control" placeholder=""/>
  </div>
  <div class="form-group">
    <label for="password">password</label>
    <input name="password" type="password" id="password" class="form-control"/>
  </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">login</button>
    </div>
  </form>
</div>
@endsection