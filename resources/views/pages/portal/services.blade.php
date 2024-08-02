@extends('layouts.portal')

@section('title', 'Our Services')

@section('portal_content')
    <!-- FEATURES-2 ============================================= -->
    <section id="features-2" class="py-100 mt-50 features-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="section-title mb-80">

                        <!-- Title -->
                        <h2 class="h2-xl">Your Best Solutions for Software and Security</h2>

                        <!-- Text -->
                        <p class="p-xl">Kami menawarkan solusi menyeluruh yang dirancang untuk meningkatkan efisiensi dan
                            keamanan bisnis Anda. Dengan pendekatan komprehensif dan teknologi terkini, kami memastikan
                            setiap aspek kebutuhan IT Anda terpenuhi dengan sempurna.</p>

                    </div>
                </div>
            </div>


            <!-- FEATURES-2 WRAPPER -->
            <div class="fbox-wrapper">
                <div class="row row-cols-1 row-cols-md-2 rows-3">


                    <!-- FEATURE BOX #1 -->
                    @foreach ($services as $key => $value)
                        <div class="col">
                            <div class="fbox-2 fb-1 wow animate__animated animate__fadeInUp">

                                <!-- Icon -->
                                <div class="fbox-ico-wrap">
                                    <div class="fbox-ico color--theme ico-55">
                                        <div class="shape-ico color--theme">

                                            <!-- Vector Icon -->
                                            <span class="{{ $value['icon'] }}" style="font-size: 3em"></span>

                                            <!-- Shape -->
                                            <svg viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M69.8,-23C76.3,-2.7,57.6,25.4,32.9,42.8C8.1,60.3,-22.7,67,-39.1,54.8C-55.5,42.7,-57.5,11.7,-48.6,-11.9C-39.7,-35.5,-19.8,-51.7,5.9,-53.6C31.7,-55.6,63.3,-43.2,69.8,-23Z"
                                                    transform="translate(100 100)" />
                                            </svg>

                                        </div>
                                    </div>
                                </div>

                                <!-- Text -->
                                <div class="fbox-txt">
                                    <h5>{{ @$value['title'] }}</h5>
                                    <p>{!! @$value['description'] !!}
                                    </p>
                                </div>

                            </div>
                        </div>
                    @endforeach
                    <!-- END FEATURE BOX #1 -->


                </div> <!-- End row -->
            </div> <!-- END FEATURES-2 WRAPPER -->


        </div> <!-- End container -->
    </section>
    <!-- END FEATURES-2 -->

    <!-- BOX CONTENT ============================================= -->
    <section class="bc-01 ws-wrapper content-section">
        <div class="container">
            <div class="bc-01-wrapper bg--02 bg--fixed r-16">
                <div class="section-overlay bg--fixed">
                    <div class="row d-flex align-items-center">


                        <!-- IMAGE BLOCK -->
                        <div class="col-md-6">
                            <div class="img-block left-column wow animate__animated animate__fadeInRight">
                                <img class="img-fluid lt-img" src="{{ asset('assets/imgs/tech.png') }}" alt="content-image">
                                <img class="img-fluid dt-img" src="{{ asset('assets/imgs/tech.png') }}" alt="content-image">
                            </div>
                        </div>


                        <!-- TEXT BLOCK -->
                        <div class="col-md-6">
                            <div class="txt-block right-column wow animate__animated animate__fadeInLeft">

                                <!-- Section ID -->
                                <span class="section-id">Strategies That Work</span>

                                <!-- Title -->
                                <h2>Effective Digital Solutions</h2>

                                <!-- Text -->
                                <p>Kami menyediakan solusi "all-in-one" yang komprehensif untuk memenuhi berbagai kebutuhan
                                    teknologi perusahaan Anda. Dari pengembangan aplikasi dan desain web hingga integrasi
                                    sistem dan manajemen proyek, kami menghadirkan layanan yang menyeluruh untuk memastikan
                                    efisiensi dan kesuksesan bisnis Anda.
                                </p>

                                <!-- Text -->
                                <p class="mb-0">Tim ahli kami tidak hanya fokus pada kualitas teknis, tetapi juga memahami
                                    pentingnya strategi bisnis yang terintegrasi dan berkelanjutan. Dengan pendekatan yang
                                    terpadu, kami siap membantu Anda menghadapi tantangan teknologi dengan solusi yang
                                    inovatif dan dapat diandalkan.
                                </p>

                            </div>
                        </div> <!-- END TEXT BLOCK -->


                    </div> <!-- End row -->
                </div> <!-- End section overlay -->
            </div> <!-- End content wrapper -->
        </div> <!-- End container -->
    </section>
    <!-- END BOX CONTENT -->

    <!-- INTEGRATIONS-4 ============================================= -->
    <section id="integrations-4" class="pt-100 pb-100 integrations-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="section-title mb-70">

                        <!-- Title -->
                        <h2 class="h2-xl">Diverse Technologies for Diverse Needs</h2>

                        <!-- Text -->
                        <p class="p-xl">Kami siap menyediakan solusi yang sesuai dengan tantangan teknologi Anda. Kami
                            memahami keunikannya setiap kebutuhan teknologi, dan kami menyediakan berbagai solusi inovatif
                            untuk mendukung kesuksesan bisnis Anda.</p>

                    </div>
                </div>
            </div>


            <!-- INTEGRATIONS-4 WRAPPER -->
            <div class="int-4-wrapper">
                <div class="row row-cols-3 row-cols-sm-4 row-cols-md-6">


                    <!-- INTEGRATION TOOL #1 -->
                    @foreach ($stacks as $key => $value)
                        <div class="col">
                            <a href="#">
                                <div class="int_tool-4 r-12 wow animate__animated animate__fadeInUp">
                                    <img class="img-fluid" src="{{ Storage::url('assets/stack/' . $value) }}"
                                        alt="tool-logo">
                                    <h6>{{ ucwords(str_replace('.png', '', $value)) }}</h6>
                                </div>
                            </a>
                        </div>
                    @endforeach
                    <!-- END INTEGRATION TOOL #1 -->


                </div>
            </div> <!-- END INTEGRATIONS-4 WRAPPER -->


            <!-- MORE BUTTON -->
            <div class="row d-none">
                <div class="col">
                    <div class="more-btn text-center mt-30 wow animate__animated animate__fadeInUp">
                        <a href="{{ route('integration') }}" class="btn r-06 btn--tra-black hover--theme">
                            View All
                            Integrations
                        </a>
                    </div>
                </div>
            </div>


        </div> <!-- End container -->
    </section>
    <!-- END INTEGRATIONS-4 -->

    <!-- BOX CONTENT ============================================= -->
    <section class="bc-01 ws-wrapper content-section">
        <div class="container">
            <div class="bc-01-wrapper bg--02 bg--fixed r-16">
                <div class="section-overlay bg--fixed">
                    <div class="row d-flex align-items-center">


                        <!-- TEXT BLOCK -->
                        <div class="col-md-7">
                            <div class="txt-block right-column wow animate__animated animate__fadeInLeft"
                                style="text-align: justify;">

                                <!-- Section ID -->
                                <span class="section-id">Strategies That Work</span>

                                <!-- Title -->
                                <h2>Software Development</h2>

                                <!-- Text -->
                                <p>
                                    Pengembangan system yang komprehensif dan layanan pembuatan software profesional,
                                    termasuk E-commerce dan berbagal, solust perangkat lunak aplikasi. Tim pengembang kami
                                    yang berpengalaman menawarkan berbagai macam lavanan seperti Pengembangan software
                                    Penjualan, Aplikasi Internal Perusahaan, Aplikasi Periklanan Digital, Sister Inventaris
                                    Barang, dan Sistem Produksi.
                                </p>

                                <!-- Text -->
                                <p>
                                    Percayakan, kepada kami untuk memberikan solusi pengembangan perangkat lunak terbaik
                                    untuk kebutuhan bisnis Anda.
                                </p>

                                <!-- Text -->
                                <p class="mb-0">
                                    Pengembangan system sangat cocok untuk bisnis/perusahaan, perkantoran, dan pemerintahan
                                    yang ingin segera membangun eksistensi online.

                                <ul class="mt-3" style="list-style-type:circle; margin-left: 10%; font-weight:200;">
                                    <li>
                                        Mobile Application Based
                                        <ol type="1">
                                            <li>Android</li>
                                            <li>IOS</li>
                                        </ol>
                                    </li>
                                    <li>Website Application Based</li>
                                </ul>
                                </p>

                            </div>
                        </div> <!-- END TEXT BLOCK -->


                        <!-- IMAGE BLOCK -->
                        <div class="col-md-5">
                            <div class="img-block left-column wow animate__animated animate__fadeInRight">
                                <img class="img-fluid lt-img" src="{{ asset('assets/_portal/images/software.png') }}" alt="content-image">
                                <img class="img-fluid dt-img" src="{{ asset('assets/_portal/images/software.png') }}" alt="content-image">
                            </div>
                        </div>

                    </div> <!-- End row -->
                </div> <!-- End section overlay -->
            </div> <!-- End content wrapper -->
        </div> <!-- End container -->
    </section>
    <!-- END BOX CONTENT -->

    <!-- DIVIDER LINE -->
    <hr class="divider">
@endsection
