@extends('layouts.admin')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
      <h1 class="h2">Aanpassen foto voor nieuwberichtje: {{ $news->titel }}</h1>
      <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group mr-2">
          <a href="{{ route('news.get') }}" class="btn btn-sm btn-primary">Terug</a>
        </div>
      </div>
    </div>
    <form action="{{ route('news.updatefoto', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group row">
            <label for="cover_image" class="col-sm-2 col-form-label">Foto (max: 2048x2048)</label>
            <div class="col-sm-10">
                <input type="file"  @error('cover_image') is-invalid @enderror name="cover_image" id="cover_image" required>
                @error('cover_image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-dark btn-sm">Aanpassen coverfoto</button>
        </div>
    </form>
  </main>
@endsection