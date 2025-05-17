<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/"><img width="50" src="{{ asset(env('APP_LOGO')) }}" alt="{{ env('APP_NAME') }}"></a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/"></a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="{{ setActiveMenu(['admin.dashboard']) }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link"><i
                        class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">{{ env('APP_NAME') }}</li>
            <li class="dropdown {{ setActiveMenu(['']) }}">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-file-medical"></i>
                    <span>Reports</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ setActiveMenu(['']) }}"><a class="nav-link" href="">All</a>
                    </li>
                    <li class="{{ setActiveMenu(['']) }}"><a class="nav-link" href="">Physical</a>
                    </li>
                    <li class="{{ setActiveMenu(['']) }}"><a class="nav-link" href="">Emotional</a>
                    </li>
                    <li class="{{ setActiveMenu(['']) }}"><a class="nav-link" href="">Sexual</a>
                    </li>
                    <li class="{{ setActiveMenu(['']) }}"><a class="nav-link" href="">Neglect</a>
                    </li>
                    <li class="{{ setActiveMenu(['']) }}"><a class="nav-link" href="">Others</a>
                    </li>
                </ul>
            </li>
            <li class="{{ setActiveMenu(['']) }}">
                <a href="" class="nav-link"><i class="fas fa-newspaper"></i><span>Newsletters</span></a>
            </li>

        </ul>
    </aside>
</div>
