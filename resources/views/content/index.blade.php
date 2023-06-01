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
    </ol>
    <div class="carousel-inner text-center">
      <div class="carousel-item active"style="background-image:url({{ URL("media/carousel/1.jpg")}});"></div>
      <div class="carousel-item " style="background-image:url({{ URL("media/carousel/2.jpg")}});"></div>
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
        <div class="col-md-5 p-lg-5 mx-auto my-3" data-aos="zoom-in-up">
          <h1 class="display-4 fw-normal font-weight-bold lead">Accijnzen? <br> Da's kinderspel!</h1>
          <p data-aos="fade-up-right" >
            Accijnzen.be leert je hoe je op een interessante en leuke manier Accijnzen kunt begrijpen en gebruiken</p>
        </div>
    </div>

    <div class="position-relative overflow-hidden pb-1  p-md-5 text-white" style="background-color:#815194">
        <div class="row align-items-stretch featurette" data-aos="flip-up">
            <div class="col-md-5">
                <div class="d-flex justify-content-center align-items-stretch h-100">
                    <img class="featurette-image img-fluid mx-auto" src="{{ asset('media/index/1.jpg') }}" alt="accijnzen news">
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="featurette-heading font-weight-bold">Wat is een accijns en hoe wordt deze berekend?</h2>
                <br>
                <p class="lead">Een accijns is een indirecte belasting op specifieke goederen binnen een land. Het belastingtarief wordt bepaald op basis van de specifieke kenmerken van het product. Accijnzen worden berekend op de hoeveelheid van het product, zoals per volume, per item of per gewicht. Het exacte accijnsbedrag is soms lastig te achterhalen, omdat het meestal niet op de factuur wordt vermeld.</p>
            </div>
        </div>
    </div>
    
    <div class="position-relative overflow-hidden p-md-5  text-right  bg-light" >
        <div class="row align-items-stretch featurette" data-aos="fade-right">
            <div class="col-md-5">
                <h2 class="featurette-heading">Onze Cursussen</h2>
                <br>
                <div class="lead-wrapper">
                    <p class="lead">Neem zeker eens een kijkje naar mijn cursussen!</p>
                    <p class="lead">Een van onze cursussen: <a href="{{ route("cursus.showmore", $cursus->id) }}"><br>{{ $cursus->name }}</a></p>
                    <p><a class="btn btn-outline-dark mb-4" href="{{ route('cursussen') }}">Al onze cursussen</a></p>
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
    

    
    <div class="position-relative overflow-hidden pb-1  p-md-5 text-white " style="background-color:#815194" >
        <div class="row align-items-stretch featurette" data-aos="flip-up">
        
            <div class="col-md-5">
                <div class="d-flex justify-content-center align-items-stretch h-100">
                    <img class="featurette-image img-fluid mx-auto" src="{{ asset('media/index/2.jpg') }}" alt="accijnzen news">
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="featurette-heading font-weight-bold">Soorten accijnzen in België en hun toepassing</h2>
                <br>
                <p class="lead">In België zijn er twee soorten accijnzen: communautaire accijnzen en nationale accijnzen. Communautaire accijnzen worden geheven binnen de Belgisch-Luxemburgse Economische Unie, waarbij opbrengsten verdeeld worden tussen beide landen. Nationale accijnzen zijn exclusief voor België en de opbrengsten blijven binnen het land. Verpakkingsheffing wordt gelijkgesteld aan de accijns.</p>
            </div>
            
        </div>
    </div>


    <div class="position-relative overflow-hidden pb-1 p-md-5 text-right  bg-light" >
        <div class="row align-items-stretch featurette" data-aos="flip-up">
            <div class="col-md-5 ">
                <h2 class="featurette-heading font-weight-bold pt-4">Accijnzen nieuws</h2>
                <br>
                <p class="lead">Ik hou jullie up-to-date over de laatste nieuwtjes over Accijnzen...</p>
                <p class="lead">Onze laatste accijnzen nieuws: <a href=""><br>{{ $news->titel }}</a></p>
                <a class="btn btn-outline-dark" href="{{ route("news") }}">Bekijk onze nieuwtjes</a>
            </div>
            <div class="col-md-5">
                <div class="d-flex justify-content-center align-items-stretch h-100">
                    <img class="featurette-image img-fluid mx-auto" src="{{ asset('media/nieuwsberichten/' . $news->cover_image) }}" alt="accijnzen news">
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="position-relative overflow-hidden pb-1  p-md-5 text-white " style="background-color:#815194" >
        <div class="row align-items-stretch featurette" data-aos="flip-up">
            <div class="col-md-5">
                <div class="d-flex justify-content-center align-items-stretch h-100">
                    <img class="featurette-image img-fluid mx-auto" src="{{ asset('media/index/3.jpg') }}" alt="accijnzen news">
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="featurette-heading font-weight-bold">Europese en nationale regels met betrekking tot accijnzen</h2>
                <br>
                <p class="lead">Accijnzen vallen onder Europese regelgeving, maar lidstaten kunnen ook andere producten belasten. In België geldt een aparte regeling voor binnenlandse accijnzen, los van Europese wetgeving. Communautaire accijnsgoederen zoals energieproducten, elektriciteit, alcohol en tabak zijn geharmoniseerd op Europees niveau. Lidstaten kunnen echter hun eigen tarieven vaststellen. Nationale accijnsproducten in België omvatten alcoholvrije dranken en koffie, die onder nationale wetgeving vallen.</p>
            </div>
            
        </div>
    </div>

    
    
@endsection

@section('scripts')
@endsection