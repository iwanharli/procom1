@extends('layouts.portal')

@section('title', 'Portofolio')

@section('portal_content')
    <!-- PORTFOLIO #1
                                       ============================================= -->
    <section id="portfolio-1" class="bg--snow pb-70 inner-page-hero portfolio-section division">
        <div class="container mb-5">


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
            {{-- <div class="row">
                <div class="col-md-12 text-center">
                    <div class="filter-btns mb-70">
                        <button data-filter="*" class="is-checked">All</button>
                        <button data-filter=".web-design"> Web Design</button>
                        <button data-filter=".illustration"> Illustration</button>
                        <button data-filter=".branding"> Branding</button>
                    </div>
                </div>
            </div> --}}


            <!-- FILTERING CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-content">


                        <!-- PROJECT #1 -->
                        @foreach ($postData as $item)
                            {{-- @php
                                $currentSize = explode('x', $sizes[$counter % count($sizes)]);
                                $width = $currentSize[0];
                                $height = $currentSize[1];
                                $counter++;
                            @endphp --}}
                            <div class="filter-item illustration">
                                <div class="hover-overlay r-12">

                                    <!-- Image -->
                                    <img class="img-fluid" src="{{ Storage::url($item->post_image) }}" {{-- style="height: {{ $height }}px !important;"  --}}
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
                                            <a href="{{ route('portofolio.detail', ['slug' => $item->slug]) }}"><span
                                                    class="flaticon-right-arrow"></span></a>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        @endforeach
                        <!-- END PROJECT -->






                    </div>
                </div>
            </div> <!-- END FILTERING CONTENT -->


        </div> <!-- End container -->

        <!-- PAGE PAGINATION ============================================= -->
        @include('pages.portal.components.pagination')
        <!-- End pagination  -->
    </section> <!-- END PORTFOLIO #1 -->




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
                            @foreach ($client_files as $key => $value)
                            <div class="col">
                                <div id="brand-4-1" class="brand-logo">
                                    <a href="#" class="lt-img"><img class="img-fluid"
                                        src="{{ Storage::url('assets/clients/'.$value) }}" alt="brand-logo"></a>
                                    <a href="#" class="dt-img"><img class="img-fluid"
                                        src="{{ Storage::url('assets/clients/'.$value) }}" alt="brand-logo"></a>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div> <!-- END BRANDS-4 WRAPPER -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </div> <!-- END BRANDS-4 -->




    <!-- DIVIDER LINE -->
    <hr class="divider">
@endsection
