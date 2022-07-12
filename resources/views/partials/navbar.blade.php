<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">
    <a class="navbar-brand" href="#">Consignment</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link {{ ($active === "home")? 'active' : '' }}" href="/posts"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
            <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
          </svg></a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === "about")? 'active' : '' }}" href="/about">About</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link {{ ($active=== "posts")? 'active' : '' }}" href="/posts">Blog</a>
        </li> --}}
        <li class="nav-item">
            <a class="nav-link {{ ($active === "categories")? 'active' : '' }}" href="/categories">Categories</a>
          </li>
      </ul>


      <ul class="navbar-nav ms-auto ">
          @auth
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome Back, {{ auth()->user()->name }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                <li><form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right">Logout</i></button>
                    </form></li>
                </ul>
        </li>
                 @else
                <li class="nav-item">
                <a href="/login" class="nav-link {{ ($active === "login")? 'active' : '' }}">Login</a>
                </li>
                 @endauth
      </ul>

    </div>
</div>
</nav>

