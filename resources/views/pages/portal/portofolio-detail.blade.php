@extends('layouts.portal')

@section('title', "{$postData->post_title}")

@section('portal_content')
    <!-- PROJECT DETAILS
                                                               ============================================= -->
    <section id="project-details" class="bg--snow inner-page-hero project-details division">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-xl-10">


                    <!-- PROJECT TITLE -->
                    <div class="project-title">

                        <!-- Project Category -->
                        <div class="project-category">
                            <span>{{ $postData->category->name }}</span>
                        </div>

                        <!-- Title -->
                        <h2 class="h2-xl">{{ $postData->post_title }}</h2>

                        <!-- Text -->
                        <p class="p-lg">{{ $postData->post_teaser }}</p>
                    </div>


                    <!-- PROJECT PREVIEW IMAGE  -->
                    <div class="project-priview-img">
                        <img class="img-fluid r-12" src="{{ Storage::url($postData->post_image) }}" alt="project-preview">
                    </div>


                    <!-- PROJECT DATA -->
                    <div class="project-data b-border">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">

                            <div class="col">
                                <p class="p-md"><span>Category:</span> {{ $postData->category->name }}</p>
                            </div>

                            @php
                                $jsonData = json_decode($postData->json_data);
                            @endphp


                            @foreach ($jsonData as $data)
                                <div class="col">
                                    <p class="p-md"><span>{{ $data->label }}:</span> {{ $data->value }}</p>
                                </div>
                            @endforeach

                        </div>
                    </div> <!-- END PROJECT DATA -->

                    <!-- PROJECT DESCRIPTION -->
                    <div class="project-txt" id="post-content">

                        {!! $postData->post_content !!}

                        <!-- MORE PROJECTS BUTTON -->
                        <div class="more-projects ico-25 pt-20 pb-100">
                            <a href="{{ route('portofolio') }}">
                                <h3>More Projects</h3> <span class="flaticon-next"></span>
                            </a>
                        </div>
                    </div>
                    <!-- END PROJECT DESCRIPTION -->


                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- END PROJECT DETAILS -->




    <!-- DIVIDER LINE -->
    <hr class="divider">


    <style>
        p {
            margin-top: 10px;
        }

        ul {
            list-style: disc;
            margin-left: 15px;
        }

        li {
            display: list-item;
            text-align: -webkit-match-parent;
            unicode-bidi: isolate;
        }

        #post-content img {
            border-radius: 20px !important;
            height: 50% !important;
            width: 48% !important;
        }
    </style>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const postContent = document.getElementById('post-content');
            const images = postContent.getElementsByTagName('img');

            Array.from(images).forEach(img => {
                const imgSrc = img.src;
                // const wrapper = document.createElement('div');
                // wrapper.className = 'row d-flex align-items-center project-inner-img';

                const colDiv = document.createElement('div');
                colDiv.className = 'col-md-6';

                const projectImageDiv = document.createElement('div');
                projectImageDiv.className = 'project-image project-preview top-img r-12';

                const hoverOverlayDiv = document.createElement('div');
                hoverOverlayDiv.className = 'hover-overlay';

                const projectLinkDiv = document.createElement('div');
                projectLinkDiv.className = 'project-link ico-35 color--white';

                const anchor = document.createElement('a');
                anchor.className = 'image-link';
                anchor.href = imgSrc;
                anchor.title = '';

                const span = document.createElement('span');
                span.className = 'flaticon-visibility';

                anchor.appendChild(span);
                projectLinkDiv.appendChild(anchor);

                // Move the original image inside the hover overlay
                hoverOverlayDiv.appendChild(img.cloneNode());

                // Add a div for the item overlay
                const itemOverlayDiv = document.createElement('div');
                itemOverlayDiv.className = 'item-overlay';
                hoverOverlayDiv.appendChild(itemOverlayDiv);

                // Append everything to the projectImageDiv
                projectImageDiv.appendChild(hoverOverlayDiv);
                projectImageDiv.appendChild(projectLinkDiv);

                // Append the projectImageDiv to the colDiv
                colDiv.appendChild(projectImageDiv);

                // Append the colDiv to the wrapper
                wrapper.appendChild(colDiv);

                // Replace the original image with the wrapper
                img.parentNode.replaceChild(wrapper, img);
            });
        });
    </script>
@endsection
