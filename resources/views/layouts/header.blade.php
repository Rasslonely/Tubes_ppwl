<div class="navbar-container">
  <div class="navbar">
      <ul class="navbar-logo">
          <a class="navbar-brand" href="/">
              <img src="assets/images/cyborg-logo.png" alt="Logo" width="35" height="40"
                  class="d-inline-block align-text-top" style="margin-left: 25px";>
          </a>
      </ul>
      <ul class="navbar-ul">
          <li><a class="{{ ($title === "Home") ? 'text-warning text-decoration-underline'  : '' }}" href="/">Home</a></li>
          <li><a class="{{ ($title === "Order") ? 'text-warning text-decoration-underline' : '' }}" href="/order">Order</a></li>
          <li><a href="/project">Project</a></li>
          <ul>
            @if (Route::has('login'))
            @auth
            <li>
              <form action="/logout" method="POST">
                @csrf 
                <button type="submit" class="dropdown-item"><i class="bi-box-arrow-right"> Logout</i></button>
              </form> 
            </li>
            @else
                <li><a href="{{ route('login') }}" class="{{ ($title === "Login") ? 'text-warning text-decoration-underline' : '' }} bi-box-arrow-in-right"> Log in</a></li>
            @endauth
    @endif
          </ul>
      </ul>
      <div class="navbar-toggle">
          <input type="checkbox" />
          <span></span>
          <span></span>
          <span></span>
      </div>
  </div>
</div>

<div class="slides">
<div class="slide">
</div>
</div>

