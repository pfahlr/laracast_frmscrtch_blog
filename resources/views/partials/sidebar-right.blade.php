<nav>
  <ul>
    @foreach($archives as $archive)
    <li><a href="/posts/?month={{$archive['month']}}&amp;year={{$archive['year']}}" class="link">{{$archive['month'].' '.$archive['year']}}</a></li>
    @endforeach
  </ul>

</nav>