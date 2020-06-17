<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ url('/') }}"><img class="logo img-fluid" src="{{ asset('images/logo.png') }}" alt="Site Logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/services')}}">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/portfolio')}}">Portfolio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/about')}}">About</a>
      </li>
    </ul>
  </div>
</nav>