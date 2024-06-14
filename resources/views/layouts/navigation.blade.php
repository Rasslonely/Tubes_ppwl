<section id="sidebar">
    <a href="{{ route('admin.dashboard') }}" class="brand">
        <i class='bx bxs-smile'></i>
        <span class="text">Admin</span>
    </a>
    <ul class="side-menu top">
        <li
            class="{{ Auth::user()->is_admin ? (request()->routeIs('admin.dashboard') ? 'active' : '') : (request()->routeIs('home') ? 'active' : '') }}">
            <a href="{{ Auth::user()->is_admin ? route('admin.dashboard') : route('home') }}">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        @if (Auth::user()->is_admin)
            <li class="{{ request()->routeIs('admin.product.home', 'admin.product.create', 'admin.product.edit') ? 'active' : '' }}">
                <a href="{{ url('/admin/product/home') }}">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Product</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.category.home') ? 'active' : '' }}">
                <a href="/admin/category/home">
                    <i class='bx bi bi-collection-fill'></i>
                    <span class="text">Category</span>
                </a>
            </li>
            <li class="{{ request()->routeIs('admin.user.home') ? 'active' : '' }}">
                <a href="/admin/user/home">
                    <i class='bx bi-emoji-sunglasses-fill'></i>
                    <span class="text">User</span>
                </a>
            </li>
            <ul class="side-menu">
                <li>
                    <a href="{{ url('/') }}">
                        <i class='bx bi-house-fill'></i>
                        <span class="text">Home</span>
                    </a>
                </li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                    <a href="/logout" class="logout">
                        <i class='bx bi-box-arrow-right' ></i>
                        <button type="submit" class="dropdown-item" style="all: unset">
                                Logout</button>
                    </a>
                    </form>
                </li>
            </ul>
        @endif
    </ul>
</section>


<section id="content">
    <!-- NAVBAR -->
    <nav>
        <i class='bx bx-menu'></i>
        <form action="" method="GET">
            <div class="form-input">
                <input type="search" placeholder="Search..." name="search">
                <button type="submit" class="search-btn" value="search"><i class='bx bx-search'></i></button>
            </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden>
        <label for="switch-mode" class="switch-mode"></label>
        <a href="{{ route('admin.dashboard') }}" class="profile">
            <img src="../../../assets/images/logo-cyborg.png">
        </a>
    </nav>
    <!-- NAVBAR -->
</section>
