@extends('layouts.portal')

@section('title', 'FAQs')

@section('portal_content')
    <!-- FAQs-3
                                       ============================================= -->
    <section id="faqs-3" class="gr--snow pb-100 inner-page-hero faqs-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-70">

                        <!-- Title -->
                        <h2 class="h2-xl">Questions & Answers</h2>

                        <!-- Text -->
                        <p class="p-xl">Beberapa Informasi serta pertanyaan yang umum ditanyakan
                        </p>

                    </div>
                </div>
            </div>


            <!-- ACCORDION WRAPPER -->
            <div class="row justify-content-center">
                <div class="col-lg-11 col-xl-10">


                    <!-- QUESTIONS ACCORDION -->
                    <div class="accordion-wrapper">
                        <ul class="accordion">

                            @foreach ($qa as $key => $value)
                                <!-- QUESTIONS CATEGORY #1 -->
                                <li class="accordion-item {{ $key === 0 ? 'is-active' : '' }}">


                                    <!-- CATEGORY HEADER -->
                                    <div class="accordion-thumb">
                                        <h4>{{ $value['title'] }}</h4>
                                    </div>


                                    <!-- CATEGORY ANSWERS -->
                                    <div class="accordion-panel">

                                        @foreach ($value['content'] as $k => $v)
                                            <!-- QUESTION #1 -->
                                            <div class="accordion-panel-item mb-35">

                                                <!-- Question -->
                                                <div class="faqs-3-question">
                                                    <h5><span>{{ $k + 1 }}.</span> {{ $v['q'] }}</h5>
                                                </div>

                                                <!-- Answer -->
                                                <div class="faqs-3-answer">

                                                    <!-- Text -->
                                                    <p>{{ $v['a'] }}</p>

                                                </div>

                                            </div>
                                            <!-- END QUESTION #1 -->
                                        @endforeach


                                    </div> <!-- END CATEGORY ANSWERS -->


                                </li>
                                <!-- END QUESTIONS CATEGORY #1 -->
                            @endforeach


                        </ul>
                    </div>
                    <!-- END QUESTIONS ACCORDION -->


                    <!-- MORE QUESTIONS LINK -->
                    <div class="more-questions">
                        <div class="more-questions-txt bg--whitesmoke r-100">
                            <p class="p-lg">Have any questions? <a href="{{ route('about') }}" class="color--theme">Get in
                                    Touch</a></p>
                        </div>
                    </div>


                </div>
            </div> <!-- END QUESTIONS ACCORDION -->

        </div> <!-- End container  -->
    </section> <!-- END FAQs-3 -->

    <!-- DIVIDER LINE -->
    <hr class="divider">
@endsection
