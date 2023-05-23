@extends('layouts.master')
@section('heading')
    <title>Accijnzen</title>
@endsection

@section('content')
<!-- Carrousel -->
<div id="carouselExampleIndicators"  class="carousel slide carousel-fade" data-ride="carousel">
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
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 fw-normal font-weight-bold lead" data-aos="fade-up-left">Accijnzen? Da's kinderspel!</h1>
          <p data-aos="fade-up-right" class="lead fw-normal">HIER nog Text?</p>
        </div>
    </div>

    <div class="position-relative overflow-hidden p-1 p-md-5  text-center text-white" style="background-color:#815194">
        <div class="row featurette" data-aos="fade-right">
            <div class="col-md-7">
                <h2 class="featurette-heading">Neem zeker eens een kijkje naar mijn cursussen!</h2>
                <p class="lead">{{ __('Een tekstje') }}</p>
                <p class="lead">Een van onze cursussen<a href="{{ route("cursus.showmore", $cursus->id) }}">{{ $cursus->name }}</a></p>
                <p><a class="btn btn-outline-light" href="{{ route('cursussen') }}">Al onze cursussen</a></p>
            </div>
            <div class="col-md-5">
                <div class="my-3 ">
                    <a href="{{ route("cursus.showmore", $cursus->id) }}"><img class="featurette-image img-fluid mx-auto" src="{{ asset('media/cursussen/' . $cursus->photo) }}" alt="accijnzen cursus"></a>
                </div>
            </div>

        </div>
    </div>
    <div class="position-relative overflow-hidden p-1 p-md-5  text-center  bg-light">
        <div class="row featurette" data-aos="flip-up">
            <div class="col-md-7">
                <h2 class="featurette-heading font-weight-bold pt-4">Accijnzen nieuws</h2>
                <br><br>
                <p class="lead">Ik hou jullie up-to-date over de laatste nieuwtjes over Accijnzen...</p>
                <p class="lead">Onze laatste accijnzen nieuws <a href="">{{ $news->titel }}</a></p>
                <a class="btn btn-secondary" href="{{ route("news") }}">Bekijk onze nieuwtjes</a>
            </div>
            <div class="col-md-5">
                <div class="my-3 ">
                    <img class="featurette-image img-fluid mx-auto" src="{{ asset('media/nieuwsberichten/' . $news->cover_image) }}" alt="accijnzen news">
                </div>
            </div>
        </div>
    </div>

    <div class="position-relative overflow-hidden p-1 p-md-5 text-white text-center " style="background-color:#815194">
        <div class="row featurette" data-aos="flip-up">
            
            <div class="col-md-5">
                <div class="my-3 ">
                    <img class="featurette-image img-fluid mx-auto" src="" alt="accijnzen news">
                </div>
            </div>
            <div class="col-md-7">
                <h2 class="featurette-heading font-weight-bold pt-4">Over mij</h2>
                <br><br>
                <p class="lead">Tekstje over mij...</p>
                <a class="btn btn-dark" href="{{ route("contact") }}">Contacteer mij</a>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection