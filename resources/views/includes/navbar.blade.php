<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Acme</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">

      <ul class="navbar-nav ml-auto">
        {{-- below is a shorthand syntax that embeds a conditional system so its saying if youre active on a specific route highlight it on the navbar (where '?' specifies if its true and ':' signifies else )--}}
      <li class="{{Request::is('/') ? 'active' : ''}}">
          <a class="nav-link" href="/">Home</a>
        </li>
        
        <li class="{{Request::is('about') ? 'active' : ''}}">
          <a class="nav-link" href="/about">About</a>
        </li>
        <li class="{{Request::is('contact') ? 'active' : ''}}">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
      </ul>
    </div>
  </nav>
  