@extends('layouts.portal')

@section('title', 'About Us')

@section('portal_content')
    <!-- ABOUT-1
                                   ============================================= -->
    <section id="about-1" class="gr--snow inner-page-hero about-section division">


        <!-- ABOUT-1 TITLE -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-xl-9">
                    <div class="about-1-title">

                        <!-- Title -->
                        <h2 class="h2-title">{{ $about_h1 }}</h2>

                        <!-- Text -->
                        <p class="p-lg">{!! $about_p1 !!}
                        </p>

                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- END ABOUT-1 TITLE -->


        <!-- ABOUT-1 IMAGE -->
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="about-1-img">
                        <img class="img-fluid" src="{{ asset('assets/_portal/images/about.svg') }}" alt="about-image">
                    </div>
                </div>
            </div> <!-- End row -->
        </div> <!-- END ABOUT-1 IMAGE -->


    </section> <!-- END ABOUT-1 -->




    <!-- ABOUT-2
                                   ============================================= -->
    <section id="about-2" class="pt-100 about-section division">
        <div class="container">
            <div class="row">


                <!-- ABOUT TITLE -->
                <div class="col-md-6">
                    <div class="about-2-title wow animate__animated animate__fadeInRight">

                        <!-- Section ID -->
                        <span class="section-id">Why Choose Us</span>

                        <!-- Title -->
                        <h2>{{ $about_h2 }}</h2>

                    </div>
                </div>


                <!-- ABOUT TEXT -->
                <div class="col-md-6">
                    <div class="about-2-txt wow animate__animated animate__fadeInLeft">

                        <!-- Text -->
                        <p>{!! $about_p2 !!} </p>

                    </div>
                </div> <!-- END ABOUT TEXT -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END ABOUT-2 -->




    <!-- BRANDS-1
                                   ============================================= -->
    <div id="brands-1" class="py-100 brands-section">
        <div class="container">


            <!-- BRANDS TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="brands-title">
                        <h6 class="h6-md">Trusted by companies, big or not-so-big:</h6>
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
                                    src="{{ Storage::url('assets/clients/'.$value) }}" alt="brand-logo"></a>
                                <a href="#" class="dt-img"><img class="img-fluid"
                                    src="{{ Storage::url('assets/clients/'.$value) }}" alt="brand-logo"></a>
                            </div>
                        @endforeach


                    </div>
                </div>
            </div> <!-- END BRANDS CAROUSEL -->


        </div> <!-- End container -->
    </div> <!-- END BRANDS-1 -->




    <!-- DIVIDER LINE -->
    <hr class="divider">

    <!-- TEAM-1
                               ============================================= -->
    <section id="team-1" class="py-100 team-section division d-none">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <div class="section-title mb-70">

                        <!-- Title -->
                        <h2 class="h2-xl">Our Leadership Team</h2>

                        <!-- Text -->
                        <p class="p-xl">We are a rapidly growing diverse team with one thing in common:
                            we are customer obsessed!
                        </p>

                    </div>
                </div>
            </div>


            <!-- TEAM MEMBERS WRAPPER -->
            <div class="team-members-wrapper">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4">


                    <!-- TEAM MEMBER #1 -->
                    <div class="col">
                        <div id="tm-1-1" class="team-member mb-60 wow animate__animated animate__fadeInUp">

                            <!-- Team Member Photo -->
                            <div class="team-member-photo r-12">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('assets/_portal/images/team-1.jpg') }}"
                                        alt="team-member-foto">
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- Team Member Data -->
                            <div class="team-member-data">
                                <h6 class="h6-lg">Jonathan Barnes</h6>
                                <p>Founder and CEO</p>
                            </div>

                        </div>
                    </div> <!-- END TEAM MEMBER #1 -->


                    <!-- TEAM MEMBER #2 -->
                    <div class="col">
                        <div id="tm-1-2" class="team-member mb-60 wow animate__animated animate__fadeInUp">

                            <!-- Team Member Photo -->
                            <div class="team-member-photo r-12">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('assets/_portal/images/team-2.jpg') }}"
                                        alt="team-member-foto">
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- Team Member Data -->
                            <div class="team-member-data">
                                <h6 class="h6-lg">Jaime Fletcher</h6>
                                <p>Senior Software Developer</p>
                            </div>

                        </div>
                    </div> <!-- END TEAM MEMBER #2 -->


                    <!-- TEAM MEMBER #3 -->
                    <div class="col">
                        <div id="tm-1-3" class="team-member mb-60 wow animate__animated animate__fadeInUp">

                            <!-- Team Member Photo -->
                            <div class="team-member-photo r-12">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('assets/_portal/images/team-3.jpg') }}"
                                        alt="team-member-foto">
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- Team Member Data -->
                            <div class="team-member-data">
                                <h6 class="h6-lg">Les Bakker</h6>
                                <p>Software Engineer</p>
                            </div>

                        </div>
                    </div> <!-- END TEAM MEMBER #3 -->


                    <!-- TEAM MEMBER #4 -->
                    <div class="col">
                        <div id="tm-1-4" class="team-member mb-60 wow animate__animated animate__fadeInUp">

                            <!-- Team Member Photo -->
                            <div class="team-member-photo r-12">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('assets/_portal/images/team-4.jpg') }}"
                                        alt="team-member-foto">
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- Team Member Data -->
                            <div class="team-member-data">
                                <h6 class="h6-lg">Alyssa Garrison</h6>
                                <p>Web Development</p>
                            </div>

                        </div>
                    </div> <!-- END TEAM MEMBER #4 -->


                    <!-- TEAM MEMBER #5 -->
                    <div class="col">
                        <div id="tm-1-5" class="team-member mb-60 wow animate__animated animate__fadeInUp">

                            <!-- Team Member Photo -->
                            <div class="team-member-photo r-12">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('assets/_portal/images/team-5.jpg') }}"
                                        alt="team-member-foto">
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- Team Member Data -->
                            <div class="team-member-data">
                                <h6 class="h6-lg">Charlotte Johnson</h6>
                                <p>Content Manager</p>
                            </div>

                        </div>
                    </div> <!-- END TEAM MEMBER #5 -->


                    <!-- TEAM MEMBER #6 -->
                    <div class="col">
                        <div id="tm-1-6" class="team-member mb-60 wow animate__animated animate__fadeInUp">

                            <!-- Team Member Photo -->
                            <div class="team-member-photo r-12">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('assets/_portal/images/team-6.jpg') }}"
                                        alt="team-member-foto">
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- Team Member Data -->
                            <div class="team-member-data">
                                <h6 class="h6-lg">Olivia Steiner</h6>
                                <p>Customers Manager</p>
                            </div>

                        </div>
                    </div> <!-- END TEAM MEMBER #6 -->


                    <!-- TEAM MEMBER #7 -->
                    <div class="col">
                        <div id="tm-1-7" class="team-member mb-60 wow animate__animated animate__fadeInUp">

                            <!-- Team Member Photo -->
                            <div class="team-member-photo r-12">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('assets/_portal/images/team-7.jpg') }}"
                                        alt="team-member-foto">
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- Team Member Data -->
                            <div class="team-member-data">
                                <h6 class="h6-lg">Charles Fairless</h6>
                                <p>Customers Manager</p>
                            </div>

                        </div>
                    </div> <!-- END TEAM MEMBER #7 -->


                    <!-- TEAM MEMBER #8 -->
                    <div class="col">
                        <div id="tm-1-8" class="team-member mb-60 wow animate__animated animate__fadeInUp">

                            <!-- Team Member Photo -->
                            <div class="team-member-photo r-12">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ asset('assets/_portal/images/team-8.jpg') }}"
                                        alt="team-member-foto">
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- Team Member Data -->
                            <div class="team-member-data">
                                <h6 class="h6-lg">Nancy Taylor</h6>
                                <p>Head of Marketing</p>
                            </div>

                        </div>
                    </div> <!-- END TEAM MEMBER #8 -->


                </div>
            </div> <!-- END TEAM MEMBERS WRAPPER -->


            <!-- MORE BUTTON -->
            {{-- <div class="row">
                <div class="col">
                    <div class="more-btn text-center wow animate__animated animate__fadeInUp">
                        <a href="#" class="btn r-06 btn--tra-coal hover--theme">Meet The Team</a>
                    </div>
                </div>
            </div> --}}


        </div> <!-- End container -->
    </section>

    <!-- END TEAM-1 -->

    <!-- DIVIDER LINE -->
    <hr class="divider mb-5">


    <!-- BANNER-1 ============================================= -->
    @include('pages.portal.components.banner')
    <!-- END BANNER-1 -->





    {{-- MODAL  --}}
    {{-- @include('pages.portal.components.modal') --}}
@endsection
