<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
  <div class="container">
    <a class="navbar-brand" href="/">Uriel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'Home') ? 'active' : ''}}" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'About') ? 'active' : ''}}" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'Portofolio') ? 'active' : ''}}" href="/portofolio">
            Portofolio
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'Category') ? 'active' : ''}}" href="/categories">
            Categories
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>

