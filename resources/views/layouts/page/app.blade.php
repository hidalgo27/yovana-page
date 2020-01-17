<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Paquetes de Viaje a Perú | Perú Tours</title>
    <link href="{{asset('icons/favicon.ico')}}" rel="icon" type="image/x-icon">
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    {{--    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">--}}
    <link href="{{ asset('themify-icons/themify-icons.css') }}" rel="stylesheet">

    <meta name="csrf-token" content="{{ csrf_token()  }}">

</head>
<body data-spy="scroll" data-target="#navbar-scroll">
<div id="app">

    <div class="menu-container">
        <div class="container mt-3">
            <div class="row justify-content-between align-items-center">
{{--                <div class="col-3">--}}
{{--                    <div class="form-group m-0 has-search">--}}
{{--                        <span class="fa fa-search form-control-feedback"></span>--}}
{{--                        <input type="text" class="form-control form-control-search shadow-none border-0 text-white" placeholder="BUSCAR">--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-auto">
                    <a href="{{route('home_path')}}"><img src="{{asset('images/logo-yovana.png')}}" width="250" alt="logo andesviagens" class="img-fluid"></a>
                </div>
                <div class="col-5 text-right">
                    <div class="row align-items-center no-gutters">
                        <div class="col text-right">
                            <span class="font-weight-bold h5 mx-4 text-white"><i data-feather="phone" class="text-white mx-auto" stroke-width="1"></i> +51 (084) 611096</span>
                        </div>
                        <div class="col-auto">
                            <a href="#consulte" class="btn btn-red-primary btn-block float-right ml-3 font-weight-bold px-4 rounded-0">COTIZAR VIAJE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.page.menu')

    </div>




    @yield('content')

    <footer>
        <img src="{{asset('images/footer.png')}}" alt="" class="w-100">
    </footer>

</div>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/plugins.js') }}"></script>
<script src="https://apps.elfsight.com/p/platform.js"></script>
<script src="https://player.vimeo.com/api/player.js"></script>

@stack('scripts')
<script>
    feather.replace();

    $(document).ready(function(){
        $('.venobox').venobox();
    });

    $('a[href^="#"]').on('click', function(event) {
        var target = $(this.getAttribute('href'));
        if( target.length ) {
            event.preventDefault();
            $('html, body').stop().animate({
                scrollTop: target.offset().top
            }, 1000);
        }
    });
</script>
    <script>
        /*global $ */
        $(document).ready(function() {

            "use strict";

            $('.menu > ul > li:has( > ul)').addClass('menu-dropdown-icon');
            //Checks if li has sub (ul) and adds class for toggle icon - just an UI

            $('.menu > ul > li > ul:not(:has(ul))').addClass('normal-sub');
            //Checks if drodown menu's li elements have anothere level (ul), if not the dropdown is shown as regular dropdown, not a mega menu (thanks Luka Kladaric)

            $(".menu > ul").before("<a href=\"#\" class=\"menu-mobile\">Navigation</a>");

            //Adds menu-mobile class (for mobile toggle menu) before the normal menu
            //Mobile menu is hidden if width is more then 959px, but normal menu is displayed
            //Normal menu is hidden if width is below 959px, and jquery adds mobile menu
            //Done this way so it can be used with wordpress without any trouble

            $(".menu > ul > li").hover(function(e) {
                if ($(window).width() > 943) {
                    $(this).children("ul").stop(true, false).fadeToggle(150);
                    e.preventDefault();
                }
            });
            //If width is more than 943px dropdowns are displayed on hover

            $(".menu > ul > li").click(function() {
                if ($(window).width() <= 943) {
                    $(this).children("ul").fadeToggle(150);
                }
            });
            //If width is less or equal to 943px dropdowns are displayed on click (thanks Aman Jain from stackoverflow)

            $(".menu-mobile").click(function(e) {
                $(".menu > ul").toggleClass('show-on-mobile');
                e.preventDefault();
            });
            //when clicked on mobile-menu, normal menu is shown as a list, classic rwd menu story (thanks mwl from stackoverflow)

        });
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>


    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDf1RN8KKGNdS-iEarIgXpaqa-khw7EmZI&callback=initMap">
    </script>
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7000123.js"></script>
    <!-- End of HubSpot Embed Code -->
</body>
</html>
