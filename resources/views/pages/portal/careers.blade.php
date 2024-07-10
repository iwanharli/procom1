@extends('layouts.portal')

@section('portal_content')
    <!-- CAREERS-1
       ============================================= -->
    <section id="careers-1" class="pt-100 pb-70 mt-50 careers-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-70">

                        <!-- Title -->
                        <h2 class="h2-xl">Current Openings</h2>

                        <!-- Text -->
                        <p class="p-xl">We’re building a better way to work, fueled by transparency, trust, and
                            technology that is a force for positive change for the hourly workforce
                        </p>

                    </div>
                </div>
            </div>


            <!-- OPEN POSITIONS -->
            <div class="row row-cols-1 row-cols-md-2">
                <div class="col-md-12">


                    <!-- JOB POSITION #1 -->
                    <div class="career-item t-border wow animate__animated animate__fadeInUp">
                        <div class="row">

                            <!-- POSITION DESCRIPTION -->
                            <div class="col-md-7 col-lg-6">
                                <div class="position-description">

                                    <!-- Title -->
                                    <h5>Revenue Operations Analyst</h5>

                                    <!-- Data -->
                                    <ul class="position-data ico-15">
                                        <li>
                                            <p>Marketing</p>
                                        </li>
                                        <li class="rb-divider">
                                            <p><span class="flaticon-minus-1"></span></p>
                                        </li>
                                        <li>
                                            <p>Boston, MA</p>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <!-- POSITION WORKPLACE -->
                            <div class="col-sm-8 col-md-3">
                                <div class="position-workplace">
                                    <h6>Remote - Full Time</h6>
                                </div>
                            </div>

                            <!-- POSITION APPLY -->
                            <div class="col-sm-4 col-md-2 col-lg-3">
                                <div class="posting-apply text-end">
                                    <a href="{{ route('careers.detail', ['code' => '1']) }}" class="btn r-06 btn--tra-coal hover--theme">Apply Now</a>
                                </div>
                            </div>

                        </div>
                    </div> <!-- END JOB POSITION #1 -->


                    <!-- JOB POSITION #2 -->
                    <div class="career-item t-border wow animate__animated animate__fadeInUp">
                        <div class="row">

                            <!-- POSITION DESCRIPTION -->
                            <div class="col-md-7 col-lg-6">
                                <div class="position-description">

                                    <!-- Title -->
                                    <h5>Senior Product Manager</h5>

                                    <!-- Data -->
                                    <ul class="position-data ico-15">
                                        <li>
                                            <p>Product</p>
                                        </li>
                                        <li class="rb-divider">
                                            <p><span class="flaticon-minus-1"></span></p>
                                        </li>
                                        <li>
                                            <p>Los Angeles, CA</p>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <!-- POSITION WORKPLACE -->
                            <div class="col-sm-8 col-md-3">
                                <div class="position-workplace">
                                    <h6>On-Site / Full Time</h6>
                                </div>
                            </div>

                            <!-- POSITION APPLY -->
                            <div class="col-sm-4 col-md-2 col-lg-3">
                                <div class="posting-apply text-end">
                                    <a href="{{ route('careers.detail', ['code' => '1']) }}" class="btn r-06 btn--tra-coal hover--theme">Apply Now</a>
                                </div>
                            </div>

                        </div>
                    </div> <!-- END JOB POSITION #2 -->


                    <!-- JOB POSITION #3 -->
                    <div class="career-item t-border wow animate__animated animate__fadeInUp">
                        <div class="row">

                            <!-- POSITION DESCRIPTION -->
                            <div class="col-md-7 col-lg-6">
                                <div class="position-description">

                                    <!-- Title -->
                                    <h5>Mid-Market Account Executive</h5>

                                    <!-- Data -->
                                    <ul class="position-data ico-15">
                                        <li>
                                            <p>Marketing</p>
                                        </li>
                                        <li class="rb-divider">
                                            <p><span class="flaticon-minus-1"></span></p>
                                        </li>
                                        <li>
                                            <p>New York, NY</p>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <!-- POSITION WORKPLACE -->
                            <div class="col-sm-8 col-md-3">
                                <div class="position-workplace">
                                    <h6>Remote - Full Time</h6>
                                </div>
                            </div>

                            <!-- POSITION APPLY -->
                            <div class="col-sm-4 col-md-2 col-lg-3">
                                <div class="posting-apply text-end">
                                    <a href="{{ route('careers.detail', ['code' => '1']) }}" class="btn r-06 btn--tra-coal hover--theme">Apply Now</a>
                                </div>
                            </div>

                        </div>
                    </div> <!-- END JOB POSITION #3 -->


                    <!-- JOB POSITION #4 -->
                    <div class="career-item t-border wow animate__animated animate__fadeInUp">
                        <div class="row">

                            <!-- POSITION DESCRIPTION -->
                            <div class="col-md-7 col-lg-6">
                                <div class="position-description">

                                    <!-- Title -->
                                    <h5>Customer Support</h5>

                                    <!-- Data -->
                                    <ul class="position-data ico-15">
                                        <li>
                                            <p>Support</p>
                                        </li>
                                        <li class="rb-divider">
                                            <p><span class="flaticon-minus-1"></span></p>
                                        </li>
                                        <li>
                                            <p>Los Angeles, CA</p>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <!-- POSITION WORKPLACE -->
                            <div class="col-sm-8 col-md-3">
                                <div class="position-workplace">
                                    <h6>Remote - Full Time</h6>
                                </div>
                            </div>

                            <!-- POSITION APPLY -->
                            <div class="col-sm-4 col-md-2 col-lg-3">
                                <div class="posting-apply text-end">
                                    <a href="{{ route('careers.detail', ['code' => '1']) }}" class="btn r-06 btn--tra-coal hover--theme">Apply Now</a>
                                </div>
                            </div>

                        </div>
                    </div> <!-- END JOB POSITION #4 -->


                    <!-- JOB POSITION #5 -->
                    <div class="career-item t-border wow animate__animated animate__fadeInUp">
                        <div class="row">

                            <!-- POSITION DESCRIPTION -->
                            <div class="col-md-7 col-lg-6">
                                <div class="position-description">

                                    <!-- Title -->
                                    <h5>Enterprise Customer Success Manager</h5>

                                    <!-- Data -->
                                    <ul class="position-data ico-15">
                                        <li>
                                            <p>Marketing</p>
                                        </li>
                                        <li class="rb-divider">
                                            <p><span class="flaticon-minus-1"></span></p>
                                        </li>
                                        <li>
                                            <p>San Francisco, CA</p>
                                        </li>
                                    </ul>

                                </div>
                            </div>

                            <!-- POSITION WORKPLACE -->
                            <div class="col-sm-8 col-md-3">
                                <div class="position-workplace">
                                    <h6>On-Site - Full Time</h6>
                                </div>
                            </div>

                            <!-- POSITION APPLY -->
                            <div class="col-sm-4 col-md-2 col-lg-3">
                                <div class="posting-apply text-end">
                                    <a href="{{ route('careers.detail', ['code' => '1']) }}" class="btn r-06 btn--tra-coal hover--theme">Apply Now</a>
                                </div>
                            </div>

                        </div>
                    </div> <!-- END JOB POSITION #5 -->


                </div>
            </div> <!-- END OPEN POSITIONS -->


        </div> <!-- End container -->
    </section> <!-- END CAREERS-1 -->




    <!-- BANNER-2
       ============================================= -->
    <section id="banner-2" class="banner-section">
        <div class="container">


            <!-- BANNER-2 WRAPPER -->
            <div class="banner-2-wrapper r-16">
                <div class="banner-overlay ba--03 bg--fixed">
                    <div class="row justify-content-center">


                        <!-- BANNER-2 TEXT -->
                        <div class="col-md-9 col-lg-8">
                            <div class="banner-2-txt l-txt color--white">

                                <!-- Title -->
                                <h2 class="h2-xl">Didn't find the perfect role for you?</h2>

                                <!-- Text -->
                                <p class="p-xl">Reach out to us! We’re always looking to bring aboard people who
                                    are curious, action-oriented.
                                </p>

                                <!-- Button -->
                                <a href="mailto:yourdomain@mail.com"
                                    class="btn btn-md r-06 btn--theme hover--tra-white">yourdomain@mail.com
                                </a>

                            </div>
                        </div> <!-- END BANNER-2 TEXT -->


                    </div> <!-- End row -->
                </div> <!-- End banner overlay -->
            </div> <!-- END BANNER-2 WRAPPER -->


        </div> <!-- End container -->
    </section> <!-- END BANNER-2 -->

    <!-- DIVIDER LINE -->
    <hr class="divider mt-5">
@endsection
