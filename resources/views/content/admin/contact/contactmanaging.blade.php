@extends('layouts.admin')
@section('heading')
    <title>Adminmenu - Contact</title>
@endsection



@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Contact</h1>
  </div>

    
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>Naam</th>
          <th>Email</th>
          <th>Onderwerp</th>
          <th>Bericht</th>
          <th>Acties</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($contact as $cont)
        <tr>
          <td>{{ $cont->name }}</td>
          <td>{{ $cont->email }}</td>
          <td>{{ $cont->subject }}</td>
          <td>{{ $cont->message }}</td>
          <td>
            <div class="btn-group">
              <form action="{{ route('contact.treated',$cont->id) }}" method="POST">
                @method('PUT')
                @csrf
                <button type="submit"  class=" show_confirm btn btn-success btn-sm show_confirm">Afgehandeld</button>
              </form>
            </div>
          </td>
        </tr>
      @endforeach
      </tbody> 
    </table>
  </div>
  <div class="modal fade" id="eventcreate" tabindex="-1" role="dialog" aria-labelledby="demoModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
				  <h5 class="modal-title" id="demoModalLabel">Nieuwsberichtje aanmaken</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
          <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="titel" >Titel</label>
              <div class="col-sm-10">
                <input type="text" @error('titel') is-invalid @enderror name="titel" class="form-control form-control-lg"  required autofocus/>
                @error('titel')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="content" >Beschrijving</label>
              <div class="col-sm-10">
                <textarea name="content" @error('content') is-invalid @enderror class="form-control form-control-lg"  autofocus rows="4" cols="50"></textarea>
                @error('content')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="cover_image" class="col-sm-2 col-form-label">Coverfoto (optioneel) (max: 2000x1100)</label>
              <div class="col-sm-10">
                <input type="file"  @error('cover_image') is-invalid @enderror name="cover_image" id="cover_image">
                @error('cover_image')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="text-right">
              <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Annuleer</button>
              <button type="submit" class="btn btn-success btn-sm">Post</button>
            </div>
          </form>
				</div>
			</div>
	  </div>
  </div>
</main>

  

@endsection

@section('scripts')
<script type="text/javascript">
  @if (count($errors) > 0)
      $('#eventcreate').modal('show');
  @endif
</script>
@endsection
