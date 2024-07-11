<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="DSAThemes">
<meta name="description" content="@yield('title')">
<meta name="keywords"
    content="HTML5, DSAThemes, Creative, Agency, Digital Business, IT Solutions, Digital Product, Software, SaaS, Startup, Technology">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- SITE TITLE -->
<title>{{ config('app.name') }} - @yield('title')</title>

<!-- FAVICON AND TOUCH ICONS -->
<link rel="shortcut icon" href="{{ asset('assets/_portal/images/LOGO.ico') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/_portal/images/favicon.ico') }}" type="image/x-icon">
<link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/_portal/images/apple-touch-icon-152x152.png') }}">
<link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/_portal/images/apple-touch-icon-120x120.png') }}">
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/_portal/images/apple-touch-icon-76x76.png') }}">
<link rel="apple-touch-icon" href="{{ asset('assets/_portal/images/apple-touch-icon.png') }}">
<link rel="icon" href="{{ asset('assets/_portal/images/apple-touch-icon.png" type="image/x-icon') }}">

<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700&amp;display=swap"
    rel="stylesheet">

<!-- BOOTSTRAP CSS -->
<link href="{{ asset('assets/_portal/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- FONT ICONS -->
<link href="{{ asset('assets/_portal/css/flaticon.css') }}" rel="stylesheet">

<!-- PLUGINS STYLESHEET -->
<link href="{{ asset('assets/_portal/css/menu.css') }}" rel="stylesheet">
<link id="effect" href="{{ asset('assets/_portal/css/dropdown-effects/fade-down.css') }}" media="all"
    rel="stylesheet">
<link href="{{ asset('assets/_portal/css/magnific-popup.css') }}" rel="stylesheet">
<link href="{{ asset('assets/_portal/css/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/_portal/css/owl.theme.default.min.css') }}" rel="stylesheet">
<link href="{{ asset('assets/_portal/css/lunar.css') }}" rel="stylesheet">

<!-- ON SCROLL ANIMATION -->
<link href="{{ asset('assets/_portal/css/animate.css') }}" rel="stylesheet">

<!-- TEMPLATE CSS -->
<link href="{{ asset('assets/_portal/css/indigo-theme.css') }}" rel="stylesheet">

<!-- Style Switcher CSS -->
<link href="{{ asset('assets/_portal/css/blue-theme.css') }}" rel="alternate stylesheet" title="blue-theme">
<link href="{{ asset('assets/_portal/css/darkblue-theme.css') }}" rel="alternate stylesheet" title="darkblue-theme">
<link href="{{ asset('assets/_portal/css/pink-theme.css') }}" rel="alternate stylesheet" title="pink-theme">
<link href="{{ asset('assets/_portal/css/purple-theme.css') }}" rel="alternate stylesheet" title="purple-theme">
<link href="{{ asset('assets/_portal/css/skyblue-theme.css') }}" rel="alternate stylesheet" title="skyblue-theme">
<link href="{{ asset('assets/_portal/css/violet-theme.css') }}" rel="alternate stylesheet" title="violet-theme">

{{-- AWESOME --}}
<script src="https://kit.fontawesome.com/4545cc9fe6.js" crossorigin="anonymous"></script>

<!-- RESPONSIVE CSS -->
<link href="{{ asset('assets/_portal/css/responsive.css') }}" rel="stylesheet">

<style>
    .menu-active-dark {
        background: #343a40
    }

    .menu-active-light {
        background: #f8f9fa
    }

    #footer.disqus-footer__wrapper {
        display: none !important;
    }

    .disqus-footer.disqus-footer--refresh {
        display: none !important;
    }

    .disqus-footer__list {
        display: none !important;
    }
</style>
