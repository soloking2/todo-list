<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <div class="container">
    <a href="#" class="navbar-brand">TODO LIST</a>
    <button type="button" class="navbar-toggler" data-target="navbarList" data-toggle="collapse" aria-label="Navbar Toggle" aria-expanded="false">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarList">
      <ul class="nav navbar-nav">
        <li class="nav-item"><a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/">Home</a></li>
        <li class="nav-item"><a class="nav-link {{Request::is('todo/create') ? 'active' : ''}}" href="/todo/create">Create Todo</a></li>
      </ul>

    </div>

  </div>

</nav>
