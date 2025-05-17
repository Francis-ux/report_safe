<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/"><img width="200" src="{{ asset(env('APP_LOGO')) }}" alt="{{ env('APP_NAME') }}"></a>
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
            <li class="dropdown">
                <a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i
                        class="fas fa-file-medical"></i>
                    <span>Reports</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ route('admin.report.index') }}">All</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('admin.report.physical') }}">Physical</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('admin.report.emotional') }}">Emotional</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('admin.report.sexual') }}">Sexual</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('admin.report.neglect') }}">Neglect</a>
                    </li>
                    <li><a class="nav-link" href="{{ route('admin.report.others') }}">Others</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ route('admin.newsletter.index') }}" class="nav-link"><i class="fas fa-newspaper"></i><span>Newsletters</span></a>
            </li>

        </ul>
    </aside>
</div>
