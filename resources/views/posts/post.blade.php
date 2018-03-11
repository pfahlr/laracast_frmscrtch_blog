<div class="blog-post">
  <h2 class="blog-post-title"><a href="{{ route('show_post', ['post'=> $post->id]) }}">{{ $post->title }}</a></h2>
  <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by <a href="#">{{$post->user->name}}</a></p>
  {{ $post->body }}
</div><!-- /.blog-post -->



