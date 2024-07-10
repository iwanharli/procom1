@extends('layouts.portal')

@section('title', 'IT Solutions & Technology')

@section('portal_content')
    <!-- HERO-1 ============================================= -->
    <section id="hero-1" class="bg--fixed hero-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- HERO TEXT -->
                <div class="col-md-6">
                    <div class="hero-1-txt wow animate__animated animate__fadeInRight">

                        <!-- Title -->
                        <h2>Unleash your business with our smart solutions</h2>

                        <!-- Text -->
                        <p class="p-lg">Mauris donec turpis suscipit sapien primis sapien sagittis tempor a
                            volute ligula
                            undo aliquet tortor
                        </p>

                        <!-- Button -->
                        <a href="#features-10" class="btn btn-md r-06 btn--theme hover--tra-black">Contact Us</a>

                    </div>
                </div> <!-- END HERO TEXT -->


                <!-- HERO IMAGE -->
                <div class="col-md-6">
                    <div class="hero-1-img wow animate__animated animate__fadeInLeft">
                        <img class="img-fluid" src="{{ asset('assets/_portal/images/hero-1-img.svg') }}" alt="hero-image">
                    </div>
                </div>


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>
    <!-- END HERO-1 -->

    <!-- FEATURES-10 ============================================= -->
    <section id="features-10" class="pt-50 features-section">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="section-title mb-70">

                        <!-- Title -->
                        <h2 class="h2-xl">Handling your marketing needs in a better way</h2>

                        <!-- Text -->
                        <p class="p-xl">Ligula risus auctor tempus magna feugiat lacinia fusce blandit</p>

                    </div>
                </div>
            </div>


            <!-- FEATURES-10 WRAPPER -->
            <div class="fbox-wrapper ico-title">
                <div class="row d-flex align-items-center">


                    <!-- FEATURE BOX #1 -->
                    <div class="col-md-6">
                        <div class="fbox-10 fb-5 bg--whitesmoke r-16 wow animate__animated animate__fadeInUp">


                            <!-- TEXT -->
                            <div class="fbox-txt">

                                <!-- Icon -->
                                <div class="t-icon color--theme ico-25">
                                    <span class="flaticon-shuffle"></span>
                                </div>

                                <!-- Title -->
                                <h5 class="h5-lg">Business Intelligence</h5>

                                <!-- Text -->
                                <ul class="simple-list">

                                    <li class="list-item">
                                        <p>Quaerat ipsum magna congue ipsum laoreet cursus placerat neque auctor
                                            purus
                                            quaerat
                                        </p>
                                    </li>

                                    <li class="list-item">
                                        <p class="mb-0">Tempor sapien luctus egestas varius laoreet suscipit
                                            ipsum a
                                            purus sapien dolor cursus
                                        </p>
                                    </li>

                                </ul>

                            </div>


                            <!-- IMAGE -->
                            <div class="fbox-10-img text-center">
                                <img class="img-fluid lt-img" src="{{ asset('assets/_portal/images/analytics.svg') }}"
                                    alt="feature-image">
                                <img class="img-fluid dt-img" src="{{ asset('assets/_portal/images/analytics-dark.svg') }}"
                                    alt="feature-image">
                            </div>


                        </div>
                    </div> <!-- END FEATURE BOX #1 -->


                    <!-- FEATURE BOX #2 -->
                    <div class="col-md-6">
                        <div class="fbox-10 fb-6 bg--whitesmoke r-16 wow animate__animated animate__fadeInUp">


                            <!-- TEXT -->
                            <div class="fbox-txt">

                                <!-- Icon -->
                                <div class="t-icon color--theme ico-25">
                                    <span class="flaticon-bottom-alignment"></span>
                                </div>

                                <!-- Title -->
                                <h5 class="h5-lg">Marketing Integrations</h5>

                                <!-- Text -->
                                <ul class="simple-list">

                                    <li class="list-item">
                                        <p>Tempor sapien luctus egestas varius laoreet suscipit ipsum a purus sapien
                                            dolor cursus
                                        </p>
                                    </li>

                                    <li class="list-item">
                                        <p class="mb-0">Quaerat ipsum magna congue ipsum laoreet cursus placerat
                                            neque
                                            auctor purus quaerat
                                        </p>
                                    </li>

                                </ul>

                            </div> <!-- END TEXT -->


                            <!-- IMAGE -->
                            <div class="fbox-10-img text-center">
                                <img class="img-fluid lt-img" src="{{ asset('assets/_portal/images/integrations.svg') }}"
                                    alt="feature-image">
                                <img class="img-fluid dt-img"
                                    src="{{ asset('assets/_portal/images/integrations-dark.svg') }}" alt="feature-image">
                            </div>


                        </div>
                    </div> <!-- END FEATURE BOX #2 -->


                </div> <!-- End row -->
            </div> <!-- END FEATURES-10 WRAPPER -->


        </div> <!-- End container -->
    </section>
    <!-- END FEATURES-10 -->

    <!-- BOX CONTENT ============================================= -->
    <section class="pt-30 bc-02 ws-wrapper content-section">
        <div class="container">


            <!-- CONTENT WRAPPER -->
            <div class="bc-02-wrapper bg--whitesmoke r-16">
                <div class="section-overlay">
                    <div class="row d-flex align-items-center">


                        <!-- TEXT BLOCK -->
                        <div class="col-md-6 col-lg-5">
                            <div class="txt-block wow animate__animated animate__fadeInRight">

                                <!-- Icon -->
                                <div class="t-icon color--theme ico-25">
                                    <span class="flaticon-app"></span>
                                </div>

                                <!-- Title -->
                                <h5 class="h5-xl">Solutions that will make your business successful</h5>

                                <!-- Text -->
                                <ul class="simple-list">

                                    <li class="list-item">
                                        <p>Tempor sapien quaerat ociis laoreet ipsum purus and sapien dolor ultrice
                                            semper
                                            undo aliquam congue purus and pretium
                                        </p>
                                    </li>

                                    <li class="list-item">
                                        <p class="mb-0">Cursus purus suscipit vitae egestas augue volute placerat
                                            undo vitae
                                            ultrice sapien
                                        </p>
                                    </li>

                                </ul>

                                <!-- Link -->
                                <div class="txt-block-tra-link">
                                    <a href="{{ route('services') }}" class="tra-link ico-20 color--theme">
                                        Discover More <span class="flaticon-next"></span>
                                    </a>
                                </div>

                            </div>
                        </div> <!-- END TEXT BLOCK -->


                        <!-- IMAGE BLOCK -->
                        <div class="col-md-6 col-lg-7">
                            <div class="bc-2-img right-column wow animate__animated animate__fadeInLeft">
                                <img class="img-fluid lt-img" src="{{ asset('assets/_portal/images/progress.svg') }}"
                                    alt="content-image">
                                <img class="img-fluid dt-img" src="{{ asset('assets/_portal/images/progress-dark.svg') }}"
                                    alt="content-image">
                            </div>
                        </div>


                    </div> <!-- End row -->
                </div> <!-- End section overlay -->
            </div> <!-- END CONTENT WRAPPER -->


        </div> <!-- End container -->
    </section>
    <!-- END BOX CONTENT -->

    <!-- BLOG-1 ============================================= -->
    <section id="blog-1" class="pt-100 pb-60 blog-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-70">
                        <h2 class="h2-lg">Articles & Insights</h2>
                    </div>
                </div>
            </div>


            <!-- BLOG POSTS -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
                <!-- BLOG POST -->
                @foreach ($headlines as $index => $item)
                    <?php
                    $date = date('Y-m-d', strtotime($item->post->published_at));
                    ?>
                    <div class="col">
                        <div id="bp-1-{{ $index + 1 }}" class="blog-post wow animate__animated animate__fadeInUp">

                            <!-- BLOG POST IMAGE -->
                            <a href="{{ route('blog.detail', ['date' => $date, 'slug' => $item->post->slug]) }}">
                                <div class="blog-post-img r-12">
                                    <div class="hover-overlay">
                                        <img class="img-fluid" src="{{ Storage::url($item->post->post_image) }}" style="max-width: 110% !important;"
                                            alt="blog-post-image">
                                        <div class="item-overlay"></div>
                                    </div>
                                </div>
                            </a>

                            <!-- BLOG POST TEXT -->
                            <div class="blog-post-txt">

                                <!-- Post Meta -->
                                <div class="blog-post-meta">
                                    <ul class="post-meta-list ico-10">
                                        <li>
                                            <p class="p-sm">
                                                {{ $item->post->category->name }}
                                            </p>
                                        </li>
                                        <li class="meta-list-divider">
                                            <p><span class="flaticon-minus-1"></span></p>
                                        </li>
                                        <li>
                                            <p class="p-sm">
                                                {{ date('d F Y', strtotime($item->post->published_at)) }}
                                            </p>
                                        </li>
                                    </ul>
                                </div>

                                <!-- Post Link -->
                                <h5>
                                    <a href="{{ route('blog.detail', ['date' => $date, 'slug' => $item->post->slug]) }}">
                                        {{ $item->post->post_title }}
                                    </a>
                                </h5>

                                <!-- Short Description -->
                                <p>{{ $item->post->post_teaser }}</p>

                            </div> <!-- END BLOG POST TEXT -->

                        </div>
                    </div>
                @endforeach
                <!-- END  BLOG POST -->
            </div>
            <!-- END BLOG POSTS -->


        </div>
    </section>
    <!-- END BLOG-1 -->

    <!-- DIVIDER LINE -->
    <hr class="divider">

    <!-- BRANDS-1 ============================================= -->
    <div id="brands-1" class="pb-100 mt-50 brands-section">
        <div class="container">


            <!-- BRANDS TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="brands-title mt-3">
                        <h6 class="h6-lg">Trusted by companies, big or not-so-big:</h6>
                    </div>
                </div>
            </div>


            <!-- BRANDS CAROUSEL -->
            <div class="row">
                <div class="col text-center">
                    <div class="owl-carousel brands-carousel-5">

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#" class="lt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-1.png') }}" alt="brand-logo"></a>
                            <a href="#" class="dt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-1w.png') }}" alt="brand-logo"></a>
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#" class="lt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-2.png') }}" alt="brand-logo"></a>
                            <a href="#" class="dt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-2w.png') }}" alt="brand-logo"></a>
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#" class="lt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-3.png') }}" alt="brand-logo"></a>
                            <a href="#" class="dt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-3w.png') }}" alt="brand-logo"></a>
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#" class="lt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-4.png') }}" alt="brand-logo"></a>
                            <a href="#" class="dt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-4w.png') }}" alt="brand-logo"></a>
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#" class="lt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-5.png') }}" alt="brand-logo"></a>
                            <a href="#" class="dt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-5w.png') }}" alt="brand-logo"></a>
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#" class="lt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-6.png') }}" alt="brand-logo"></a>
                            <a href="#" class="dt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-6w.png') }}" alt="brand-logo"></a>
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#" class="lt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-7.png') }}" alt="brand-logo"></a>
                            <a href="#" class="dt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-7w.png') }}" alt="brand-logo"></a>
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#" class="lt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-8.png') }}" alt="brand-logo"></a>
                            <a href="#" class="dt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-8w.png') }}" alt="brand-logo"></a>
                        </div>

                        <!-- BRAND LOGO IMAGE -->
                        <div class="brand-logo">
                            <a href="#" class="lt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-9.png') }}" alt="brand-logo"></a>
                            <a href="#" class="dt-img"><img class="img-fluid"
                                    src="{{ asset('assets/_portal/images/brand-9w.png') }}" alt="brand-logo"></a>
                        </div>

                    </div>
                </div>
            </div> <!-- END BRANDS CAROUSEL -->


        </div> <!-- End container -->
    </div>
    <!-- END BRANDS-1 -->


    <!-- DIVIDER LINE -->
    <hr class="divider">


    <!-- PORTFOLIO-1 ============================================= -->
    <section id="portfolio-1" class="py-100 portfolio-section division">
        <div class="container">
            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="section-title mb-70">

                        <!-- Title -->
                        <h2 class="h2-lg">We convert your ideas into workable solutions</h2>

                    </div>
                </div>
            </div>

            <!-- FILTERING CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-content">

                        @php
                            $sizes = ['468x448', '468x392', '468x392', '468x336'];
                            $counter = 0;
                        @endphp


                        <!-- PROJECT #1 -->
                        @foreach ($portofolio as $item)
                            @php
                                $currentSize = explode('x', $sizes[$counter % count($sizes)]);
                                $width = $currentSize[0];
                                $height = $currentSize[1];
                                $counter++;
                            @endphp

                            <div class="filter-item illustration branding">
                                <div class="hover-overlay r-12">
                                    <!-- Image -->
                                    {{-- {{ $width }} {{ $height }} --}}

                                    <img class="img-fluid" src="{{ Storage::url($item->post_image) }}"
                                        style="height: {{ $height }}px !important;"
                                        alt="project-preview">
                                    <div class="item-overlay"></div>

                                    <!-- Project Category -->
                                    <div class="project-category">
                                        <p>{{ $item->category->name }}</p>
                                    </div>

                                    <!-- Project Data -->
                                    <div class="project-description color--white">

                                        <!-- Project Data Text-->
                                        <div class="project-data-txt">

                                            <!-- Project Title-->
                                            <h5>{{ $item->post_title }}</h5>

                                            <!-- Project Rating -->
                                            <div class="project-rating clearfix">
                                                {{ date('d F Y', strtotime($item->published_at)) }}
                                            </div>

                                        </div>

                                        <!-- Project Link -->
                                        <div class="project-source ico-25">
                                            <a href="{{ route('portofolio.detail', ['slug' => $item->slug]) }}">
                                                <span class="flaticon-right-arrow"></span>
                                            </a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        @endforeach
                        <!-- END IMAGE #1 -->

                    </div>
                </div>
            </div> <!-- END FILTERING CONTENT -->


            <!-- MORE BUTTON -->
            <div class="row">
                <div class="col">
                    <div class="more-btn text-center mt-30 wow animate__animated animate__fadeInUp">
                        <a href="{{ route('portofolio') }}" class="btn r-06 btn--tra-black hover--theme">View All
                            Projects</a>
                    </div>
                </div>
            </div>


        </div> <!-- End container -->
    </section>
    <!-- END PORTFOLIO-1 -->

    <!-- DIVIDER LINE -->
    <hr class="divider">

    <!-- FEATURES-3 ============================================= -->
    <section id="features-3" class="shape--bg shape--whitesmoke pt-50 features-section division">
        <div class="container">
            <div class="row d-flex align-items-center">


                <!-- TEXT BLOCK -->
                <div class="col-md-5">
                    <div class="txt-block left-column wow animate__animated animate__fadeInRight">

                        <!-- Section ID -->
                        <span class="section-id">Our Strengths</span>

                        <!-- Title -->
                        <h2>Why do people choose SolTech?</h2>

                        <!-- Text -->
                        <p>Sodales tempor sapien quaerat ipsum congue and undo laoreet turpis neque auctor turpis
                            vitae dolor luctus placerat magna ligula cursus vitae
                        </p>

                        <!-- List -->
                        <ul class="simple-list">

                            <li class="list-item">
                                <p>Tempor sapien quaerat undo ipsum laoreet and purus sapien a dolor ociis ultrice
                                    ipsum aliquam congue a dolor cursus congue varius magnis
                                </p>
                            </li>

                            <li class="list-item">
                                <p class="mb-0">Cursus purus suscipit vitae cubilia magnis diam volute egestas
                                    sapien ultrice auctor
                                </p>
                            </li>

                        </ul>

                    </div>
                </div> <!-- END TEXT BLOCK -->


                <!-- FEATURES-3 WRAPPER -->
                <div class="col-md-7">
                    <div class="fbox-3-wrapper">
                        <div class="row">


                            <div class="col-md-6">

                                <!-- FEATURE BOX #1 -->
                                <div id="fb-3-1"
                                    class="fbox-3 block--shadow r-12 wow animate__animated animate__fadeInLeft">

                                    <!-- Icon -->
                                    <div class="fbox-ico ico-50">
                                        <div class="shape-ico color--theme">

                                            <!-- Vector Icon -->
                                            <span class="flaticon-rocket-launch"></span>

                                            <!-- Shape -->
                                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
                                                    transform="translate(100 100)" />
                                            </svg>

                                        </div>
                                    </div> <!-- End Icon -->

                                    <!-- Title -->
                                    <h6 class="h6-lg">Innovation</h6>

                                    <!-- Text -->
                                    <p>Porta semper lacus and cursus feugiat at primis ultrice a ligula auctor</p>

                                </div>

                                <!-- FEATURE BOX #2 -->
                                <div id="fb-3-2"
                                    class="fbox-3 block--shadow r-12 wow animate__animated animate__fadeInLeft">

                                    <!-- Icon -->
                                    <div class="fbox-ico ico-50">
                                        <div class="shape-ico color--theme">

                                            <!-- Vector Icon -->
                                            <span class="flaticon-creative-process"></span>

                                            <!-- Shape -->
                                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
                                                    transform="translate(100 100)" />
                                            </svg>

                                        </div>
                                    </div> <!-- End Icon -->

                                    <!-- Title -->
                                    <h6 class="h6-lg">Experience</h6>

                                    <!-- Text -->
                                    <p>Porta semper lacus and cursus feugiat at primis ultrice a ligula auctor</p>

                                </div>


                            </div>


                            <div class="col-md-6">


                                <!-- FEATURE BOX #3 -->
                                <div id="fb-3-3"
                                    class="fbox-3 block--shadow r-12 wow animate__animated animate__fadeInLeft">

                                    <!-- Icon -->
                                    <div class="fbox-ico ico-50">
                                        <div class="shape-ico color--theme">

                                            <!-- Vector Icon -->
                                            <span class="flaticon-trophy"></span>

                                            <!-- Shape -->
                                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
                                                    transform="translate(100 100)" />
                                            </svg>

                                        </div>
                                    </div> <!-- End Icon -->

                                    <!-- Title -->
                                    <h6 class="h6-lg">Quality</h6>

                                    <!-- Text -->
                                    <p>Porta semper lacus and cursus feugiat at primis ultrice a ligula auctor</p>

                                </div>

                                <!-- FEATURE BOX #4 -->
                                <div id="fb-3-4"
                                    class="fbox-3 block--shadow r-12 wow animate__animated animate__fadeInLeft">

                                    <!-- Icon -->
                                    <div class="fbox-ico ico-50">
                                        <div class="shape-ico color--theme">

                                            <!-- Vector Icon -->
                                            <span class="flaticon-group"></span>

                                            <!-- Shape -->
                                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
                                                    transform="translate(100 100)" />
                                            </svg>

                                        </div>
                                    </div> <!-- End Icon -->

                                    <!-- Title -->
                                    <h6 class="h6-lg">Customer-First</h6>

                                    <!-- Text -->
                                    <p>Porta semper lacus and cursus feugiat at primis ultrice a ligula auctor</p>

                                </div>


                            </div>


                        </div>
                    </div> <!-- End row -->
                </div> <!-- END FEATURES-3 WRAPPER -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section>
    <!-- END FEATURES-3 -->


    <!-- DIVIDER LINE -->
    <hr class="divider mt-5">

    <!-- BANNER-1 ============================================= -->
    @include('pages.portal.components.banner')
    <!-- END BANNER-1 -->



    {{-- MODAL  --}}
    @include('pages.portal.components.modal')
@endsection
