<aside class="menu-sidebar d-none d-lg-block">
    <div class="logo">
        <a href="#">
            <img src="{!! asset('theme/images/icon/logo.png') !!}" alt="Cool Admin" />
        </a>
    </div>
    <div class="menu-sidebar__content js-scrollbar1">
        <nav class="navbar-sidebar">
            <ul class="list-unstyled navbar__list">
                <li @if($currentPage == 'employees') class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="{{ route('employees.index') }}">
                        <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li  @if($currentPage == 'example') class="active has-sub" @else class="has-sub" @endif>
                    <a class="js-arrow" href="{{ route('dashboard.example') }}">
                        <i class="fa fa-briefcase"></i>Example</a>
                </li>
            </ul>
        </nav>
    </div>
</aside>