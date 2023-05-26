@extends('layouts.master')
@section('heading')
    <title>Accijnzen</title>
    <link href="{{ asset('css/carousel.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Carrousel -->
<div id="carouselExampleIndicators"  class="carousel slide carousel-fade mb-0" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner text-center">
      <div class="carousel-item active"style="background-image:url({{ URL("media/carousel/1.jpg")}});"></div>
      <div class="carousel-item " style="background-image:url({{ URL("media/carousel/2.jpg")}});"></div>
      <div class="carousel-item" style="background-image:url({{ URL("media/carousel/3.jpg")}});"></div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- end carousel-->

    <!-- Information --> 
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-3">
          <h1 class="display-4 fw-normal font-weight-bold lead" data-aos="fade-up-left">Accijnzen? Da's kinderspel!</h1>
          <p data-aos="fade-up-right" class="lead fw-normal">HIER nog Text?</p>
        </div>
    </div>

    <div class="position-relative overflow-hidden p-md-5 text-center text-white" style="background-color:#815194">
        <div class="row align-items-stretch featurette" data-aos="fade-right">
            <div class="col-md-7">
                <h2 class="featurette-heading">Onze Cursussen</h2>
                <br>
                <div class="lead-wrapper">
                    <p class="lead">Neem zeker eens een kijkje naar mijn cursussen!</p>
                    <p class="lead">Een van onze cursussen: <a href="{{ route("cursus.showmore", $cursus->id) }}"><br>{{ $cursus->name }}</a></p>
                    <p><a class="btn btn-outline-light mb-4" href="{{ route('cursussen') }}">Al onze cursussen</a></p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="d-flex justify-content-center align-items-stretch h-100">
                    <a href="{{ route("cursus.showmore", $cursus->id) }}">
                        <img class="featurette-image img-max img-fluid mx-auto" src="{{ asset('media/cursussen/' . $cursus->photo) }}" alt="accijnzen cursus">
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="position-relative overflow-hidden pb-1 p-md-5 text-center bg-light">
        <div class="row align-items-stretch featurette" data-aos="flip-up">
            <div class="col-md-7">
                <h2 class="featurette-heading font-weight-bold pt-4">Accijnzen nieuws</h2>
                <br>
                <p class="lead">Ik hou jullie up-to-date over de laatste nieuwtjes over Accijnzen...</p>
                <p class="lead">Onze laatste accijnzen nieuws <a href="">: <br>{{ $news->titel }}</a></p>
                <a class="btn btn-secondary" href="{{ route("news") }}">Bekijk onze nieuwtjes</a>
            </div>
            <div class="col-md-5">
                <div class="d-flex justify-content-center align-items-stretch h-100">
                    <img class="featurette-image img-fluid mx-auto" src="{{ asset('media/nieuwsberichten/' . $news->cover_image) }}" alt="accijnzen news">
                </div>
            </div>
        </div>
    </div>
    
@endsection

@section('scripts')
@endsection