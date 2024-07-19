<footer id="footer-1" class="pt-100 footer ft-2-rows">
    <div class="container">


        <!-- FOOTER CONTENT -->
        <div class="row footer-links clearfix">


            <!-- FOOTER LINKS #1 -->
            <div class="col-md-2">
                <div class="fl-1">

                    <!-- Title -->
                    <h6 class="d-title">Inti Shine Utama</h6>
                    <h6 class="m-title">Inti Shine Utama</h6>

                    <!-- Links -->
                    <ul class="foo-links clearfix">
                        <li>
                            <p><a href="{{ route('blog') }}">Blog</a></p>
                        </li>
                        <li>
                            <p><a href="{{ route('portofolio') }}">Portofolio</a></p>
                        </li>
                        <li>
                            <p><a href="{{ route('services') }}">Our Services</a></p>
                        </li>
                        <li>
                            <p><a href="{{ route('faqs') }}">Help & Support</a></p>
                        </li>
                    </ul>

                </div>
            </div> <!-- END FOOTER LINKS #1 -->


            <!-- FOOTER LINKS #2 -->
            <div class="col-md-6">
                <div class="fl-2">

                    <!-- Title -->
                    <h6 class="d-title">Latest Article</h6>
                    <h6 class="m-title">Latest Article</h6>

                    <!-- Links -->
                    <ul class="foo-links clearfix">
                        @php
                            $blogFooter = App\Models\Post::with(['user', 'category'])
                                ->where([['post_status', '=', 'Published'], ['published_at', '<', now()]])
                                ->latest()
                                ->take(3)
                                ->get();
                        @endphp

                        @if ($blogFooter ?? false)
                            @foreach ($blogFooter as $item)
                                <li>
                                    <p>
                                        <?php
                                        $date = date('Y-m-d', strtotime($item->published_at));
                                        ?>

                                        <a href="{{ route('blog.detail', ['date' => $date, 'slug' => $item->slug]) }}">
                                            {{ $item->post_title }}
                                        </a>
                                    </p>
                                </li>
                            @endforeach
                        @endif
                    </ul>

                </div>
            </div> <!-- END FOOTER LINKS #2 -->


            <!-- FOOTER LINKS #3,4 -->
            <div class="col-md-2">


                <!-- FOOTER LINKS #4 -->
                <div class="fl-4">

                    <!-- Title -->
                    <h6 class="d-title">Legal</h6>
                    <h6 class="m-title">Legal</h6>

                    <!-- Links -->
                    <ul class="foo-links clearfix">
                        {{-- <li>
                            <p><a href="terms.html">Terms of Use</a></p>
                        </li>
                        <li>
                            <p><a href="privacy.html">Privacy Policy</a></p>
                        </li> --}}
                        {{-- <li>
                            <p><a href="cookies.html">Cookie Policy</a></p>
                        </li> --}}
                    </ul>

                </div> <!-- END FOOTER LINKS #4 -->


            </div> <!-- END FOOTER LINKS #3,4 -->


            <!-- FOOTER LINKS #5,6 -->
            <div class="col-md-2">


                <!-- FOOTER LINKS #5 -->
                <div class="fl-5">

                    <!-- Title -->
                    <h6 class="d-title">About Us</h6>
                    <h6 class="m-title">About Us</h6>

                    <!-- Links -->
                    <ul class="foo-links clearfix">
                        <li>
                            <p><a href="{{ route('about') }}">About Us</a></p>
                        </li>
                        {{-- <li>
                            <p><a href="team.html">Our Team</a></p>
                        </li>
                        <li>
                            <p><a href="careers.html">Careers</a></p>
                        </li> --}}
                    </ul>

                </div> <!-- END FOOTER LINKS #5 -->


                <!-- FOOTER NEWSLETTER FORM -->
                {{-- <div class="footer-form">

                    <!-- Title -->
                    <h6>Follow the Best</h6>

                    <!-- Newsletter Form Input -->
                    <form class="newsletter-form">

                        <div class="input-group r-06">
                            <input type="email" class="form-control" placeholder="Email Address" required
                                id="s-email">
                            <span class="input-group-btn ico-15">
                                <button type="submit" class="btn color--theme">
                                    <span class="flaticon-arrows"></span>
                                </button>
                            </span>
                        </div>

                        <!-- Newsletter Form Notification -->
                        <label for="s-email" class="form-notification"></label>

                    </form>

                </div>  --}}
                <!-- END FOOTER NEWSLETTER FORM -->


            </div> <!-- END FOOTER LINKS #5,6 -->


        </div> <!-- END FOOTER CONTENT -->


        <hr> <!-- FOOTER DIVIDER LINE -->


        <!-- BOTTOM FOOTER -->
        <div class="bottom-footer">
            <div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">


                <!-- FOOTER COPYRIGHT -->
                <div class="col">
                    <div class="footer-copyright">
                        <p class="p-sm">&copy; {{ date('Y') }} {{ config('app.name') }}. <span>All Rights
                                Reserved</span></p>
                    </div>
                </div>


                <!-- FOOTER SOCIALS -->
                <div class="col">
                    {{-- <ul class="bottom-footer-socials ico-20 text-end">
                        <li><a href="#"><span class="flaticon-facebook"></span></a></li>
                        <li><a href="#"><span class="flaticon-twitter-1"></span></a></li>
                        <li><a href="#"><span class="flaticon-linkedin-logo"></span></a></li>
                        <li><a href="#"><span class="flaticon-instagram"></span></a></li>
                    </ul> --}}
                </div>


            </div> <!-- End row -->
        </div> <!-- END BOTTOM FOOTER -->


    </div> <!-- End container -->
</footer>
