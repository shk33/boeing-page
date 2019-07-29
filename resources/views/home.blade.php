@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img
                            class="d-block w-100 async-image"
                            src="{{ asset('img/slider1_low.jpg') }}"
                            data-src="{{ asset('img/slider1.jpg') }}"
                            alt="First slide"
                        >
                        <div class="carousel-caption d-none d-md-block carrousel-caption carrousel-caption-1">
                            <h2>
                                BOEING PLEDGES SUPPORT TO FAMILIES, COMMUNITIES AFFECTED BY LION AIR FLIGHT 610 AND ETHIOPIAN AIRLINES FLIGHT 302 ACCIDENTS
                            </h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img
                            class="d-block w-100 async-image" 
                            src="{{ asset('img/slider2_low.jpg') }}"
                            data-src="{{ asset('img/slider2.jpg') }}"
                            alt="Second slide"
                        >
                        <div class="carousel-caption d-none d-md-block carrousel-caption carrousel-caption-2">
                            <h2>
                                BEING HEARD AT BOEING
                            </h2>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img
                            class="d-block w-100 async-image" 
                            src="{{ asset('img/slider3_low.jpg') }}"
                            data-src="{{ asset('img/slider3.jpg') }}"
                            alt="Third slide"
                        >
                        <div class="carousel-caption d-none d-md-block carrousel-caption carrousel-caption-1">
                            <h2>
                                MORE THAN A GAME OF FETCH: BOEING EMPLOYEES TRAIN SERVICES DOGS FOR VETERANS
                            </h2>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-md-12">
            <div class="jumbotron banner">
                <img class="d-block w-100" src="{{ asset('img/banner.jpg') }}" alt="Banner">
            </div>
        </div>
        <div class="col-md-12" >
            <div class="card-list-wrapper" id="card-list"></div>
        </div>
    </div>
</div>
@endsection
