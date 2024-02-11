<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">AAF Resto</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">RA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item {{ $type_menu === 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('home') }}" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Master Data</li>
            <li class="nav-item {{ $type_menu === 'users' ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="nav-link"><i
                        class="fa-solid fa-user-tie"></i><span>User</span></a>
            </li>
            <li class="nav-item {{ $type_menu === 'products' ? 'active' : '' }}">
                <a href="{{ route('products.index') }}" class="nav-link has-dropdown"><i
                        class="fa-solid fa-cubes"></i><span>Product</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('products') ? 'active' : '' }}'>
                        <a class="nav-link" href="{{ route('products.index') }}"><i
                                class="fa-sharp fa-solid fa-basket-shopping"></i>List Product</a>
                    </li>
                    <li class="{{ Request::is('categories') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('categories.index') }}"><i
                                class="fa-sharp fa-solid fa-bars"></i>Category</a>
                    </li>
                </ul>
            </li>
        </ul>
</div>
