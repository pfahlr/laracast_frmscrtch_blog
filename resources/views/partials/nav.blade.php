<nav class="blog-nav">
  <a class="blog-nav-item" href="/">Home</a>
  <a class="blog-nav-item" href="/resume">Resume</a>
  <a class="blog-nav-item" href="/contact">Contact</a>
  <a class="blog-nav-item" href="/blog">Blog</a>

  @if(Auth::check())
  <a class="blog-nav-item ml-auto" href="#">{{ auth()->user()->name }}</a>
  <a class="blog-nav-item ml-auto" href="{{route('session_destroy')}}">Logout</a>
  @endif
</nav>
