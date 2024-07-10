<!-- MODAL WINDOW (NEWSLETTER FORM)
       ============================================= -->
<div id="modal-1" class="modal fade" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">


            <!-- CLOSE BUTTON -->
            <button type="button" class="btn-close ico-10 white-color" data-bs-dismiss="modal" aria-label="Close">
                <span class="flaticon-cancel"></span>
            </button>


            <!-- MODAL CONTENT -->
            <div class="modal-body text-center">


                <!-- IMAGE -->
                <div class="modal-body-img">
                    <img class="img-fluid" src="{{ asset('assets/_portal/images/modal-newsletter.svg') }}"
                        alt="modal-image">
                </div>


                <!-- NEWSLETTER FORM -->
                <div class="modal-body-content">

                    <!-- Title -->
                    <h5 class="h5-md">Stay up to date with our news, ideas and updates</h5>

                    <!-- Form -->
                    <form class="newsletter-form">

                        <div class="input-group">
                            <input type="email" autocomplete="off" class="form-control"
                                placeholder="Your email address" required id="s-email">
                            <span class="input-group-btn">
                                <button type="submit" class="btn r-06 btn--theme hover--theme">Subscribe Now</button>
                            </span>
                        </div>

                        <!-- Newsletter Form Notification -->
                        <label for="s-email" class="form-notification"></label>

                    </form>

                </div> <!-- END NEWSLETTER FORM -->


            </div> <!-- END MODAL CONTENT -->


        </div>
    </div>
</div> <!-- END MODAL WINDOW (NEWSLETTER FORM) -->

<!-- MODAL WINDOW (REQUEST FORM)
               ============================================= -->
<div id="modal-2" class="modal auto-off fade" tabindex="-1" role="dialog" aria-labelledby="modal-2">
    <div class="modal-dialog modal-xl modal-dialog-centered">
        <div class="modal-content">


            <!-- CLOSE BUTTON -->
            <button type="button" class="btn-close ico-10 color--white" data-bs-dismiss="modal" aria-label="Close">
                <span class="flaticon-cancel"></span>
            </button>


            <!-- MODAL CONTENT -->
            <div class="modal-body">
                <div class="container">
                    <div class="row">


                        <!-- BACKGROUND IMAGE -->
                        <div class="col-md-5 bg-img d-none d-sm-flex align-items-end"></div>


                        <!-- REQUEST FORM -->
                        <div class="col-md-7">
                            <div class="modal-body-content">

                                <!-- TEXT -->
                                <div class="request-form-title">

                                    <!-- Title 	-->
                                    <h5 class="h5-lg">Get started for Free!</h5>

                                    <!-- Text -->
                                    <p>Aliquam augue suscipit, luctus neque purus ipsum neque dolor primis libero</p>

                                </div>

                                <!-- FORM -->
                                <form name="requestForm" class="row request-form">

                                    <!-- Form Input -->
                                    <div class="col-md-12">
                                        <input type="text" name="name" class="form-control name"
                                            placeholder="Enter Your Name*" autocomplete="off" required>
                                    </div>

                                    <!-- Form Input -->
                                    <div class="col-md-12">
                                        <input type="email" name="email" class="form-control email"
                                            placeholder="Enter Your Email*" autocomplete="off" required>
                                    </div>

                                    <!-- Form Button -->
                                    <div class="col-md-12 form-btn">
                                        <button type="submit" class="btn r-06 btn--theme hover--theme submit">
                                            Get Started Now
                                        </button>
                                    </div>

                                    <!-- Form Message -->
                                    <div class="col-md-12 request-form-msg">
                                        <span class="loading"></span>
                                    </div>

                                </form> <!-- END FORM -->

                            </div>
                        </div> <!-- END REQUEST FORM -->


                    </div>
                </div>
            </div> <!-- END MODAL CONTENT -->


        </div>
    </div>
</div> <!-- END MODAL WINDOW (REQUEST FORM) -->
