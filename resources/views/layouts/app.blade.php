@php
    $app = App\Models\App::where('id', '1')->first();
@endphp
<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ $app->title }} - {{ $app->name ?? 'Default App Name' }}</title>

    {{-- Meta --}}
    <meta name="description" content="{{ (isset($post->post_teaser))? $post->post_teaser : $app->description  }}">

    {{-- Meta Facebook --}}
    <meta property="og:title" content="{{ (isset($post->post_title))? $post->post_title : $app->title }}" />
    <meta property="og:type" content="{{ (isset($post->category->name))? $post->category->name : 'News' }}" />
    <meta property="og:url" content="{{ (isset($post->slug))? route('news-detail', @$item->slug) : $app->link_web }}" />
    <meta property="og:image" content="{{ (isset($post->post_image))? Storage::url($post->post_image) : $app->link_web }}" />

    {{-- Meta Twitter --}}
    <meta name="twitter:title" content="{{ (isset($post->post_title))? $post->post_title : $app->title }}">
    <meta name="twitter:description" content="{{ (isset($post->post_teaser))? $post->post_teaser : $app->description }}">
    <meta name="twitter:image" content="{{ (isset($post->post_image))? Storage::url($post->post_image) : $app->link_web }}">
    <meta name="twitter:card" content="{{ (isset($post->post_image))? Storage::url($post->post_image) : $app->link_web }}">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{ $app ? Storage::url($app->favicon) : asset('path/to/default/favicon.ico') }}"/>

    <!-- CSS  -->
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-style')
</head>

<body>
    <div class="scroll-progress primary-bg"></div>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="text-center">
                    <div data-loader="spinner"></div>
                    <p>Loading...</p>
                </div>
            </div>
        </div>
    </div>
    <div class="main-wrap">
        {{-- Navigation --}}
        @include('includes.navbar')
        <main class="position-relative">
            @include('includes.search')
            @yield('content')
        </main>
        {{-- Footer --}}
        @include('includes.footer')
    </div>
    <!-- Main Wrap End-->
    <div class="dark-mark"></div>
    <!-- Vendor JS-->
    @stack('prepend-script')
    @include('includes.script')
    @stack('addon-script')
</body>

</html>
