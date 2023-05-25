@extends('layouts.master')
@section('heading')
    <title>Accijnzen - Cursussen</title>
    <link href="{{ asset('css/cursus.css') }}" rel="stylesheet">
@endsection

@section('content')


<!-- Titel -->
<div style="background-color: #815194" class="my-2 mx-2 mt-5">

    <div class="position-relative overflow-hidden p-md-5 m-md-3  text-white" >
        <div data-aos="fade-right" class="col-md-6 p-lg-2 mx-auto my-2">
          <h1 class="display-4 fw-normal text-center ">Onze Cursussen</h1>
          <p class="lead text-center">Bent u geïnteresseerd in onze cursussen? Hier vind je alvast meer informatie!</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="container">
        <div class="card-columns">
            @foreach ($cursus as $curs)
            <form action="{{ route('cursus.showmore', $curs->id) }}" method="post">
                @method('GET')
                @csrf
                <button type="submit" class="card px-3 py-3 product-wap">
                    <img class="card-img-top img-fluid img-max-cards" src="{{ asset('media/cursussen/' . $curs->photo) }}" alt="accijnzen cursus">
                    <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor" class="bi bi-plus-circle text-white" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                        </svg>
                    </div>
                    <div class="card-body">
                        <h5 class="text-left card-title">{{ $curs->name }}</h5>
                        <p class="text-left card-text">
                            {!! nl2br(e($curs->subject)) !!}
                        </p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="m-0"><u>Meer info</u></p>
                            <p class="m-0">€{{ $curs->price }}</p>
                        </div>
                    </div>
                </button>
            </form>
            
            @endforeach
        </div>
    </div>
</div>



@endsection