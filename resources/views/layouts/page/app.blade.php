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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-156569551-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-156569551-1');
    </script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-153RV528DW"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-153RV528DW');
    </script>
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
                            <span class="font-weight-bold h5 mx-4 text-white"><i data-feather="phone" class="text-white mx-auto" stroke-width="1"></i> +51 (084) 655455</span>
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
    <div class="redes-fixed">

                    <div class="bg-light rounded px-3 mx-3 shadow clearfix float-right">
                        <a href="https://api.whatsapp.com/send?phone=51969700487" target="_blank" class="font-weight-bold text-dark stretched-link">
                            <img src="{{asset('images/icons/whatsapp-i.png')}}" class="py-1" alt="logo whatsapp" width="50" data-toggle="tooltip" data-placement="top" title="Perú">
                            Escríbenos por WhatsApp
                        </a>
                    </div>

    </div>
    <footer>
        <img src="{{asset('images/footer.png')}}" alt="" class="w-100">
        <div class="w-100 bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <p class="small text-white m-2">Todos los derechos reservados | Incas Perú Tours 2020.</p>
                    </div>
                </div>
            </div>
        </div>
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
