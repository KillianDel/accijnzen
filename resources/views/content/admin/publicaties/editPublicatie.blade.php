@extends('layouts.admin')


@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      <h1 class="h2">Deze publicatie: {{ $publicatie->name }}</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <a href="{{ route('publicatie.get') }}" class="btn btn-sm btn-primary">Terug</a>
        </div>
      </div>
    </div>
    <form action="{{ route('publicatie.update', $publicatie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="name" >Naam</label>
            <div class="col-sm-10">
                <input type="text" @error('name') is-invalid @enderror name="name" value="{{ $publicatie->name }}" class="form-control form-control-lg"  required autofocus/>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="subject" >Onderwerp</label>
            <div class="col-sm-10">
                <textarea name="subject" @error('subject') is-invalid @enderror class="form-control form-control-lg" autofocus rows="4" cols="50">{{ $publicatie->subject }}</textarea>
                @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-dark btn-sm">Aanpassen publicatie</button>
        </div>
    </form>
  </main>
@endsection
