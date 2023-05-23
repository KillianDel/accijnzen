@extends('layouts.master')
@section('heading')
<link href="{{ asset('css/news.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- Titel -->
<div style="background-color: #815194" class="my-2 mx-2 mt-5">

    <div class="position-relative overflow-hidden p-md-5 m-md-3  text-white" >
        <div data-aos="fade-right" class="col-md-6 p-lg-2 mx-auto my-2">
          <h1 class="display-4 fw-normal text-center ">Accijnzen news!</h1>
          <p class="lead text-center">Geïnteresseerd in de laatste updates over Accijnzen?</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="container">
      <div class="card-columns">
        @foreach ($news as $new)
        <div class="card">
          <img class="card-img-top" src="{{ asset('media/nieuwsberichten/' . $new->cover_image) }}" alt="accijnzen news">
            <div class="card-body">
                <h5 class="card-title">{{ $new->titel }}</h5>
                <p class="card-text">
                    {{ $new->content }}
                </p>
                <p class="card-text"><small class="text-muted">{{ $new->created_at->format('d/m/Y') }}</small></p>
            </div>
        </div>
        @endforeach
      </div>
    </div>
</div>
{{-- <div class="bg-light my-2 mx-2">
    <div class="position-relative overflow-hidden p-md-5 m-md-3 bg-light">
            <div class="card ">
                <img class="card-img-top" src=""  width="1200" height="500">
                <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"></p>
                <p class="card-text"><small class="text-muted"></small></p>
                </div>
            </div>
        

    </div>

</div> --}}
@endsection