<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    {{-- class container-fluid membuat navbar menjadi geser ke pojok, hapus fluid untuk membuat navbar ditengah --}}
    <div class="container"> 
      <a class="navbar-brand" href="#">Vin. Site</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About") ? 'active' : '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Posts") ? 'active' : '' }}" href="/posts">Post</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Test") ? 'active' : '' }}" href="/test">Test</a>
          </li>
        </ul>
      </div>
    </div>
</nav>
