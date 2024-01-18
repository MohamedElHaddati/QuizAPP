<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('home')}}">My Blog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ml-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('addArticle')}}">Add Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('subscribe')}}">Subscribe</a>
          </li>
        </ul>
        <ul class="navbar-nav mb-2 mb-lg-0 mr-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('logout')}}">Logout</a>
          </li>
        </ul>

      </div>
    </div>
  </nav>