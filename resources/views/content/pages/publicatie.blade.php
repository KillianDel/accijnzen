@extends('layouts.master')
@section('heading')
    <title>Accijnzen - Publicaties</title>
    <link href="{{ asset('css/publicatie.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
@endsection

@section('content')


<!-- Titel -->
<div style="background-color: #815194" class="my-2 mx-2 mt-5">

    <div class="position-relative overflow-hidden p-md-5 m-md-3  text-white" >
        <div data-aos="fade-right" class="col-md-6 p-lg-2 mx-auto my-2">
          <h1 class="display-4 fw-normal text-center ">Onze Publicaties</h1>
          <p class="lead text-center">Een paar van onze documenten, speciaal voor u beschikbaar gesteld!</p>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="tab-content no-bg no-border">
            <div class="tab-pane active documents documents-panel">
                @foreach($publicaties as $publicatie)
                <a href="{{ route('publicatie.download', $publicatie->id) }}" style="text-decoration: none;" class="document {{ $publicatie->id % 2 === 0 ? ' danger' : '' }}">
                    <div class="document-body">
                        <i class="fa fa-file-pdf-o text-danger"></i>
                    </div>
                    <div class="document-footer">
                        <span class="document-name"> {{ $publicatie->name }} </span>
                        <span class="document-description pb-2"> {!! $publicatie->subject !!} </span>
                        <button class="btn btn-danger btn-sm">Download</button>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>




@endsection