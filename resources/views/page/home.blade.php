@extends('layouts.page.app')
@section('content')
    <header>
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            {{--                <iframe title="GotoPeru background video" src="https://player.vimeo.com/video/361847703?background=1" width="100%" height="100" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
{{--            <iframe src="https://player.vimeo.com/video/361847703?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>--}}

                <img src="{{asset('images/packages/slider/AV412-1.jpg')}}" alt="">

        </div>
{{--        <div class="container h-100">--}}
{{--            <div class="row d-flex h-100 text-center align-items-center">--}}
{{--                <div class="col w-100 text-white mt-5">--}}
{{--                    <h1 class="font-weight-lighter h2 mt-5">Top en Recomendaciones y Testimonios, sede central en Cusco</h1>--}}
{{--                    <a href="#consulte" class="btn btn-outline-g-yellow btn-lg h2 font-weight-normal mt-3">Diseña tu Viaje</a>--}}
{{--                    --}}{{--                        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
        <div class="position-absolute-bottom p-2">
            <div class="row pb-5 justify-content-between mb-5">
                <div class="col text-center">
                    <h4 class="display-4 font-weight-bold text-white">Viaje a Perú</h4>
                    <span class="text-white d-block h4">Descubra el país de los Incas</span>
                    <a href="#consulte" class="btn btn-danger ml-3 font-weight-bold px-4 rounded-0">PREGUNTE AHORA</a>
                    <a href="#oferta-mes" class="btn btn-info ml-3 font-weight-bold px-4 rounded-0">OFERTA DEL MES</a>
                </div>

{{--                <div class="col-4 text-center d-none">--}}
{{--                    <form class="bg-white p-3 rounded-top">--}}
{{--                        <div class="row mb-3">--}}
{{--                            <div class="col">--}}
{{--                                <h3 class="text-info font-weight-bold">Solicite una Cotización</h3>--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nombre Completo">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Email">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="row">--}}
{{--                            <div class="col">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="date" class="form-control" id="formGroupExampleInput" placeholder="Fecha de Viaje">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col">--}}
{{--                                <div class="form-group">--}}
{{--                                    <input type="number" class="form-control" id="formGroupExampleInput" placeholder="Numero de pasajeros">--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col">--}}
{{--                                <h5 class="font-weight-bold">Destinos:</h5>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mb-4">--}}
{{--                            <div class="col-auto">--}}
{{--                                <div class="custom-control custom-checkbox">--}}
{{--                                    <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--                                    <label class="custom-control-label" for="customCheck1">Lima</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <div class="custom-control custom-checkbox">--}}
{{--                                    <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--                                    <label class="custom-control-label" for="customCheck1">Cusco</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <div class="custom-control custom-checkbox">--}}
{{--                                    <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--                                    <label class="custom-control-label" for="customCheck1">Arequipa</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <div class="custom-control custom-checkbox">--}}
{{--                                    <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--                                    <label class="custom-control-label" for="customCheck1">Titicaca</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-auto">--}}
{{--                                <div class="custom-control custom-checkbox">--}}
{{--                                    <input type="checkbox" class="custom-control-input" id="customCheck1">--}}
{{--                                    <label class="custom-control-label" for="customCheck1">Lineas de Nazca</label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row">--}}
{{--                            <div class="col">--}}
{{--                                <div class="form-group">--}}
{{--                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="1" placeholder="Preguntele a nuestros asesores"></textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <button type="submit" class="btn btn-dark font-weight-bold rounded-0 btn-block btn-lg">Submit</button>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>
            <div class="row pt-5 justify-content-center">
                <div class="col-auto">
                    <div class="row align-items-center">
                        <div class="col">
                            <a href="https://www.facebook.com/incasperutours/" target="_blank"><img src="{{asset('images/icons/facebook.png')}}" width="40" alt=""></a>
                        </div>
                        <div class="col">
                            <a href="https://www.instagram.com/incasperutours/" target="_blank"><img src="{{asset('images/icons/instagram.png')}}" width="40" alt=""></a>
                        </div>
                        <div class="col">
                            <a href="https://twitter.com/IncasTours" target="_blank"><img src="{{asset('images/icons/twitter.png')}}" width="40" alt=""></a>
                        </div>
                        <div class="col">
                            <a href="https://m.me/incasperutours" target="_blank" class="btn btn-light"><img src="{{asset('images/icons/messenger-c.png')}}" width="40" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="my-5">
        <div class="container">
            <div class="row align-items-center">
                {{--                    <div class="col d-none d-md-inline">--}}
                {{--                        <img src="{{asset('images/about.jpg')}}" alt="" class="w-100 rounded img-lazy">--}}
                {{--                    </div>--}}
                <div class="col text-center">
                    <h1 class="font-weight-bold display-4 text-g-yellow">Paquetes de <strong class="text-g-green">viajes en Perú</strong></h1>
                    <p class="lead font-weight-normal text-muted">Somos su opción ideal para un viaje inolvidable por Perú. En INCA PERU TRAVEL combinamos naturaleza variada con la cultura de nuestros antepasados, alojamiento especialmente seleccionado y excelente comida.</p>
{{--                    <div class="row align-items-center">--}}
{{--                        <div class="col-12 text-center">--}}
{{--                            <h6 class="text-secondary">--}}
{{--                                <img src="{{asset('images/logo-andes-bc.png')}}" alt="" width="120">--}}
{{--                                <span class="mt-1">é a divisão de</span>--}}
{{--                                <img src="{{asset('images/logo-gotoperu.png')}}" alt="" width="100">--}}
{{--                            </h6>--}}

{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>


    <section>
        <div class="container">
            <div class="row">
                @foreach($paquete as $paquetes)


                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 d-flex mb-3">
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
                            <!--            <div class="card-body">-->

                            <!--                <span class="font-weight-normal text-secondary">-->
                            <!--                    <i class="fa fa-map-marker-alt"></i>-->

                            <!--                </span>-->
                            <!--            </div>-->
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

            <div class="row">
                <div class="col text-center">
                    <a href="{{route('packages_path')}}" class="btn btn-lg btn-info font-weight-bold text-white my-4">Ver todos nuestros paquetes en Perú</a>
                </div>
            </div>

        </div>
    </section>

    <section class="position-relative mt-5" id="oferta-mes">
        <div class="bg-info pt-1"></div>
        <div class="offer-banner">
            <div class="w-100 pl-0 container-fluid">
                <div class="row no-gutters align-items-center">
                    <div class="col-7">
{{--                        <img src="{{asset('images/video.jpg')}}" alt="" class="w-100">--}}
                        <div class="swiper-container swiper-container-gallery">
                            <div class="swiper-wrapper">
                                <a class="venobox swiper-slide" data-gall="myGallery" href="{{asset('images/packages/slider/AV704-1.jpg')}}"><img src="{{asset('images/packages/slider/AV704-1.jpg')}}" class="w-100"></a>
                                <a class="venobox swiper-slide" data-gall="myGallery" href="{{asset('images/packages/slider/AV504-2.jpg')}}"><img src="{{asset('images/packages/slider/AV504-2.jpg')}}" class="w-100"></a>
                                <a class="venobox swiper-slide" data-gall="myGallery" href="{{asset('images/packages/slider/AV500-1.jpg')}}"><img src="{{asset('images/packages/slider/AV500-1.jpg')}}" class="w-100"></a>
                                <a class="venobox swiper-slide" data-gall="myGallery" href="{{asset('images/packages/slider/AV600-2.jpg')}}"><img src="{{asset('images/packages/slider/AV600-2.jpg')}}" class="w-100"></a>

                            </div>
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <div class="col text-center">
                        <div class="p-4">
                            <span class="font-weight-bold text-secondary">Todo Incluido</span>
                            <h4 class="font-weight-bold mb-4 h1">OFERTA DEL MES</h4>
                            <div class="bg-white rounded p-2 mb-2 shadow-sm">
                                <p class="lead font-weight-bold m-0 text-secondary">Cusco, Machu Picchu, Ollantaytambo, Pisac, Valle Sagrado.</p>
                            </div>
                            <p>Tours, traslados, entradas, desayuno, trenes.</p>
                            <del><sup>Antes $</sup><span class="h5">698</span><small>USD</small></del>
                            <i class="fas text-primary fa-long-arrow-alt-right"></i>
                            <sup>Ahora $</sup><span class="h1 font-weight-bold text-danger">518</span><small>USD</small>

                            <a href="paquetes/cusco-y-machupicchu-flexible" class="btn btn-block btn-primary font-weight-bold mt-5">Ver detalles</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="position-relative">
        <div class="offer py-5">
            <div class="container">
{{--                <div class="col text-center">--}}
{{--                    <h2 class="h1 font-weight-bold text-white">Porque escoger Gotoperu</h2>--}}
{{--                </div>--}}
                <div class="row mt-5">
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                        <i data-feather="users" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                        <span class="text-white small mt-3 d-block">Grupos pequeños y personalizados.</span>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                        <i data-feather="clock" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                        <span class="text-white small mt-3 d-block">Nosotros vivimos aquí, somos locales 100%.</span>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                        <i data-feather="pen-tool" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                        <span class="text-white small mt-3 d-block">Reserve ahora o Diseña tu Viaje!</span>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                        <i data-feather="map-pin" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                        <span class="text-white small mt-3 d-block">Sin intermediarios, sede en Perú.</span>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                        <i data-feather="thumbs-up" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                        <span class="text-white small mt-3 d-block">Estamos orgullosos de nuestros recomendaciones!</span>
                    </div>
                    <div class="col-6 mb-3 col-sm-4 mb-md-0 col-md-2 text-center">
                        <i data-feather="calendar" class="text-white d-block mx-auto" width="45" height="45" stroke-width="1"></i>
                        <span class="text-white small mt-3 d-block">Nos adaptamos a cualquier hora de llegada.</span>
                    </div>
                </div>
{{--                <div class="row mt-5">--}}
{{--                    <div class="col text-white text-white text-center">--}}
{{--                        <p class="font-weight-light">Desde 2009</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row mt-5">--}}
{{--                    <div class="col text-white text-white text-center">--}}
{{--                        <a href="#" class="btn btn-lg btn-g-yellow font-weight-bold text-white">Consulte ahora</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
            </div>
        </div>
    </section>


    <section class="bg-white pt-5">
        <div class="container">
            <div class="row pb-3 pt-4">
                <div class="col text-center">
                    <h2 class="font-weight-bold">Los Mejores Tours en Perú</h2>
                    <p class="lead">Los mejores tours en Perú con Incas Perú Tours. Viva la experiencia en el pais de los Incas.</p>
                </div>
            </div>
            <div class="row">
                @foreach($tours as $paquetes)


                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 d-flex mb-3">
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
                            <!--            <div class="card-body">-->

                            <!--                <span class="font-weight-normal text-secondary">-->
                            <!--                    <i class="fa fa-map-marker-alt"></i>-->

                            <!--                </span>-->
                            <!--            </div>-->
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

            <div class="row pb-4">
                <div class="col text-center">
                    <a href="{{route('tours_path')}}" class="btn btn-lg btn-primary font-weight-bold text-white my-4">Ver todos nuestros tours en Perú</a>
                </div>
            </div>

        </div>
    </section>

    <section class="my-5 py-5" >
        <div class="container">
            <div class="row pb-5">
                <div class="col text-center">
                    <h2 class="font-weight-bold">¿Buscas un estilo de viaje?</h2>
                </div>
            </div>
            <div class="row">
                @foreach($categoria as $categorias)
                    <div class="col">
                        <div class="transperent_block">
                            <img src="{{$categorias->imagen}}" class="img-responsive" alt="">
                            <div class="black_hover_block">
                                <div class="blur"></div>
                                <div class="black_hover_block_text">
                                    <ul class="text-center bg_black m-0 p-0">
                                        <li>{{$categorias->nombre}}</li>
                                        <div class="clearfix"></div>
                                    </ul>
                                    <h5 class="titl-h5">{{$categorias->nombre}}</h5>
{{--                                    <p>{!! $categorias->descripcion !!}</p>--}}
                                    <a class="btn btn-red-primary btn-sm" href="{{route('category_show_path', $categorias->url)}}">+ Paquetes de categoria {{$categorias->nombre}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="row mt-3'">
                <div class="col text-center">
                    <a href="{{route('category_path')}}" class="btn btn-lg btn-red-primary font-weight-bold text-white mt-4">Más categorías de Paquetes</a>
                </div>
            </div>
        </div>
    </section>

    <section class="position-relative my-5">
        <div class="offer-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <img src="{{asset('images/video.jpg')}}" alt="" class="w-100">
                    </div>
                    <div class="col">
                        <h2 class="h5">Bienvenido</h2>
                        <h4 class="font-weight-bold h1">INCAS PERU TRAVEL</h4>
                        <p>Somos su opción ideal para un viaje inolvidable por Perú. En INCAS PERU TRAVEL combinamos naturaleza variada con la cultura de nuestros antepasados, alojamiento especialmente seleccionado y excelente comida.</p>
                        <p>Déjate hechizar por una de las culturas más místicas de la tierra.</p>
{{--                        <div class="row mt-4">--}}
{{--                            <div class="col text-center">--}}
{{--                                <a href="" class="btn font-weight-bold btn-dark">Vea más sonbre nuestro equipo</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                    </div>

                </div>
            </div>
        </div>
    </section>

{{--    <section class="py-5 bg-white">--}}
{{--        <div class="container">--}}
{{--            <div class="row py-4">--}}
{{--                <div class="col text-center">--}}
{{--                    <h2 class="font-weight-bold display-5 text-g-green">Testimonios de nuestros pasajeros</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="col">--}}
{{--                    <a class="venobox" data-gall="myGallery" data-autoplay="true" data-vbtype="video" href="https://youtu.be/iWqyeyUVruE">--}}
{{--                        <div class="position-relative">--}}
{{--                            <img src="{{asset('images/video-testimonial/1.jpg')}}" alt="" class="w-100">--}}
{{--                            <div class="position-absolute-bottom text-white p-3 icon-play">--}}
{{--                                <i class="fas fa-play fa-2x"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <a class="venobox" data-gall="myGallery" data-autoplay="true" data-vbtype="video" href="https://youtu.be/tbET_aKa0Zg">--}}
{{--                        <div class="position-relative">--}}
{{--                            <img src="{{asset('images/video-testimonial/2.jpg')}}" alt="" class="w-100">--}}
{{--                            <div class="position-absolute-bottom text-white p-3 icon-play">--}}
{{--                                <i class="fas fa-play fa-2x"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="col">--}}
{{--                    <a class="venobox" data-gall="myGallery" data-autoplay="true" data-vbtype="video" href="https://youtu.be/NSA_ij7rxuI">--}}
{{--                        <div class="position-relative">--}}
{{--                            <img src="{{asset('images/video-testimonial/3.jpg')}}" alt="" class="w-100">--}}
{{--                            <div class="position-absolute-bottom text-white p-3 icon-play">--}}
{{--                                <i class="fas fa-play fa-2x"></i>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row my-5">--}}
{{--                <div class="col text-center">--}}
{{--                    <p class="lead font-weight-bold text-muted">Nuestra mejor satisfacción son los cientos de clientes satisfechos compartiendo sus experiencias con nosotros. Debajo encontrara algunos de ellos! te gustaría ser el siguiente. Luces, cámara, acción!</p>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="row mt-5">--}}
{{--                <div class="col text-center">--}}
{{--                    <button type="button" class="btn-lg btn btn-primary text-white font-weight-bold">Más de nuestros testimonios</button>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}



    <section class="py-5">
        <div class="container">
            <div class="row pb-4">
                <div class="col text-center">
                    <h2 class="font-weight-bold">Destinos recomendados</h2>
                </div>
            </div>
            <div class="row">
                @foreach($destino->take(3) as $destinos)
                <div class="col">
                    <div class="home-banner-destinations">
                        <figure class="cc-imagewrapper">
                            <a href="{{route('destination_show_path', $destinos->url)}}" class="text-center">
                                <img src="{{$destinos->imagen}}" alt="" class="w-100">
                            </a>
                            <figcaption>
                                <small class="d-block">{{$destinos->pais}}</small>
                                {{$destinos->nombre}}
                            </figcaption>
                        </figure>
                    </div>
                </div>
                @endforeach

            </div>

            <div class="row">
                <div class="col text-center">
                    <a href="{{route('destination_path')}}" class="btn btn-lg btn-info font-weight-bold text-white my-4">Ver todos nuestros destinos en Perú</a>
                </div>
            </div>
        </div>
    </section>

    <section id="consulte" class="py-5 position-relative">
        <div class="offer-banner">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-2">
                    <img src="{{asset('images/logo-yovana.png')}}" alt="" class="w-100">
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10">
                    <h5 class="font-weight-bold text-center">CONSULTA DE VIAJES</h5>
                    <form-inquire></form-inquire>
                </div>
            </div>
        </div>
        </div>
    </section>
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
    </script>
    @endpush
