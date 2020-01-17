@extends('layouts.page.app')
@section('content')

    <header>
        <div class="overlay"></div>
        {{--            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">--}}
        {{--                <source src="{{asset('media/Secuencia 06.mp4')}}" type="video/mp4">--}}
        {{--            </video>--}}
        <div class="homepage-video">
            {{--                <iframe title="GotoPeru background video" src="https://player.vimeo.com/video/361847703?background=1" width="100%" height="100" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>--}}
            <iframe src="https://player.vimeo.com/video/294846484?background=1&autoplay=1&loop=1&title=0&byline=0&portrait=0&muted=1"  frameborder="0" allow="autoplay; fullscreen"></iframe>
        </div>
        <div class="container h-100">
            <div class="row d-flex h-100 text-center align-items-center">
                <div class="col w-100 text-white mt-5">
                    <h1 class="font-weight-lighter h2 mt-5">QUIENES SOMOS</h1>
                    {{--                        <p class="lead mb-0">With HTML5 Video and Bootstrap 4</p>--}}
                </div>
            </div>
        </div>
        <div class="position-absolute-bottom p-2">
            <div class="row justify-content-center">
                <div class="col-auto text-center">

                </div>
            </div>
        </div>
    </header>

    <section class="pt-4 bg-white">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h1 class="text-g-yellow font-weight-bold display-4 text-center">Incas Perú <span class="text-g-green">Tours</span></h1>
                    {{--<p class="h2 text-secondary pt-3">USTED TENDRÁ UNA EXPERIENCIA INIMAGINABLE</p>--}}
                    {{--<p class="h4"></p>--}}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="mb-0 lead text-secondary text-center"><b>Somos una excelente empresa certificada y recomendada. Incas Perú Tours es un operador turístico que brinda experiencias de viajes auténticas y sostenibles, somos locales y estamos encantados en mostrarle lo mejor del país de los Incas.</b></p>
                </div>

            </div>
        </div>
    </section>

    <section class="py-3 bg-white">
        <div class="container">

            <div class="row no-gutters align-items-center bg-light">

                <div class="col-12 col-md p-4">
                    <p class="align-middle">Operamos desde hace 5 años con muchas satisfacciones, durante este tiempo hemos ofrecido programas a medida con muy buenas recomendaciones de nuestros pasajeros, motivo el cual nos inspiro para ofrecer paquetes turísticos, excursiones a grupos e individuales.</p>
                </div>
            </div>
            <div class="row w-100 no-gutters align-items-center bg-light">


                <div class="col-12 col-md">
                    <img src="{{asset('images/about/about4.jpg')}}" alt="" class="img-fluid">
                </div>
            </div>
            <div class="row w-100 no-gutters align-items-center bg-dark">
                <div class="col text-white text-center">
                    <div class="row justify-content-center">
                        <div class="col-2 my-3">
                            <img src="{{asset('images/logo-yovana.png')}}" alt="" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12">
                        <p class="text-justify">Incas Perú Tours es la creación de la Lic. un turismo y hotelería Alicia Llanquecha, quien fundo la empresa de turismo con la visión de motivara a nuestros visitantes a conocer la riqueza de la cultura peruana, desde su historia precolombina, su gente cálida hasta sus increíbles y majestuosos paisajes; y de esta manera permitir al viajero entrar en contacto con el alma del País.  Es por eso que nuestro servicio de viajes está diseñado con un toque personal, lo que permite a nuestros clientes a disfrutar de experiencias destacadas y al mismo tiempo conocer el PERU verdadero. </p>
                    </div>
                </div>
            </div>


            <div class="row align-items-center my-4">
                <div class="col-12 col-sm my-3 d-flex">
                    <div class="card bg-light w-100">
                        <img class="card-img-top w-100" src="{{asset('images/about/about5.jpg')}}" alt="Card image cap">
                        <div class="card-body text-center">
                            <p class="card-text"><span class="h4">Alicia Llanquecha</span> <small class="d-block">Fundadora</small></p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm my-3 d-flex">
                    <div class="card">
                        <div class="card-body">
                            <p class="lead m-0">Nací en Perú y crecí en la región de los Andes, en una familia querida que me inculcaron el amor por las tradiciones indígenas quechuas. Como amante de la historia y los viajes por la naturaleza, estudié turismo y administración hotelera después de graduarme en 2006, tuve la oportunidad de pasar un año en Alemania.  Después de mi regreso, comencé a trabajar como guía turístico en Perú y al mismo tiempo empecé a organizar viajes individuales para amigos, clientes extranjeros. Deseo compartir con ustedes, mi amor por mi país a través de sus increíbles bellezas naturales, antiguos sitios culturales, tradiciones indígenas que aún están vivas; y sobretodo las personas de corazón cálido que dan vida al país. ¡Bienvenidos a mi país!</p>
                        </div>
                    </div>
                </div>
            </div>
            {{--<div class="row box-more py-5">--}}
            {{--<div class="col">--}}
            {{--sdsdsd--}}
            {{--</div>--}}
            {{--</div>--}}


        </div>
    </section>
@stop
