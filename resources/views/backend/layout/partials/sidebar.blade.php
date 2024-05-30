<nav class="page-sidebar" id="sidebar">
    <div id="sidebar-collapse">
        <div class="admin-block d-flex">
            <div>
                {{-- <img class="rounded-circle" width="45px" src="{{ auth()->user()->image !== null? asset(auth()->user()->image) :asset('assets/backend/img/admin-avatar.png') }}" width="45px" /> --}}
            </div>
            <div class="admin-info">
                <div class="font-strong"> {{ auth()->user()->name ?? 'Admin User' }}</div><small>Administrator</small>
            </div>
        </div>
        <ul class="side-menu metismenu">

            <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ url('admin/dashboard') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Dashboard</span>
                </a>
            </li>

            <li class="{{ Request::is('admin/about*') ? 'active' : '' }}">
                <a href="{{ route('about.index') }}"><i class="sidebar-item-icon fa fa-user-circle"></i>
                    <span class="nav-label">About Us</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/service*') ? 'active' : '' }}">
                <a href="{{ route('service.index') }}"><i class="sidebar-item-icon fas fa-images"></i>
                    <span class="nav-label">Service</span>
                </a>
            </li>

            {{--
            <li class="{{ Request::is('admin/contact*') ? 'active' : '' }}">
                <a href="{{ route('contact.index') }}"><i class="sidebar-item-icon far fa-comment"></i>
                    <span class="nav-label">Contact</span>
                </a>
            </li> --}}

            <li class="{{ Request::is('admin/brand*') ? 'active' : '' }}">
                <a href="{{ route('brand.index') }}"><i class="sidebar-item-icon fa fa-user-circle"></i>
                    <span class="nav-label">Sponser Brand</span>
                </a>
            </li>

            <li class="{{ Request::is('admin/testimonial*') ? 'active' : '' }}">
                <a href="{{ route('testimonial.index') }}"><i class="sidebar-item-icon fas fa-photo"></i>
                    <span class="nav-label">Testimonial</span>
                </a>
            </li>

            <li class="{{ Request::is('admin/pricing*') ? 'active' : '' }}">
                <a href="{{ route('pricing.index') }}"><i class="sidebar-item-icon fas fa-photo"></i>
                    <span class="nav-label">Pricing</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/faq*') ? 'active' : '' }}">
                <a href="{{ route('faq.index') }}"><i class="sidebar-item-icon fas fa-photo"></i>
                    <span class="nav-label">Frequently Question</span>
                </a>
            </li>
            <li class="{{ Request::is('admin/features') ? 'active' : '' }}">
                <a href="{{ route('features.index') }}"><i class="sidebar-item-icon fa fa-th-large"></i>
                    <span class="nav-label">Our Features</span>
                </a>
            </li>


            <li class="{{ Request::is('admin/setting/general*') ? 'active' : '' }}">
                <a href="{{ route('general.index') }}"><i class="sidebar-item-icon fas fa-photo"></i>
                    <span class="nav-label">Setting</span>
                </a>
            </li>

        </ul>

    </div>
</nav>
