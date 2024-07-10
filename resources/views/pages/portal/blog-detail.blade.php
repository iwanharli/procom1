@extends('layouts.portal')

@section('title', "{$postData->post_title}")

@section('portal_content')
    <!-- SINGLE POST ============================================= -->
    <section id="single-post" class="pb-90 inner-page-hero blog-page-section division">
        <div class="container">
            <div class="row justify-content-center">

                <!-- SINGLE POST CONTENT -->
                <div class="col-xl-10">
                    <div class="post-content">


                        <!--  SINGLE POST TITLE -->
                        <div class="single-post-title text-center">

                            <!-- Post Meta -->
                            <div class="blog-post-meta">
                                <ul class="post-meta-list ico-15">
                                    <li>
                                        <p class="p-xl">{{ $postData->category->name }}</p>
                                    </li>
                                    <li class="meta-list-divider">
                                        <p><span class="flaticon-minus-1"></span></p>
                                    </li>
                                    <li>
                                        <p class="p-xl">{{ date('d F Y', strtotime($postData->published_at)) }}</p>
                                    </li>
                                </ul>
                            </div>

                            <!-- Title -->
                            <h2 class="h2-lg">{{ $postData->post_title }}</h2>

                            <!-- Text -->
                            <p class="p-lg">
                                {{ $postData->post_teaser }}
                            </p>

                        </div> <!-- END SINGLE POST TITLE -->


                        <!-- SINGLE POST IMAGE -->
                        <div class="blog-post-img pb-60">
                            <img class="img-fluid r-12" src="{{ Storage::url($postData->post_image) }}"
                                alt="blog-post-image">
                        </div>


                        <!-- SINGLE POST TEXT -->
                        <div class="single-post-txt" style="text-align: justify;">
                            {!! $postData->post_content !!}
                        </div>
                        <!-- END SINGLE POST TEXT -->


                        <!-- POST DATA -->
                        <div class="post-data t-border">
                            <div class="row d-flex align-items-center">


                                <!-- POST AUTHOR -->
                                <div class="col-md-6">
                                    <div class="post-author clearfix">

                                        <!-- Avatar -->
                                        @if ($postData->user->profile != null)
                                            <div class="post-author-avatar">
                                                <img src="{{ Storage::url($postData->user->profile) }}" alt="post-author">
                                            </div>
                                        @else
                                            <div class="post-author-avatar">
                                                <img src="https://ui-avatars.com/api/?name={{ $postData->user->name }}"
                                                    alt="post-author">
                                            </div>
                                        @endif

                                        <!-- Data -->
                                        <div class="post-author-txt">
                                            <h6 class="h6-lg">{{ $postData->user->name }}</h6>
                                            <p>{{ $postData->user->roles }} </p>
                                        </div>

                                    </div>
                                </div> <!-- PEND OST AUTHOR -->


                                <!-- POST SHARE LINKS -->
                                <div class="col-md-6">
                                    <div class="post-share-list text-end">
                                        <p>Like the article? Spread the word</p>
                                        <ul class="share-social-icons ico-20 text-center clearfix">
                                            <li><a href="#" class="share-ico"><span
                                                        class="flaticon-twitter-1"></span></a></li>
                                            <li><a href="#" class="share-ico"><span
                                                        class="flaticon-facebook"></span></a></li>
                                            <li><a href="#" class="share-ico"><span
                                                        class="flaticon-linkedin-logo"></span></a></li>
                                            <li><a href="#" class="share-ico"><span
                                                        class="flaticon-bookmark"></span></a></li>
                                        </ul>
                                    </div>
                                </div> <!-- END POST SHARE LINKS -->


                            </div>
                        </div> <!-- END POST DATA -->

                        <!-- DIVIDER LINE -->
                        <hr class="divider mb-5">

                        <!-- POST COMMENTS -->
                        <div id="disqus_thread"></div>

                        <script>
                            /**
                             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */

                            var disqus_config = function() {
                                this.page.url = '{{ URL::current() }}'; // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier =
                                    {{ $postData->slug }}; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                            };

                            (function() { // DON'T EDIT BELOW THIS LINE
                                var d = document,
                                    s = d.createElement('script');
                                s.src = 'https://procom.disqus.com/embed.js';
                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <!-- END POST COMMENTS -->


                    </div>
                </div> <!-- END SINGLE POST CONTENT -->


            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END SINGLE POST -->




    <!-- BLOG-1 ============================================= -->
    <section id="blog-1" class="bg--whitesmoke pt-100 pb-60 blog-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-9">
                    <div class="section-title mb-70">
                        <h2 class="h2-xl">Keep Reading...</h2>
                    </div>
                </div>
            </div>


            <!-- BLOG POSTS -->
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">


                <!-- BLOG POST -->
                @foreach ($blogRandom as $item)
                    <?php
                    $date = date('Y-m-d', strtotime($item->published_at));
                    ?>

                    <div class="col">
                        <div id="bp-1-1" class="blog-post wow animate__animated animate__fadeInUp">

                            <!-- BLOG POST IMAGE -->
                            <div class="blog-post-img r-12">
                                <div class="hover-overlay">
                                    <img class="img-fluid" src="{{ Storage::url($item->post_image) }}"
                                        alt="blog-post-image">
                                    <div class="item-overlay"></div>
                                </div>
                            </div>

                            <!-- BLOG POST TEXT -->
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

                                <!-- Post Link -->
                                <h5>
                                    <a href="{{ route('blog.detail', ['date' => $date, 'slug' => $item->slug]) }}">
                                        {{ $item->title }}
                                    </a>
                                </h5>

                                <!-- Short Description -->
                                <p>{{ $item->post_teaser }}</p>

                            </div> <!-- END BLOG POST TEXT -->

                        </div>
                    </div>
                @endforeach
                <!-- END  BLOG POST -->


            </div> <!-- END BLOG POSTS -->


        </div>
    </section> <!-- END BLOG-1 -->
@endsection
