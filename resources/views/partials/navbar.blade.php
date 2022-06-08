<link rel="stylesheet" href="">
<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
  <div class="collapse navbar-collapse" id="navbarNav">
    <a class="navbar-brand" href="/">Hanif</a>
  </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mx-5 px-5" id="navbarNav">
      <ul class="navbar-nav mx-5 px-5">
        <li class="nav-item">
            <a class="nav-link {{ ( $title === 'Home') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ( $title === 'About') ? 'active' : '' }}" href="/about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ ( $title === 'Gallery') ? 'active' : '' }}" href="/gallery">Gallery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contact.create')}}">Contact</a>
        </li>
      </ul>
    </div>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link mx-2" href="{{route ('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route ('register')}}">Register</a>
        </li>
      </ul>
    </div>
  </div>
</nav>