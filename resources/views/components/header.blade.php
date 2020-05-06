<!-- ナビゲーションバー  -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="{{ url('/profile') }}"><img src="{{ url('img/logo.png') }}"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav2">
       <span class="navbar-toggler-icon"></span>
       </button>
     
      <div class="collapse navbar-collapse" id="navbarNav2">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/profile') }}">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#introduction">INTRODUCTION</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/playground') }}">PLAYGROUND</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/matchmake') }}">MATCHMAKE</a>
          </li>

            @auth
          <li class="nav-item">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </li>
            @else
          <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
          </li>
            @endauth
        </ul>
      </div>
    </nav>

              <!-- <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">SIGNUP</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">LOGIN</a>
          </li> -->

