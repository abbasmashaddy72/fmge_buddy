<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo pl-0" href="{{ route('home') }}">
            @if (Route::currentRouteName() == 'home')
                <img src="{{ asset('assets/images/logo-dark.png') }}" class="inline-block dark:hidden" alt="" />
                <img src="{{ asset('assets/images/logo-light.png') }}" class="hidden dark:inline-block" alt="" />
            @else
                <span class="inline-block dark:hidden">
                    <img src="{{ asset('assets/images/logo-dark.png') }}" class="l-dark" height="24" alt="">
                    <img src="{{ asset('assets/images/logo-light.png') }}" class="l-light" height="24"
                        alt="">
                </span>
                <img src="{{ asset('assets/images/logo-light.png') }}" height="24" class="hidden dark:inline-block"
                    alt="">
            @endif
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu @if (Route::currentRouteName() != 'home') nav-light @endif">
                <li>
                    <a href="{{ route('home') }}"
                        class="sub-menu-item @if (Route::currentRouteName() != 'home') active @endif">Home</a>
                </li>

                <li>
                    <a href="{{ route('blogs') }}"
                        class="sub-menu-item @if (Route::currentRouteName() != 'blogs') active @endif">Announcements</a>
                </li>

                <li>
                    <a href="{{ route('courses') }}"
                        class="sub-menu-item @if (Route::currentRouteName() != 'courses') active @endif">Courses</a>
                </li>
                <li>
                    <a href="{{ route('gallery') }}"
                        class="sub-menu-item @if (Route::currentRouteName() != 'gallery') active @endif">Gallery</a>
                </li>
                <li>
                    <a href="{{ route('about_us') }}"
                        class="sub-menu-item @if (Route::currentRouteName() != 'about_us') active @endif">About</a>
                </li>

                <li>
                    <a href="{{ route('faqs') }}"
                        class="sub-menu-item @if (Route::currentRouteName() != 'faqs') active @endif">FAQ's</a>
                </li>

                <li>
                    <a href="{{ route('contact_us') }}"
                        class="sub-menu-item @if (Route::currentRouteName() != 'contact_us') active @endif">Contact Us</a>
                </li>
            </ul>
            <!--end navigation menu-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
</nav>
<!--end header-->
<!-- End Navbar -->
