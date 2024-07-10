<!doctype html>
<!-- SolTech - IT Solutions & Technology HTML5 Template design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">

<head>
    @include('layouts._partials._portal._head')
</head>



<body>
    <!-- PRELOADER SPINNER
  ============================================= -->
    <div id="loading" class="loading--theme">
        <div id="loading-center">
            <span class="loader"><span class="loader-inner"></span></span>
        </div>
    </div>

    <!-- PAGE CONTENT
  ============================================= -->
    <div id="page" class="page">




        <!-- HEADER
   ============================================= -->
        @include('layouts._partials._portal._header-menu')
        <!-- END HEADER -->


        {{-- MAIN CONTENT START  ------------------------------------------ --}}
        @yield('portal_content')
        {{-- MAIN CONTENT END  -------------------------------------------- --}}


        <!-- FOOTER-1
    ============================================= -->
        {{-- @include('layouts._partials._portal._footer') --}}
        @if (View::hasSection('footer2'))
            @yield('footer2')
        @else
            @include('layouts._partials._portal._footer1')
        @endif
        <!-- END FOOTER-1 -->
    </div>

    <!-- END PAGE CONTENT -->






    <!-- EXTERNAL SCRIPTS
  ============================================= -->
    @include('layouts._partials._portal._scripts')


</body>

</html>
