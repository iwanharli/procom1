@extends('layouts.portal')

@section('title', 'Our Blog')

@section('portal_content')
    <!-- BLOG LISTING
                                                                                   ============================================= -->
    <section id="blog-page" class="pb-40 inner-page-hero blog-page-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-70">

                        <!-- Title -->
                        <h2 class="h2-title">Latest articles from industry leaders and our talented team</h2>

                        <!-- Text -->
                        {{-- <p class="p-xl">Read the latest articles on customer feedback analytics best practices, building
                            customer-centric products.
                        </p> --}}

                    </div>
                </div>
            </div>


            <!-- BLOG CATEGORY -->
            <div class="row">
                <div class="col">
                    <div class="posts-category ico-20 wow animate__animated animate__fadeInUp">
                        <h5 class="h5-lg">Featured <span class="flaticon-next"></span></h5>
                    </div>
                </div>
            </div>

            <!-- BLOG WRAPPER -->
            <div class="posts-wrapper">
                <div class="row">

                    <!-- BLOG CONTENT -->
                    @foreach ($breakingBlog as $item)
                        <?php

                        if (empty($item->post)) {
                            continue;
                        }

                        $date = date('Y-m-d', strtotime($item->post->published_at));
                        ?>
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-post wow animate__animated animate__fadeInUp">

                                <!-- BLOG IMAGE -->
                                <a href="{{ route('blog.detail', ['date' => $date, 'slug' => $item->post->slug]) }}">
                                    <div class="blog-post-img r-12">
                                        <div class="hover-overlay">
                                            <img class="img-fluid" src="{{ Storage::url($item->post->post_image) }}"
                                                alt="blog-post-image">
                                            <div class="item-overlay"></div>
                                        </div>
                                    </div>
                                </a>

                                <!-- BLOG TEXT -->
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

                                    <!-- BLOG TITLE -->
                                    <h5>
                                        <a
                                            href="{{ route('blog.detail', ['date' => $date, 'slug' => $item->post->slug]) }}">
                                            {{ $item->post->post_title }}
                                        </a>
                                    </h5>

                                    <!-- BLOG SHORT Description -->
                                    <p>{{ $item->post->post_teaser }}</p>

                                    <!-- Post Comments -->
                                    {{-- <p class="p-sm post-comments">9 Comments</p> --}}

                                </div> <!-- END BLOG TEXT -->

                            </div>
                        </div>
                    @endforeach
                    <!-- END  BLOG -->

                </div>
            </div> <!-- END BLOG WRAPPER -->


            <!-- BLOG CATEGORY -->
            <div class="row">
                <div class="col">
                    <div class="posts-category ico-20 wow animate__animated animate__fadeInUp">
                        <h5 class="h5-lg">All Article <span class="flaticon-next"></span></h5>
                    </div>
                </div>
            </div>


            <!-- BLOG WRAPPER -->
            <div class="posts-wrapper">
                <div class="row">

                    @foreach ($postData as $item)
                        <?php
                        $date = date('Y-m-d', strtotime($item->published_at));
                        ?>

                        <!-- BLOG #4 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-post wow animate__animated animate__fadeInUp">

                                <!-- BLOG IMAGE -->
                                <a href="{{ route('blog.detail', ['date' => $date, 'slug' => $item->slug]) }}">
                                    <div class="blog-post-img r-12">
                                        <div class="hover-overlay">
                                            <img class="img-fluid" src="{{ Storage::url($item->post_image) }}"
                                                alt="blog-post-image">
                                            <div class="item-overlay"></div>
                                        </div>
                                    </div>
                                </a>

                                <!-- BLOG TEXT -->
                                <div class="blog-post-txt">

                                    <!-- Post Meta -->
                                    <div class="blog-post-meta">
                                        <ul class="post-meta-list ico-10">
                                            <li>
                                                <p class="p-sm">{{ $item->category->name }}</p>
                                            </li>
                                            <li class="meta-list-divider">
                                                <p><span class="flaticon-minus-1"></span></p>
                                            </li>
                                            <li>
                                                <p class="p-sm">{{ date('d F Y', strtotime($item->published_at)) }}</p>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- BLOG Link -->
                                    <h5>
                                        <a href="{{ route('blog.detail', ['date' => $date, 'slug' => $item->slug]) }}">
                                            {{ $item->post_title }}
                                        </a>
                                    </h5>

                                    <!-- BLOG SHORT Description -->
                                    <p>{{ $item->post_teaser }}</p>

                                    <!-- Post Comments -->
                                    {{-- <p class="p-sm post-comments">21 Comments</p> --}}

                                </div> <!-- END BLOG TEXT -->

                            </div>
                        </div> <!-- END BLOG -->
                    @endforeach


                    <!-- PAGE PAGINATION ============================================= -->
                    @include('pages.portal.components.pagination')
                    <!-- End pagination  -->

                </div>
            </div> <!--END BLOG WRAPPER -->


        </div> <!-- End container -->
    </section>
    <!-- END BLOG LISTING -->







    <!-- DIVIDER LINE -->
    <hr class="divider">
@endsection
