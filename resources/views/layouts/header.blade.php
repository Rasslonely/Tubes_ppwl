<div class="navbar-container">
    <div class="navbar">
        <ul class="navbar-logo">
            <a class="navbar-brand" href="/">
                <img src="../../../assets/images/cyborg-logo.png" alt="Logo" width="35" height="40"
                    class="d-inline-block align-text-top" style="margin-left: 25px";>
            </a>
        </ul>
        <ul class="navbar-ul">
            <li><a class="{{ $title === 'Home' ? 'text-warning text-decoration-underline' : '' }} bi bi-house"
                    href="/"> Home</a></li>
            <li><a class="{{ $title === 'Orders' ? 'text-warning text-decoration-underline' : '' }} bi bi-search"
                    href="/orderHistory"> Orders</a></li>

            @if (Route::has('login'))
                @auth
                    @if (Auth::user()->is_admin)
                        <li>
                            <a href="{{ route('admin.dashboard') }}"
                                class="{{ $title === 'Dashboard' ? 'text-warning text-decoration-underline' : '' }} bi bi-layout-text-window">
                                Dashboard</a>
                        </li>
                    @else
                        <li>
                            <a class="{{ $title === 'Profile' ? 'text-warning text-decoration-underline' : '' }} bi bi-person-fill"
                                href="/profile"> Profile</a>
                        </li>
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item"><i class="bi-box-arrow-right">
                                        Logout</i></button>
                            </form>
                        </li>
                    @endif
                @else
                    <li><a href="{{ route('login') }}"
                            class="{{ $title === 'Login' ? 'text-warning text-decoration-underline' : '' }} bi-box-arrow-in-right">
                            Log in</a></li>
                @endauth
            @endif

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
