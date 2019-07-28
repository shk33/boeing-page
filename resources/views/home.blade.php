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
                        <img class="d-block w-100" src="{{ asset('img/slider1.jpg') }}" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/slider2.jpg') }}" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('img/slider3.jpg') }}" alt="Third slide">
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
        <div class="col-md-12" id="cards">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card card-img">
                        <img class="card-img-top" src="{{ asset('img/card1.jpg') }}" alt="Card1">
                        <div class="card-body">
                            <h5 class="card-title">Boeing in space</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-img">
                        <img class="card-img-top" src="{{ asset('img/card2.jpg') }}" alt="Card2">
                        <div class="card-body">
                            <h5 class="card-title">Carrers at Boeing</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-img">
                        <img class="card-img-top" src="{{ asset('img/card3.jpg') }}" alt="Card3">
                        <div class="card-body">
                            <h5 class="card-title">News</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
