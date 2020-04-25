<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand disabled text-dark mr-4" href="#" aria-disabled="true">Your Image Gallery</a>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link {{Request::is('/') ? 'active' : ''}}" href="/">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link {{Request::is('albums/create') ? 'active' : ''}}" href="/albums/create">Create Album</a>
      </div>
    </div>
  </nav>

  