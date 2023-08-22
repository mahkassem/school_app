<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My School</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('teachers') }}">Teachers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Students</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Classrooms</a>
        </li>
        <li>
          <span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        </li>
        @if (!Auth::check())
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li>
            <a class="nav-link" href="#">Register</a>
          </li>
        @else
          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
          </li>
        @endif
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
