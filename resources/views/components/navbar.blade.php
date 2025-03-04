<nav class="navbar navbar-expand-lg navbar-custom" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="{{ route('contact.us') }}">Lavora con noi</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
