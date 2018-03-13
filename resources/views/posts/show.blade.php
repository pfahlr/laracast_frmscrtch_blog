@extends('master-layout')

@section('content')

  <div class="col-sm-8">
      <h1>{{$post->title}}</h1>

      {{ $post->body }}
    <hr/>
    <div class="comments">
      <ul class="list-group">
      @foreach($post->comments as $comment)
       <li class="list-group-item">
         <strong>{{$comment->created_at->diffForHumans()}}</strong>
         {{ $comment->body }}
       </li>
      @endforeach
      </ul>
    </div>
    @if(Auth::check())
    <div class="card">
      <div class="card-group">
        <form method="post" action="{{ route('store_comment',['post'=>$post->id]) }}">
          {{ csrf_field() }}
          <div class="form-group">
            <textarea name="body" placeholder="Your comment here" required></textarea>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
    </div>
    @endif
  </div>

@endsection