@extends('layouts.portal')

@section('portal_content')
    <!-- INTEGRATIONS-2
       ============================================= -->
    <section id="integrations-2" class="pt-100 pb-100 mt-50 integrations-section division">
        <div class="container">


            <!-- SECTION TITLE -->
            <div class="row justify-content-center">
                <div class="col-md-9">
                    <div class="section-title mb-40">

                        <!-- Title -->
                        <h2 class="h2-xl">Explore Integrations</h2>

                        <!-- Text -->
                        <p class="p-xl">Your favorite tools are already here.</p>

                    </div>
                </div>
            </div>


            <!-- FILTERING BUTTONS -->
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="filter-btns mb-50">
                        <button data-filter="*" class="is-checked">All</button>
                        <button data-filter=".collaboration">Collaboration</button>
                        <button data-filter=".cust_exp">Customer Experience</button>
                        <button data-filter=".analytics">Analytics</button>
                        <button data-filter=".automations">Automations</button>
                    </div>
                </div>
            </div>


            <!-- FILTERING CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-content">


                        <!-- INTEGRATION TOOL #1 -->
                        <div class="filter-item collaboration">
                            <div class="int_tool-2 r-12 wow animate__animated animate__fadeInUp">
                                <a href="#">

                                    <!-- TOOL LOGO -->
                                    <div class="tool_logo">
                                        <img class="img-fluid" src="{{ asset('assets/_portal/images/png_icons/slack.png') }}" alt="tool-logo">
                                        <h6 class="h6-lg">Slack</h6>
                                    </div>

                                    <!-- TOOL DESCRIPTION -->
                                    <div class="tool_description">
                                        <p>Luctus varius purus ipsum a neque blandit dolor primis libero tempus</p>
                                    </div>

                                </a>
                            </div>
                        </div> <!-- END INTEGRATION TOOL #1 -->


                        <!-- INTEGRATION TOOL #2 -->
                        <div class="filter-item automations">
                            <div class="int_tool-2 r-12 wow animate__animated animate__fadeInUp">
                                <a href="#">

                                    <!-- TOOL LOGO -->
                                    <div class="tool_logo">
                                        <img class="img-fluid" src="{{ asset('assets/_portal/images/png_icons/zapier.png') }}" alt="tool-logo">
                                        <h6 class="h6-lg">Zapier</h6>
                                    </div>

                                    <!-- TOOL DESCRIPTION -->
                                    <div class="tool_description">
                                        <p>Luctus varius purus ipsum a neque blandit dolor primis libero tempus</p>
                                    </div>

                                </a>
                            </div>
                        </div> <!-- END INTEGRATION TOOL #2 -->


                        <!-- INTEGRATION TOOL #3 -->
                        <div class="filter-item cust_exp">
                            <div class="int_tool-2 r-12 wow animate__animated animate__fadeInUp">
                                <a href="#">

                                    <!-- TOOL LOGO -->
                                    <div class="tool_logo">
                                        <img class="img-fluid lt-img" src="{{ asset('assets/_portal/images/png_icons/zendesk.png') }}" alt="tool-logo">
                                        <img class="img-fluid dt-img" src="{{ asset('assets/_portal/images/png_icons/zendesk-dark.png') }}"
                                            alt="tool-logo">
                                        <h6 class="h6-lg">Zendesk</h6>
                                    </div>

                                    <!-- TOOL DESCRIPTION -->
                                    <div class="tool_description">
                                        <p>Luctus varius purus ipsum a neque blandit dolor primis libero tempus</p>
                                    </div>

                                </a>
                            </div>
                        </div> <!-- END INTEGRATION TOOL #3 -->


                        <!-- INTEGRATION TOOL #4 -->
                        <div class="filter-item analytics">
                            <div class="int_tool-2 r-12 wow animate__animated animate__fadeInUp">
                                <a href="#">

                                    <!-- TOOL LOGO -->
                                    <div class="tool_logo">
                                        <img class="img-fluid" src="{{ asset('assets/_portal/images/png_icons/amplitude.png') }}" alt="tool-logo">
                                        <h6 class="h6-lg">Amplitude</h6>
                                    </div>

                                    <!-- TOOL DESCRIPTION -->
                                    <div class="tool_description">
                                        <p>Luctus varius purus ipsum a neque blandit dolor primis libero tempus</p>
                                    </div>

                                </a>
                            </div>
                        </div> <!-- END INTEGRATION TOOL #4 -->


                        <!-- INTEGRATION TOOL #5 -->
                        <div class="filter-item collaboration">
                            <div class="int_tool-2 r-12 wow animate__animated animate__fadeInUp">
                                <a href="#">

                                    <!-- TOOL LOGO -->
                                    <div class="tool_logo">
                                        <img class="img-fluid" src="{{ asset('assets/_portal/images/png_icons/loom.png') }}" alt="tool-logo">
                                        <h6 class="h6-lg">Loom</h6>
                                    </div>

                                    <!-- TOOL DESCRIPTION -->
                                    <div class="tool_description">
                                        <p>Luctus varius purus ipsum a neque blandit dolor primis libero tempus</p>
                                    </div>

                                </a>
                            </div>
                        </div> <!-- END INTEGRATION TOOL #5 -->


                        <!-- INTEGRATION TOOL #6 -->
                        <div class="filter-item cust_exp">
                            <div class="int_tool-2 r-12 wow animate__animated animate__fadeInUp">
                                <a href="#">

                                    <!-- TOOL LOGO -->
                                    <div class="tool_logo">
                                        <img class="img-fluid" src="{{ asset('assets/_portal/images/png_icons/intercom.png') }}" alt="tool-logo">
                                        <h6 class="h6-lg">Intercom</h6>
                                    </div>

                                    <!-- TOOL DESCRIPTION -->
                                    <div class="tool_description">
                                        <p>Luctus varius purus ipsum a neque blandit dolor primis libero tempus</p>
                                    </div>

                                </a>
                            </div>
                        </div> <!-- END INTEGRATION TOOL #6 -->


                        <!-- INTEGRATION TOOL #7 -->
                        <div class="filter-item collaboration">
                            <div class="int_tool-2 r-12 wow animate__animated animate__fadeInUp">
                                <a href="#">

                                    <!-- TOOL LOGO -->
                                    <div class="tool_logo">
                                        <img class="img-fluid" src="{{ asset('assets/_portal/images/png_icons/discord.png') }}" alt="tool-logo">
                                        <h6 class="h6-lg">Discord</h6>
                                    </div>

                                    <!-- TOOL DESCRIPTION -->
                                    <div class="tool_description">
                                        <p>Luctus varius purus ipsum a neque blandit dolor primis libero tempus</p>
                                    </div>

                                </a>
                            </div>
                        </div> <!-- END INTEGRATION TOOL #7 -->


                        <!-- INTEGRATION TOOL #8 -->
                        <div class="filter-item analytics">
                            <div class="int_tool-2 r-12 wow animate__animated animate__fadeInUp">
                                <a href="#">

                                    <!-- TOOL LOGO -->
                                    <div class="tool_logo">
                                        <img class="img-fluid" src="{{ asset('assets/_portal/images/png_icons/google_sheets.png') }}" alt="tool-logo">
                                        <h6 class="h6-lg">Google Sheets</h6>
                                    </div>

                                    <!-- TOOL DESCRIPTION -->
                                    <div class="tool_description">
                                        <p>Luctus varius purus ipsum a neque blandit dolor primis libero tempus</p>
                                    </div>

                                </a>
                            </div>
                        </div> <!-- END INTEGRATION TOOL #8 -->


                        <!-- INTEGRATION TOOL #9 -->
                        <div class="filter-item analytics">
                            <div class="int_tool-2 r-12 wow animate__animated animate__fadeInUp">
                                <a href="#">

                                    <!-- TOOL LOGO -->
                                    <div class="tool_logo">
                                        <img class="img-fluid" src="{{ asset('assets/_portal/images/png_icons/google_analytics.png') }}"
                                            alt="tool-logo">
                                        <h6 class="h6-lg">Google Analytics</h6>
                                    </div>

                                    <!-- TOOL DESCRIPTION -->
                                    <div class="tool_description">
                                        <p>Luctus varius purus ipsum a neque blandit dolor primis libero tempus</p>
                                    </div>

                                </a>
                            </div>
                        </div> <!-- END INTEGRATION TOOL #9 -->


                        <!-- INTEGRATION TOOL #10 -->
                        <div class="filter-item cust_exp">
                            <div class="int_tool-2 r-12 wow animate__animated animate__fadeInUp">
                                <a href="#">

                                    <!-- TOOL LOGO -->
                                    <div class="tool_logo">
                                        <img class="img-fluid" src="{{ asset('assets/_portal/images/png_icons/hubspot.png') }}" alt="tool-logo">
                                        <h6 class="h6-lg">HubSpot</h6>
                                    </div>

                                    <!-- TOOL DESCRIPTION -->
                                    <div class="tool_description">
                                        <p>Luctus varius purus ipsum a neque blandit dolor primis libero tempus</p>
                                    </div>

                                </a>
                            </div>
                        </div> <!-- END INTEGRATION TOOL #10 -->


                        <!-- INTEGRATION TOOL #11 -->
                        <div class="filter-item collaboration">
                            <div class="int_tool-2 r-12 wow animate__animated animate__fadeInUp">
                                <a href="#">

                                    <!-- TOOL LOGO -->
                                    <div class="tool_logo">
                                        <img class="img-fluid" src="{{ asset('assets/_portal/images/png_icons/notion.png') }}" alt="tool-logo">
                                        <h6 class="h6-lg">Notion</h6>
                                    </div>

                                    <!-- TOOL DESCRIPTION -->
                                    <div class="tool_description">
                                        <p>Luctus varius purus ipsum a neque blandit dolor primis libero tempus</p>
                                    </div>

                                </a>
                            </div>
                        </div> <!-- END INTEGRATION TOOL #11 -->


                        <!-- INTEGRATION TOOL #12 -->
                        <div class="filter-item automations">
                            <div class="int_tool-2 r-12 wow animate__animated animate__fadeInUp">
                                <a href="#">

                                    <!-- TOOL LOGO -->
                                    <div class="tool_logo">
                                        <img class="img-fluid" src="{{ asset('assets/_portal/images/png_icons/trello.png') }}" alt="tool-logo">
                                        <h6 class="h6-lg">Trello</h6>
                                    </div>

                                    <!-- TOOL DESCRIPTION -->
                                    <div class="tool_description">
                                        <p>Luctus varius purus ipsum a neque blandit dolor primis libero tempus</p>
                                    </div>

                                </a>
                            </div>
                        </div> <!-- END INTEGRATION TOOL #12 -->


                        <!-- INTEGRATION TOOL #13 -->
                        <div class="filter-item cust_exp">
                            <div class="int_tool-2 r-12 wow animate__animated animate__fadeInUp">
                                <a href="#">

                                    <!-- TOOL LOGO -->
                                    <div class="tool_logo">
                                        <img class="img-fluid" src="{{ asset('assets/_portal/images/png_icons/mailchimp.png') }}" alt="tool-logo">
                                        <h6 class="h6-lg">MailChimp</h6>
                                    </div>

                                    <!-- TOOL DESCRIPTION -->
                                    <div class="tool_description">
                                        <p>Luctus varius purus ipsum a neque blandit dolor primis libero tempus</p>
                                    </div>

                                </a>
                            </div>
                        </div> <!-- END INTEGRATION TOOL #13 -->


                        <!-- INTEGRATION TOOL #14 -->
                        <div class="filter-item automations">
                            <div class="int_tool-2 r-12 wow animate__animated animate__fadeInUp">
                                <a href="#">

                                    <!-- TOOL LOGO -->
                                    <div class="tool_logo">
                                        <img class="img-fluid" src="{{ asset('assets/_portal/images/png_icons/gmail.png') }}" alt="tool-logo">
                                        <h6 class="h6-lg">Gmail</h6>
                                    </div>

                                    <!-- TOOL DESCRIPTION -->
                                    <div class="tool_description">
                                        <p>Luctus varius purus ipsum a neque blandit dolor primis libero tempus</p>
                                    </div>

                                </a>
                            </div>
                        </div> <!-- END INTEGRATION TOOL #14 -->


                        <!-- INTEGRATION TOOL #15 -->
                        <div class="filter-item collaboration">
                            <div class="int_tool-2 r-12 wow animate__animated animate__fadeInUp">
                                <a href="#">

                                    <!-- TOOL LOGO -->
                                    <div class="tool_logo">
                                        <img class="img-fluid" src="{{ asset('assets/_portal/images/png_icons/zoom.png') }}" alt="tool-logo">
                                        <h6 class="h6-lg">Zoom</h6>
                                    </div>

                                    <!-- TOOL DESCRIPTION -->
                                    <div class="tool_description">
                                        <p>Luctus varius purus ipsum a neque blandit dolor primis libero tempus</p>
                                    </div>

                                </a>
                            </div>
                        </div> <!-- END INTEGRATION TOOL #15 -->


                    </div>
                </div>
            </div> <!-- END FILTERING CONTENT -->


        </div> <!-- End container -->
    </section> <!-- END INTEGRATIONS-2 -->

    <hr class="divider" />
@endsection
