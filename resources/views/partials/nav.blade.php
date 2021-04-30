<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('back.home')}}">HOME</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{route('home')}}">Revenir au Front-end</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('back.about')}}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('back.skills')}}">Skills</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('back.portfolio')}}">Portfolio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('back.contact')}}">Contact</a>
        </li>

      </ul>
    </div>
  </nav>
  