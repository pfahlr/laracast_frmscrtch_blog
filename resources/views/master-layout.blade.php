<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Rick Pfahl - Web Developer</title>

  <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>

</head>

<body>
<div class="blog-masthead">
  <div class="container">
          @include('partials/nav')
  </div>
</div>

<div class="container">

  <div class="blog-header">
    <h1 class="blog-title">Rick Pfahl</h1>
    <p class="lead blog-description">Web Developer</p>
  </div>

  <div class="row">
        @yield('content')
  </div><!-- /.row -->
  <div class="row">
    @include('partials.messages')
  </div>
</div><!-- /.container -->

<footer class="blog-footer">
  <p>Blog template built for <a href="http://getbootstrap.com">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
  <p>
    <a href="#">Back to top</a>
  </p>
</footer>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../../dist/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>