@extends('layouts.master')
@section('heading')
    <title>Accijnzen - Contact</title>
@endsection

@section('content')


<!-- Titel -->
<div style="background-color: #815194" class="my-2 mx-2 mt-5">

    <div class="position-relative overflow-hidden p-md-5 m-md-3  text-white" >
        <div data-aos="fade-right" class="col-md-6 p-lg-2 mx-auto my-2">
          <h1 class="display-4 fw-normal text-center ">Contacteer ons!</h1>
          <p class="lead text-center">Bent u geïnteresseerd in onze cursussen? Of heeft u hier vragen over? Iets anders? Stel hier gerust al uw vragen?</p>
        </div>
    </div>
</div>


<div class="bg-dark p-md-5 row featurette px-5 py-5 mx-2 mb-2 no-gutters rounded text-white">
    <div data-aos="zoom-in" class="col-md-6 offset-md-3">
        <form action="{{ route('contact.post') }}" method="POST" id="my-form" class="row g-3">
            @csrf  
            <div class="form-group col-12">
                <label for="name" class="form-label">Naam</label>
                <input type="text" id="name" class="form-control border border-dark" name="name" >  
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" id="email" class="form-control border border-dark" name="email">  
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group col-12">
                <label class="control-label" for="service_status">Onderwerp</label>
                    <select id="subject" name="subject" class="form-control">
                    <option selected>Maak uw keuze</option>
                @foreach ($cursus as $curs)
                    <option value="{{ $curs->name }}">{{ $curs->name }}</option>
                @endforeach 
                    <option value="andere">Andere</option>
                 </select>
                @if ($errors->has('subject'))
                    <span class="text-danger">{{ $errors->first('subject') }}</span>
                @endif
            </div>
                
            <div class="form-group form-floating col-12">
                <label for="message" class="form-label">Bericht</label>
                <textarea  id="message" class="form-control border border-dark" id="floatingTextarea2" name="message" cols="30" rows="5"></textarea> 
                @if ($errors->has('message'))
                    <span class="text-danger">{{ $errors->first('message') }}</span>
                @endif 
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-light ">Versturen</button>
            </div>
                    @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{Session::get('success')}}
                        </div>
                    @endif
        </form>
    </div>
</div>

<div class="position-relative overflow-hidden p-1 p-md-5 text-center mb-2 mx-2 text-white" style="background-color: #815194">
    <div class="row align-items-start featurette" data-aos="flip-up">
        <div class="col-md-7 d-flex flex-column justify-content-center">
            <h2 class="featurette-heading font-weight-bold pt-4">Over mij</h2>
            <br><br>
            <p class="lead">Lange tekst</p>
        </div>
        <div class="col-md-5">
            <div class="d-flex justify-content-center align-items-start h-100">
                <img class="featurette-image img-fluid mx-auto" src="https://upload.wikimedia.org/wikipedia/commons/6/63/Icon_Bird_512x512.png" alt="accijnzen news">
            </div>
        </div>
    </div>
</div>



</div>
@endsection