@extends('layouts.page.app')
@section('content')
    <header class="header-detail">
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            <iframe src="https://player.vimeo.com/video/294846484?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>
        </div>
        <div class="container h-100">
            <div class="row d-flex h-100 text-center align-items-center">
                <div class="col w-100 text-white mt-5">
                    <h1 class="font-weight-lighter h2 mt-5">PAQUETES DE VIAJE A PERÚ</h1>
                    <div>
                        <div class="tl-1"></div>
{{--                        <div class="tl-2"><img src="{{asset('images/logo-andes-ave-white.png')}}" alt="" class="w-100"></div>--}}
                        <div class="tl-3"></div>
                    </div>
                    {{--                    <div class="mt-4">--}}
                    {{--                        <a href="" class="text-white">Detalle</a> |--}}
                    {{--                        <a href="" class="text-white">Itinerario</a> |--}}
                    {{--                        <a href="" class="text-white">Precios</a> |--}}
                    {{--                        <a href="" class="text-g-yellow font-weight-bold">Consulte Ahora</a>--}}
                    {{--                    </div>--}}
                    {{--                        <a href="#Inquire" class="btn btn-outline-g-yellow btn-lg h2 font-weight-normal mt-3">Diseña tu Viaje</a>--}}
                    {{--                        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>--}}
                </div>
            </div>
        </div>
        <div class="position-absolute-bottom p-2">
            <div class="row justify-content-center">
                <div class="col-auto text-center">
                    <a href="#title_section" class="mx-2">
                        <i data-feather="chevrons-down" class="text-white" stroke-width="1" height="50" width="50"></i>
                    </a>
                </div>
            </div>
        </div>
    </header>


    <section id="title_section">
        <div class="container px-0">
            <div class="row my-5">
                <div class="col text-center">
                    <h2 class="font-weight-bold display-4 text-g-yellow">Paquetes de Viaje <strong class="text-g-green">Destacados</strong></h2>
                    <p class="lead">Nuestros paquetes más populares En Perú, Estos paquetes pueden ser usados como referencia para personalizar tu viaje. En INCAS PERU Nos especializamos en la elaboración de experiencias personalizadas basadas en sus preferencias; invitamos a revisar estos programas para tener una idea de los destinos más importantes, por ejemplo, Machu Picchu, Lake Titicaca, Nazca y el Amazonas.</p>
                </div>
            </div>

        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                @foreach($paquete as $paquetes)


                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 d-flex mb-4">
                        <div class="card w-100 shadow-sm">
                            <div class="header-img-packages position-relative">
                                <a href="{{route('detail_path', $paquetes->url)}}"><img class="card-img-top" src="{{$paquetes->imagen}}" alt=""></a>
                                <div class="position-absolute-bottom bg-rgba-dark-3 px-3 py-2">
                                    {{--                                                <h5 class="text-white m-0">{{$paquetes->titulo}}</h5>--}}
                                    <div class="row">
                                        <div class="col">
                                            <small class="text-white">
                                                <i class="fas fa-map-marker-alt"></i>
                                                @php
                                                    $i = 1;
                                                    $num_des = count($paquete_destinos->where('idpaquetes',$paquetes->id));
                                                @endphp
                                                @foreach($paquete_destinos->where('idpaquetes',$paquetes->id) as $paquete_destino)
                                                    {{ucwords(strtolower($paquete_destino->destinos->nombre))}}@if($i < $num_des),@else.@endif
                                                    @php $i++; @endphp
                                                @endforeach
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer bg-white">
                                <div class="row">
                                    <div class="col text-center">
                                        <h5 class="font-weight-bold text-secondary m-0">{{$paquetes->titulo}}</h5>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    {{--                                                <div class="col">--}}
                                    {{--                                                    --}}
                                    {{--                                                </div>--}}
                                    <div class="col text-center">
                                        {{--                                                    <p class="font-weight-bold text-red-primary h5 m-0">{{$paquetes->duracion}} Días</p>--}}
                                        @foreach($paquetes->precio_paquetes as $precio)
                                            @if($precio->estrellas == 3)
                                                @if($precio->precio_d > 0)
                                                    <p class="font-weight-bold text-center text-primary  m-0"><span class="text-dark">{{$paquetes->duracion}} Días</span> <i class="fas fa-long-arrow-alt-right"></i> <sup class="small"><small class="text-secondary">desde</small></sup> ${{$precio->precio_d}}<small>USD</small></p>
                                                @else
                                                    <span class="text-danger">Consulte</span>
                                                @endif
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                @endforeach

            </div>


        </div>
    </section>

    {{--        <div data-spy="scroll" data-target="#list-example" data-offset="0" class="scrollspy-example">--}}
    {{--            <h4 id="list-item-1">Item 1</h4>--}}
    {{--            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur error eveniet ipsum perferendis quam quos saepe sit soluta! Explicabo facere molestiae quod recusandae voluptatem. Ad assumenda debitis nam natus nihil?</p>--}}
    {{--            <h4 id="list-item-2">Item 2</h4>--}}
    {{--            <p>...</p>--}}
    {{--            <h4 id="list-item-3">Item 3</h4>--}}
    {{--            <p>...</p>--}}
    {{--            <h4 id="list-item-4">Item 4</h4>--}}
    {{--            <p>...</p>--}}
    {{--            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquam architecto corporis dicta error facilis ipsam magni, mollitia necessitatibus odio quasi quo, repudiandae saepe sapiente sed. Cum qui sed veritatis!--}}
    {{--        </div>--}}
{{--    <section id="consulte" class="pt-5">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row justify-content-center my-4">--}}
{{--                <div class="col-2">--}}
{{--                    <img src="{{asset('images/logo-andes-y.png')}}" alt="" class="w-100">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row justify-content-center">--}}
{{--                <div class="col-7">--}}
{{--                    <h5 class="font-weight-bold text-center">CONSULTA DE VIAJES</h5>--}}
{{--                    <form-inquire></form-inquire>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}

@endsection

@push('scripts')
    <script>
        var swiper = new Swiper('.swiper-container-gallery', {
            spaceBetween: 30,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            // navigation: {
            //     nextEl: '.swiper-button-next',
            //     prevEl: '.swiper-button-prev',
            // },
        });

        var swiper = new Swiper('.swiper-container-detail', {
            direction: 'vertical',
            slidesPerView: 'auto',
            freeMode: true,
            scrollbar: {
                el: '.swiper-scrollbar',
            },
            mousewheel: true,
        });

        function view_itinerary() {
            $('#box-resumen').addClass('d-none');
            $('#box-detail').removeClass('invisible');
            $('.align-items-resumen').removeClass('align-items-center');
            // $('#box-resumen').addClass('d-none');
            // $('#box-resumen').removeClass('d-block');
            // $('#box-detail').addClass('d-block');
            // $('#box-detail').removeClass('d-none');
            // $('.box-detail').show();
            view_itinerary_resumen
        }

        function view_itinerary_resumen() {
            $('#box-resumen').removeClass('d-none');
            $('#box-detail').addClass('invisible');
            $('.align-items-resumen').addClass('align-items-center');
        }

    </script>
@endpush

