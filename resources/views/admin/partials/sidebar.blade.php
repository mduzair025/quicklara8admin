<nav class="hk-nav hk-nav-light">
    <a class="hk-nav-close" href="javascript:void(0);" id="hk_nav_close">
        <span class="feather-icon">
            <i data-feather="x">
            </i>
        </span>
    </a>
    <div class="nicescroll-bar">
        <div class="navbar-nav-wrap">
            <ul class="navbar-nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.home')}}">
                        <span class="feather-icon">
                            <i data-feather="activity">
                            </i>
                        </span>
                        <span class="nav-link-text">
                            Dashboard
                        </span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.users.index')}}">
                        <span class="feather-icon">
                            <i data-feather="users">
                            </i>
                        </span>
                        <span class="nav-link-text">
                            Users
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admin.products.index')}}">
                        <span class="feather-icon">
                            <i data-feather="plus-square">
                            </i>
                        </span>
                        <span class="nav-link-text">
                            Products
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div id="hk_nav_backdrop" class="hk-nav-backdrop"></div>