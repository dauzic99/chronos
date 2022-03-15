<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('dashboard') }}">{{ env('APP_NAME') }}</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('dashboard') }}">{{ env('APP_NAME_SHORT') }}</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Master</li>
            <li class="{{ request()->segment(2) == 'division' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Division') }}">
                    <i class="fa fa-gamepad" aria-hidden="true"></i>
                    <span>Division</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'team' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Team') }}">
                    <i class="fab fa-teamspeak" style="margin-left: 0"></i>
                    <span>Teams</span>
                </a>
            </li>

            <li class="{{ request()->segment(2) == 'player' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Player') }}">
                    <i class="fas fa-user-friends" style="margin-left: 0"></i>
                    <span>Player</span>
                </a>
            </li>

            <li class="menu-header">Dashboard</li>
            <li class="{{ request()->segment(2) == '' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="menu-header">WEB</li>
            <li class="{{ request()->segment(2) == 'division' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Division') }}">
                    <i class="fas fa-newspaper"></i>
                    <span>News</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'division' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Division') }}">
                    <i class="fa fa-gamepad" aria-hidden="true"></i>
                    <span>About</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'division' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Division') }}">
                    <i class="fa fa-gamepad" aria-hidden="true"></i>
                    <span>Contact</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'partner' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Player') }}">
                    <i class="fas fa-user-friends" style="margin-left: 0"></i>
                    <span>Partner</span>
                </a>
            </li>
            <li class="menu-header">Store</li>
            <li class="{{ request()->segment(2) == 'division' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Division') }}">
                    <i class="fa fa-gamepad" aria-hidden="true"></i>
                    <span>Product</span>
                </a>
            </li>
            <li class="{{ request()->segment(2) == 'division' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('Division') }}">
                    <i class="fa fa-gamepad" aria-hidden="true"></i>
                    <span>Discount</span>
                </a>
            </li>
        </ul>
    </aside>
</div>
