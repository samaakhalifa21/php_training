<nav class="navbar navbar-expand-lg bg-body-tertiary py-3">
    <div class="container">
      <a class="navbar-brand" href="#">LaravelProject</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="{{url('/home')}}">Home</a>
          <a class="nav-link" href="{{route('courses')}}">Courses</a>
          <a class="nav-link" href="{{route('create')}}">Create Course</a>
        
        </div>
      </div>
    </div>
  </nav>