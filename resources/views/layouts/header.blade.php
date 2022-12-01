<button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
        data-class="c-sidebar-show">
    <i class="c-icon c-icon-lg cil-menu"></i>
</button>
<a class="c-header-brand d-lg-none c-header-brand-sm-up-center" href="#">
<img src="{{ ('img/logo.png ') }}" width="65" alt="Brand Logo">
</a>
<button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
        data-class="c-sidebar-lg-show" responsive="true">
    <i class="c-icon c-icon-lg cil-menu"></i>
</button>
<ul class="c-header-nav mfs-auto">
</ul>
<ul class="c-header-nav">
    <li class="c-header-nav-item dropdown">
        <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button"
           aria-haspopup="true" aria-expanded="false">
            <div class="c-avatar">
                <img class="c-avatar-img" src="{{ ('img/logo.png ') }}" alt="">
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right pt-0 bg-dark">
            <div class="dropdown-header bg-dark py-2"><strong>Account</strong></div>
            <a class="dropdown-item" href="#">
                <i class="c-icon mfe-2 cil-user"></i>Profile
            </a>
            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="c-icon mfe-2 cil-account-logout"></i>Logout
            </a>
            <form id="logout-form" action="{{ route('test.logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
    </li>
</ul>
<div class="c-subheader justify-content-between px-3">
    @yield('breadcrumb')
</div>
