@extends('layouts.portal')

@section('title', 'Portofolio')

@section('portal_content')
    <!-- PORTFOLIO #1
       ============================================= -->
    <section id="portfolio-1" class="bg--snow pb-70 inner-page-hero portfolio-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="section-title mb-40">

                        <!-- Title -->
                        <h2 class="h2-title">All we do is dream and craft amazing products</h2>

                        <!-- Text -->
                        <p class="p-xl">Ligula risus auctor tempus magna feugiat lacinia fusce blandit</p>

                    </div>
                </div>
            </div>


            <!-- FILTERING BUTTONS -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="filter-btns mb-70">
                        <button data-filter="*" class="is-checked">All</button>
                        <button data-filter=".web-design"> Web Design</button>
                        <button data-filter=".illustration"> Illustration</button>
                        <button data-filter=".branding"> Branding</button>
                    </div>
                </div>
            </div>


            <!-- FILTERING CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-content">


                        <!-- PROGECT #1 -->
                        <div class="filter-item illustration">
                            <div class="hover-overlay r-12">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('assets/_portal/images/projects/img-01.jpg') }}" alt="project-preview">
                                <div class="item-overlay"></div>

                                <!-- Project Category -->
                                <div class="project-category">
                                    <p>UX, Illustration</p>
                                </div>

                                <!-- Project Data -->
                                <div class="project-description color--white">

                                    <!-- Project Data Text-->
                                    <div class="project-data-txt">

                                        <!-- Project Title-->
                                        <h5>Man Listen Music Use Headphone Illustration Concept</h5>

                                        <!-- Project Rating -->
                                        <div class="project-rating clearfix">
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            (118)
                                        </div>

                                    </div>

                                    <!-- Project Link -->
                                    <div class="project-source ico-25">
                                        <a href="{{ route('portofolio.detail', ['slug' => '1']) }}"><span class="flaticon-right-arrow"></span></a>
                                    </div>

                                </div>

                            </div>
                        </div> <!-- END IMAGE #1 -->


                        <!-- PROGECT #2 -->
                        <div class="filter-item illustration">
                            <div class="hover-overlay r-12">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('assets/_portal/images/projects/img-02.jpg') }}" alt="project-preview">
                                <div class="item-overlay"></div>

                                <!-- Project Category -->
                                <div class="project-category">
                                    <p>UX, Illustration</p>
                                </div>

                                <!-- Project Data -->
                                <div class="project-description color--white">

                                    <!-- Project Data Text-->
                                    <div class="project-data-txt">

                                        <!-- Project Title-->
                                        <h5>Game Day American Football</h5>

                                        <!-- Project Rating -->
                                        <div class="project-rating clearfix">
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            (118)
                                        </div>

                                    </div>

                                    <!-- Project Link -->
                                    <div class="project-source ico-25">
                                        <a href="{{ route('portofolio.detail', ['slug' => '1']) }}"><span class="flaticon-right-arrow"></span></a>
                                    </div>

                                </div>

                            </div>
                        </div> <!-- END IMAGE #2 -->


                        <!-- PROGECT #3 -->
                        <div class="filter-item web-design">
                            <div class="hover-overlay r-12">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('assets/_portal/images/projects/img-03.jpg') }}" alt="project-preview">
                                <div class="item-overlay"></div>

                                <!-- Project Category -->
                                <div class="project-category">
                                    <p>Web Design</p>
                                </div>

                                <!-- Project Data -->
                                <div class="project-description color--white">

                                    <!-- Project Data Text-->
                                    <div class="project-data-txt">

                                        <!-- Project Title-->
                                        <h5>Lady with Closed Eyes Picture</h5>

                                        <!-- Project Rating -->
                                        <div class="project-rating clearfix">
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            (118)
                                        </div>

                                    </div>

                                    <!-- Project Link -->
                                    <div class="project-source ico-25">
                                        <a href="{{ route('portofolio.detail', ['slug' => '1']) }}"><span class="flaticon-right-arrow"></span></a>
                                    </div>

                                </div>

                            </div>
                        </div> <!-- END IMAGE #3 -->


                        <!-- PROGECT #4 -->
                        <div class="filter-item illustration branding">
                            <div class="hover-overlay r-12">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('assets/_portal/images/projects/img-04.jpg') }}" alt="project-preview">
                                <div class="item-overlay"></div>

                                <!-- Project Category -->
                                <div class="project-category">
                                    <p>Branding</p>
                                </div>

                                <!-- Project Data -->
                                <div class="project-description color--white">

                                    <!-- Project Data Text-->
                                    <div class="project-data-txt">

                                        <!-- Project Title-->
                                        <h5>Hello Summer Poster Mockup PSD</h5>

                                        <!-- Project Rating -->
                                        <div class="project-rating clearfix">
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            (118)
                                        </div>

                                    </div>

                                    <!-- Project Link -->
                                    <div class="project-source ico-25">
                                        <a href="{{ route('portofolio.detail', ['slug' => '1']) }}"><span class="flaticon-right-arrow"></span></a>
                                    </div>

                                </div>

                            </div>
                        </div> <!-- END IMAGE #4 -->


                        <!-- PROGECT #5 -->
                        <div class="filter-item illustration">
                            <div class="hover-overlay r-12">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('assets/_portal/images/projects/img-05.jpg') }}" alt="project-preview">
                                <div class="item-overlay"></div>

                                <!-- Project Category -->
                                <div class="project-category">
                                    <p>UX, Illustration</p>
                                </div>

                                <!-- Project Data -->
                                <div class="project-description color--white">

                                    <!-- Project Data Text-->
                                    <div class="project-data-txt">

                                        <!-- Project Title-->
                                        <h5>iPad Showcase Mockup PSD</h5>

                                        <!-- Project Rating -->
                                        <div class="project-rating clearfix">
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            (118)
                                        </div>

                                    </div>

                                    <!-- Project Link -->
                                    <div class="project-source ico-25">
                                        <a href="{{ route('portofolio.detail', ['slug' => '1']) }}"><span class="flaticon-right-arrow"></span></a>
                                    </div>

                                </div>

                            </div>
                        </div> <!-- END IMAGE #5 -->


                        <!-- PROGECT #6 -->
                        <div class="filter-item web-design">
                            <div class="hover-overlay r-12">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('assets/_portal/images/projects/img-06.jpg') }}" alt="project-preview">
                                <div class="item-overlay"></div>

                                <!-- Project Category -->
                                <div class="project-category">
                                    <p>Web Design</p>
                                </div>

                                <!-- Project Data -->
                                <div class="project-description color--white">

                                    <!-- Project Data Text-->
                                    <div class="project-data-txt">

                                        <!-- Project Title-->
                                        <h5>Vector Graphic Design Cover</h5>

                                        <!-- Project Rating -->
                                        <div class="project-rating clearfix">
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            (118)
                                        </div>

                                    </div>

                                    <!-- Project Link -->
                                    <div class="project-source ico-25">
                                        <a href="{{ route('portofolio.detail', ['slug' => '1']) }}"><span class="flaticon-right-arrow"></span></a>
                                    </div>

                                </div>

                            </div>
                        </div> <!-- END IMAGE #6 -->


                        <!-- PROGECT #7 -->
                        <div class="filter-item branding">
                            <div class="hover-overlay r-12">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('assets/_portal/images/projects/img-07.jpg') }}" alt="project-preview">
                                <div class="item-overlay"></div>

                                <!-- Project Category -->
                                <div class="project-category">
                                    <p>Branding</p>
                                </div>

                                <!-- Project Data -->
                                <div class="project-description color--white">

                                    <!-- Project Data Text-->
                                    <div class="project-data-txt">

                                        <!-- Project Title-->
                                        <h5>iPhone 14 Pro Showcase</h5>

                                        <!-- Project Rating -->
                                        <div class="project-rating clearfix">
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            (118)
                                        </div>

                                    </div>

                                    <!-- Project Link -->
                                    <div class="project-source ico-25">
                                        <a href="{{ route('portofolio.detail', ['slug' => '1']) }}"><span class="flaticon-right-arrow"></span></a>
                                    </div>

                                </div>

                            </div>
                        </div> <!-- END IMAGE #7 -->


                        <!-- PROGECT #8 -->
                        <div class="filter-item web-design branding">
                            <div class="hover-overlay r-12">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ asset('assets/_portal/images/projects/img-08.jpg') }}" alt="project-preview">
                                <div class="item-overlay"></div>

                                <!-- Project Category -->
                                <div class="project-category">
                                    <p>Branding</p>
                                </div>

                                <!-- Project Data -->
                                <div class="project-description color--white">

                                    <!-- Project Data Text-->
                                    <div class="project-data-txt">

                                        <!-- Project Title-->
                                        <h5>Poster Mockup PSD Image</h5>

                                        <!-- Project Rating -->
                                        <div class="project-rating clearfix">
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            <span class="flaticon-star"></span>
                                            (118)
                                        </div>

                                    </div>

                                    <!-- Project Link -->
                                    <div class="project-source ico-25">
                                        <a href="{{ route('portofolio.detail', ['slug' => '1']) }}"><span class="flaticon-right-arrow"></span></a>
                                    </div>

                                </div>

                            </div>
                        </div> <!-- END IMAGE #8 -->


                    </div>
                </div>
            </div> <!-- END FILTERING CONTENT -->


        </div> <!-- End container -->
    </section> <!-- END PORTFOLIO #1 -->




    <!-- PAGE PAGINATION
       ============================================= -->
    <div class="bg--snow pb-100 page-pagination theme-pagination">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav aria-label="Page navigation">
                        <ul class="pagination ico-20 justify-content-center">
                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><span
                                        class="flaticon-back"></span></a>
                            </li>
                            <li class="page-item active" aria-current="page"><a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span
                                        class="flaticon-next"></span></a></li>
                        </ul>
                    </nav>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END PAGE PAGINATION -->




    <!-- DIVIDER LINE -->
    <hr class="divider">




    <!-- BRANDS-4
       ============================================= -->
    <div id="brands-4" class="bg--snow py-100 brands-section">
        <div class="container">
            <div class="row">


                <!-- TEXT BLOCK -->
                <div class="col-md-5">
                    <div class="txt-block left-column wow animate__animated animate__fadeInRight">


                        <!-- Section ID -->
                        <span class="section-id">Our Customers</span>

                        <!-- Title -->
                        <h3>Join over 5,000 of the world's leading digital agencies</h3>

                    </div>
                </div> <!-- END TEXT BLOCK -->


                <!-- BRANDS-4 WRAPPER -->
                <div class="col-md-7">
                    <div class="brands-4-wrapper wow animate__animated animate__fadeInLeft">
                        <div class="row row-cols-3 row-cols-sm-3">


                            <!-- BRAND LOGO IMAGE -->
                            <div class="col">
                                <div id="brand-4-1" class="brand-logo">
                                    <a href="#" class="lt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-1.png') }}"
                                            alt="brand-logo"></a>
                                    <a href="#" class="dt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-1w.png') }}"
                                            alt="brand-logo"></a>
                                </div>
                            </div>


                            <!-- BRAND LOGO IMAGE -->
                            <div class="col">
                                <div id="brand-4-2" class="brand-logo">
                                    <a href="#" class="lt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-2.png') }}"
                                            alt="brand-logo"></a>
                                    <a href="#" class="dt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-2w.png') }}"
                                            alt="brand-logo"></a>
                                </div>
                            </div>


                            <!-- BRAND LOGO IMAGE -->
                            <div class="col">
                                <div id="brand-4-3" class="brand-logo">
                                    <a href="#" class="lt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-3.png') }}"
                                            alt="brand-logo"></a>
                                    <a href="#" class="dt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-3w.png') }}"
                                            alt="brand-logo"></a>
                                </div>
                            </div>


                            <!-- BRAND LOGO IMAGE -->
                            <div class="col">
                                <div id="brand-4-4" class="brand-logo">
                                    <a href="#" class="lt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-4.png') }}"
                                            alt="brand-logo"></a>
                                    <a href="#" class="dt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-4w.png') }}"
                                            alt="brand-logo"></a>
                                </div>
                            </div>


                            <!-- BRAND LOGO IMAGE -->
                            <div class="col">
                                <div id="brand-4-5" class="brand-logo">
                                    <a href="#" class="lt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-5.png') }}"
                                            alt="brand-logo"></a>
                                    <a href="#" class="dt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-5w.png') }}"
                                            alt="brand-logo"></a>
                                </div>
                            </div>


                            <!-- BRAND LOGO IMAGE -->
                            <div class="col">
                                <div id="brand-4-6" class="brand-logo">
                                    <a href="#" class="lt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-6.png') }}"
                                            alt="brand-logo"></a>
                                    <a href="#" class="dt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-6w.png') }}"
                                            alt="brand-logo"></a>
                                </div>
                            </div>


                            <!-- BRAND LOGO IMAGE -->
                            <div class="col">
                                <div id="brand-4-7" class="brand-logo">
                                    <a href="#" class="lt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-7.png') }}"
                                            alt="brand-logo"></a>
                                    <a href="#" class="dt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-7w.png') }}"
                                            alt="brand-logo"></a>
                                </div>
                            </div>


                            <!-- BRAND LOGO IMAGE -->
                            <div class="col">
                                <div id="brand-4-8" class="brand-logo">
                                    <a href="#" class="lt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-8.png') }}"
                                            alt="brand-logo"></a>
                                    <a href="#" class="dt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-8w.png') }}"
                                            alt="brand-logo"></a>
                                </div>
                            </div>


                            <!-- BRAND LOGO IMAGE -->
                            <div class="col">
                                <div id="brand-4-9" class="brand-logo">
                                    <a href="#" class="lt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-9.png') }}"
                                            alt="brand-logo"></a>
                                    <a href="#" class="dt-img"><img class="img-fluid" src="{{ asset('assets/_portal/images/brand-9w.png') }}"
                                            alt="brand-logo"></a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> <!-- END BRANDS-4 WRAPPER -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END BRANDS-4 -->




    <!-- DIVIDER LINE -->
    <hr class="divider">
@endsection
