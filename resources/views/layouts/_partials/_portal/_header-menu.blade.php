<header id="header" class="tra-menu navbar-dark white-scroll">
    <div class="header-wrapper">


        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <span class="smllogo">
                <a href="{{ route('home') }}">
                    <img class="lt-img" src="{{ asset('assets/_portal/images/LOGO_MAIN.png') }}" alt="mobile-logo">
                    <span id="typing-text" style="font-size: 18px; font-weight: bold; padding: 7px 10px 10px 0px;">
                        &nbsp; PT. INTI SHINE UTAMA
                    </span>
                    <img class="dt-img" src="{{ asset('assets/_portal/images/LOGO_MAIN.png') }}" alt="mobile-logo">
                </a>
            </span>
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
        </div>


        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">


                <!-- HEADER BLACK LOGO -->
                <div class="desktoplogo">
                    <a href="{{ route('home') }}" class="logo-black">
                        <img class="lt-img" src="{{ asset('assets/_portal/images/LOGO_MAIN.png') }}" alt="logo">
                        <span id="typing-text" style="font-size: 18px; font-weight: bold; padding: 7px 10px 10px 0px;">
                            &nbsp; PT. INTI SHINE UTAMA
                        </span>
                        <img class="dt-img" src="{{ asset('assets/_portal/images/LOGO_MAIN.png') }}" alt="logo">
                    </a>
                </div>


                <!-- HEADER WHITE LOGO -->
                <div class="desktoplogo">
                    <a href="{{ route('home') }}" class="logo-white">
                        <img src="{{ asset('assets/_portal/images/LOGO_MAIN.png') }}" alt="logo">
                    </a>
                </div>


                <!-- MAIN MENU -->
                <nav class="wsmenu clearfix">
                    <ul class="wsmenu-list nav-theme">

                        <li class="nl-simple {{ Route::currentRouteName() == 'about' ? 'active' : '' }}"
                            aria-haspopup="true">
                            <a href="{{ route('about') }}" class="h-link">About Us</a>
                        </li>

                        <li class="nl-simple {{ Route::currentRouteName() == 'blog' ? 'active' : '' }}"
                            aria-haspopup="true">
                            <a href="{{ route('blog') }}" class="h-link">Blog</a>
                        </li>

                        <li class="nl-simple {{ Route::currentRouteName() == 'portofolio' ? 'active' : '' }}"
                            aria-haspopup="true">
                            <a href="{{ route('portofolio') }}" class="h-link">Portofolio</a>
                        </li>

                        <li class="nl-simple {{ Route::currentRouteName() == 'services' ? 'active' : '' }}"
                            aria-haspopup="true">
                            <a href="{{ route('services') }}" class="h-link">Services</a>
                        </li>

                        {{-- <li class="nl-simple" aria-haspopup="true">
                            <a href="{{ route('careers') }}" class="h-link">Careers</a>
                        </li> --}}

                        <li class="nl-simple {{ Route::currentRouteName() == 'faqs' ? 'active' : '' }}"
                            aria-haspopup="true">
                            <a href="{{ route('faqs') }}" class="h-link">FAQs</a>
                        </li>



                        <!-- DROPDOWN SUB MENU -->
                        <!-- <li aria-haspopup="true">
                                    <a href="#" class="h-link">About <span class="wsarrow"></span></a>
                                <ul class="sub-menu ico-10">
                                    <li aria-haspopup="true" class="h-link"><a href="about.html">About Us</a></li>
                                    <li aria-haspopup="true" class="h-link"><a href="team.html">Our Team</a></li>
                                    <li aria-haspopup="true" class="h-link"><a href="careers.html">Careers <span class="sm-info">5</span></a></li>
                                    <li aria-haspopup="true" class="h-link"><a href="blog-listing.html">Our Blog</a></li>
                                   <li aria-haspopup="true" class="h-link"><a href="contacts.html">Contact Us</a></li>
                                </ul>
                            </li>
                        -->

                        {{-- <li class="nl-simple" aria-haspopup="true">
                            <a href="#" class="btn r-06 btn--theme hover--tra-coal last-link">
                                Get
                                Started
                            </a>
                        </li> --}}


                    </ul>
                </nav>
                <!-- END MAIN MENU -->


            </div>
        </div> <!-- END NAVIGATION MENU -->


    </div> <!-- End header-wrapper -->
</header>
