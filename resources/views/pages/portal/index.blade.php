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
                        <p class="p-lg">Maksimalkan potensi bisnis Anda dengan solusi cerdas dan inovatif kami.
                        </p>

                        <!-- Button -->
                        <a href="{{ route('about') }}" class="btn btn-md r-06 btn--theme hover--tra-black">Contact Us</a>

                    </div>
                </div> <!-- END HERO TEXT -->


                <!-- HERO IMAGE -->
                <div class="col-md-6">
                    <div class="hero-1-img wow animate__animated animate__fadeInLeft">
                        <img class="img-fluid" src="{{ asset('assets/imgs/dev.png') }}" alt="hero-image">
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
                        <p class="p-xl">Tingkatkan efektivitas pemasaran Anda dengan pendekatan kami yang lebih cerdas dan
                            efisien.</p>

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
                                        <p>
                                            Ubah data menjadi wawasan berharga untuk keputusan yang lebih cerdas dan
                                            strategis.
                                        </p>
                                    </li>

                                    <li class="list-item">
                                        <p class="mb-0">Maksimalkan efisiensi dan keuntungan bisnis Anda dengan solusi BI
                                            kami yang canggih.
                                        </p>
                                    </li>

                                </ul>

                            </div>


                            <!-- IMAGE -->
                            <div class="fbox-10-img text-center">
                                <img class="img-fluid lt-img" src="{{ asset('assets/imgs/analysis.png') }}"
                                    alt="feature-image">
                                <img class="img-fluid dt-img" src="{{ asset('assets/imgs/analysis.png') }}"
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
                                <h5 class="h5-lg">Campaign Integrations</h5>

                                <!-- Text -->
                                <ul class="simple-list">

                                    <li class="list-item">
                                        <p>Satukan semua alat pemasaran Anda untuk kampanye yang lebih efisien dan kohesif.
                                        </p>
                                    </li>

                                    <li class="list-item">
                                        <p class="mb-0">Tingkatkan hasil pemasaran Anda dengan integrasi yang mulus dan
                                            strategi yang terkoordinasi.
                                        </p>
                                    </li>

                                </ul>

                            </div> <!-- END TEXT -->


                            <!-- IMAGE -->
                            <div class="fbox-10-img text-center">
                                <img class="img-fluid lt-img" src="{{ asset('assets/imgs/socmed.png') }}"
                                    alt="feature-image">
                                <img class="img-fluid dt-img" src="{{ asset('assets/imgs/socmed.png') }}"
                                    alt="feature-image">
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
                                <h5 class="h5-xl">IT Solutions that will make your business successful</h5>

                                <!-- Text -->
                                <ul class="simple-list">

                                    <li class="list-item">
                                        <p> Dapatkan solusi yang dirancang untuk mendorong kesuksesan bisnis Anda di bidang
                                            IT Security dan Software Development.
                                        </p>
                                    </li>

                                    <li class="list-item">
                                        <p class="mb-0">Optimalkan keamanan sistem dan pengembangan perangkat lunak Anda
                                            dengan solusi yang canggih dan terpercaya.
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
                                <img class="img-fluid lt-img" src="{{ asset('assets/imgs/it.png') }}" alt="content-image">
                                <img class="img-fluid dt-img" src="{{ asset('assets/imgs/it.png') }}" alt="content-image">
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

                    if (empty($item->post)) {
                        continue;
                    }

                    $date = date('Y-m-d', strtotime($item->post->published_at));
                    ?>
                    <div class="col">
                        <div id="bp-1-{{ $index + 1 }}" class="blog-post wow animate__animated animate__fadeInUp">

                            <!-- BLOG POST IMAGE -->
                            <a href="{{ route('blog.detail', ['date' => $date, 'slug' => $item->post->slug]) }}">
                                <div class="blog-post-img r-12">
                                    <div class="hover-overlay">
                                        <img class="img-fluid" src="{{ Storage::url($item->post->post_image) }}"
                                            style="max-width: 110% !important;" alt="blog-post-image">
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
                        <h6 class="h6-lg">Trusted by companies:</h6>
                    </div>
                </div>
            </div>


            <!-- BRANDS CAROUSEL -->
            <div class="row">
                <div class="col text-center">
                    <div class="owl-carousel brands-carousel-5">

                        <!-- BRAND LOGO IMAGE -->
                        @foreach ($client_files as $key => $value)
                            <div class="brand-logo">
                                <a href="#" class="lt-img"><img class="img-fluid"
                                        src="{{ Storage::url('assets/clients/' . $value) }}" alt="brand-logo"></a>
                                <a href="#" class="dt-img"><img class="img-fluid"
                                        src="{{ Storage::url('assets/clients/' . $value) }}" alt="brand-logo"></a>
                            </div>
                        @endforeach

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
                            // $sizes = ['468x392', '468x392', '468x392', '468x392'];
                            $counter = 0;
                        @endphp


                        <!-- PROJECT #1 -->
                        @foreach ($portofolio as $item)
                            @php
                                // $currentSize = explode('x', $sizes[$counter % count($sizes)]);
                                // $width = $currentSize[0];
                                // $height = $currentSize[1];
                                $counter++;
                            @endphp

                            <div class="filter-item illustration branding">
                                <div class="hover-overlay r-12">
                                    <!-- Image -->
                                    {{-- {{ $width }} {{ $height }} --}}

                                    <img class="img-fluid" src="{{ Storage::url($item->post_image) }}"
                                        style="height: auto !important; width: 100%" alt="project-preview">
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
                        <h2>Why do people choose Us?</h2>

                        <!-- Text -->
                        <p>Kami dipilih karena komitmen kami dalam memberikan solusi yang tepat dan terpercaya untuk setiap
                            kebutuhan bisnis Anda.
                        </p>

                        <!-- List -->
                        <ul class="simple-list">

                            <li class="list-item">
                                <p>Kami berkomitmen untuk memberikan layanan terbaik dengan fokus pada kepuasan pelanggan
                                    dan inovasi yang berkelanjutan.
                                </p>
                            </li>

                            <li class="list-item">
                                <p class="mb-0">Dengan pengalaman dan keahlian yang mendalam, kami siap membantu Anda
                                    mencapai tujuan bisnis Anda dengan lebih baik.
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
                                    <p>Temukan solusi terbaru dan terdepan untuk mendorong pertumbuhan bisnis Anda.</p>

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
                                    <p>Manfaatkan keahlian kami dalam menyediakan solusi yang terbukti untuk mengoptimalkan
                                        operasi bisnis Anda.</p>

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
                                    <p>Hadirkan produk dan layanan unggulan dengan standar tertinggi untuk kepuasan
                                        pelanggan yang optimal.</p>

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
                                    <p>Kami berkomitmen untuk menyediakan layanan yang memprioritaskan kebutuhan dan
                                        kepuasan pelanggan sebagai fokus utama.</p>

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
    {{-- @include('pages.portal.components.modal') --}}
@endsection
