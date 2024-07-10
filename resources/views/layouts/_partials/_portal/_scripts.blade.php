<script src="{{ asset('assets/_portal/js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('assets/_portal/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/_portal/js/modernizr.custom.js') }}"></script>
<script src="{{ asset('assets/_portal/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/_portal/js/jquery.appear.js') }}"></script>
<script src="{{ asset('assets/_portal/js/menu.js') }}"></script>
<script src="{{ asset('assets/_portal/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/_portal/js/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/_portal/js/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/_portal/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/_portal/js/request-form.js') }}"></script>
<script src="{{ asset('assets/_portal/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/_portal/js/jquery.ajaxchimp.min.js') }}"></script>
<script src="{{ asset('assets/_portal/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/_portal/js/lunar.js') }}"></script>
<script src="{{ asset('assets/_portal/js/wow.js') }}"></script>
<script src="{{ asset('assets/_portal/js/cookies-message.js') }}"></script>

<!-- Custom Script -->
<script src="{{ asset('assets/_portal/js/custom.js') }}"></script>

<!-- COOKIES MESSAGE -->
<script>
    $(document).ready(function() {
        setTimeout(function() {
            $.CookiesMessage();
        }, 1800)
    });

    // document.addEventListener("DOMContentLoaded", function() {
    //     var text = "PT. INTI SHINE UTAMA";
    //     var typingElement = document.getElementById("typing-text");
    //     var index = 0;

    //     function type() {
    //         if (index < text.length) {
    //             typingElement.innerHTML += text.charAt(index);
    //             index++;
    //             setTimeout(type, 100);
    //         }
    //     }

    //     type();
    // });
</script>

<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
<!--
  <script>
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-XXXXX-X']);
      _gaq.push(['_trackPageview']);

      (function() {
          var ga = document.createElement('script');
          ga.type = 'text/javascript';
          ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
              '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(ga, s);
      })();
  </script>
  -->

<!-- STYLE SWITCHER -->
<div id="stlChanger d-none">
    <div class="blockChanger bgChanger d-none">
        <a href="#" class="chBut"><span class="flaticon-gear"></span></a>
        <div class="chBody">

            <div class="stBlock text-center">
                <div class="stBgs">
                    <p class="switch"></p>

                    <p>Color Scheme</p>
                    <a class="stB1" href="javascript:chooseStyle('blue-theme', 60)">
                        <img src="{{ asset('assets/_portal/images/color-scheme/blue.jpg') }}" alt=""></a>
                    <a class="stB2" href="javascript:chooseStyle('darkblue-theme', 60)">
                        <img src="{{ asset('assets/_portal/images/color-scheme/darkblue.jpg') }}" alt=""></a>
                    <a class="stB3" href="javascript:chooseStyle('pink-theme', 60)">
                        <img src="{{ asset('assets/_portal/images/color-scheme/pink.jpg') }}" alt=""></a>
                    <a class="stB4" href="javascript:chooseStyle('purple-theme', 60)" style="margin-left:10px;">
                        <img src="{{ asset('assets/_portal/images/color-scheme/purple.jpg') }}" alt=""></a>
                    <a class="stB5" href="javascript:chooseStyle('skyblue-theme', 60)">
                        <img src="{{ asset('assets/_portal/images/color-scheme/skyblue.jpg') }}" alt=""></a>
                    <a class="stB6" href="javascript:chooseStyle('violet-theme', 60)">
                        <img src="{{ asset('assets/_portal/images/color-scheme/violet.jpg') }}" alt=""></a>
                </div>
            </div>

            <div class="stBlock1 text-center">
                <a class="btn r-06 btn--theme hover--tra-white" href="javascript:chooseStyle('none', 60)">
                    Reset Color
                </a>
            </div>

        </div>
    </div>
</div> <!-- END STYLE SWITCHER -->

<script>
    $(document).on({
        "contextmenu": function(e) {
            console.log("ctx menu button:", e.which);

            // Stop the context menu
            e.preventDefault();
        },
        "mousedown": function(e) {
            console.log("normal mouse down:", e.which);
        },
        "mouseup": function(e) {
            console.log("normal mouse up:", e.which);
        }
    });
</script>

<script>
    $(function() {
        $(".switch").click(function() {

            // $(".active").toggleClass("menu-active-dark menu-active-light");

            $("body").toggleClass("theme--dark");
            if ($("body").hasClass("theme--dark")) {
                $(".switch").text("Light Mode");
                console.log('bg-dark');
                // $(".nl-simple").toggleClass("bg-light");

            } else {
                $(".switch").text("Dark Mode");
                console.log('bg-light');
                // $(".nl-simple").toggleClass("bg-dark");
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        if ($("body").hasClass("theme--dark")) {
            $(".switch").text("Light Mode");
        } else {
            $(".switch").text("Dark Mode");
        }
    });
</script>


<script src="{{ asset('assets/_portal/js/changer.js') }}"></script>
<script defer src="{{ asset('assets/_portal/js/styleswitch.js') }}"></script>
