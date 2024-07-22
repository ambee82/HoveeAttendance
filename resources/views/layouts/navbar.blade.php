<div class="header-main">

    <!-- Duplex Houses Header -->
    <div class="sticky">
        <div class="horizontal-header clearfix ">
            <div class="container">
                <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                <span class="smllogo">
                    <a href="index.html">
                        <img src="{{ asset('assets/images/brand/hovee_attendance_1.svg') }}" class="mobile-light-logo"
                            width="120" alt />
                        <img src="{{ asset('assets/images/brand/hovee_attendance_1.svg') }}" class="mobile-dark-logo"
                            width="120" alt />
                    </a>
                </span>
                <a href="tel:245-6325-3256" class="callusbtn"><i class="fa fa-phone" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
    <!-- /Duplex Houses Header -->

    <div class="horizontal-main bg-dark-transparent clearfix">
        <div class="horizontal-mainwrapper container clearfix">
            <div class="desktoplogo">
                <a href="index.html"><img src="{{ asset('assets/images/brand/hovee_attendance_1.svg') }}" alt></a>
            </div>
            <div class="desktoplogo-1">
                <a href="index.html"><img src="{{ asset('assets/images/brand/hovee_attendance_1.svg') }}" alt></a>
            </div>
            <!--Nav-->
            <nav class="horizontalMenu clearfix d-md-flex">
                

                @switch($userinfo->role_id??false)
                    @case(1)
                        @include('layouts.navbar.tutor')
                    @break

                    @case(2)
                        @include('layouts.navbar.institute')
                    @break

                    @default
                        @include('layouts.navbar.guest')
                @endswitch
                <ul class="mb-0">
                    @auth()
                        <li aria-haspopup="true" class=" d-none d-lg-block top-postbtn">
                            <span><a class="btn bg-secondary px-5 ad-post rounded-pill text-white fw-bold"
                                    href="{{ route('logout') }}">Log Out</a></span>
                        </li>
                    @endauth


                    @guest
                        <li aria-haspopup="true" class=" d-none d-lg-block top-postbtn">
                            <span>
                                <a class="btn bg-secondary px-5 ad-post rounded-pill text-white fw-bold"
                                    href="{{ route('login') }}">Log In</a></span>
                        </li>
                    @endguest

                </ul>
            </nav>
            <!--Nav-->
        </div>
    </div>
</div>
