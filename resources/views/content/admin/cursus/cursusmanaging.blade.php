@extends('layouts.admin')
@section('heading')
    <title>Adminmenu - Cursus</title>
@endsection


@section('content')
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4"><div class="chartjs-size-monitor" style="position: absolute; inset: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Cursussen</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group mr-2">
        <button type="button" class="btn btn-sm btn-dark" data-toggle="modal" data-target="#eventcreate" onclick="openForm()">Nieuwe cursus toevoegen</button>
      </div>
    </div>
  </div>

    
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th>Naam</th>
          <th>Onderwerp</th>
          <th>Beschrijving</th>
          <th>Prijs (€)</th>
          <th>Prioriteit</th>
          <th>Acties</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($cursus as $curs)
        <tr>
          <td>{{ $curs->name }}</td>
          <td>{!! $curs->subject !!}</td>
          <td>{!! $curs->description !!}</td>
          <td>€{{ $curs->price }}</td>
          <td>{{ $curs->priority }}</td>
          <td>
            <div class="btn-group">
              <form action="{{ route('cursus.edit',$curs->id) }}" method="post">
                @method('GET')
                @csrf
                <button type="submit" class="btn btn-primary btn-sm">Edit</button>
              </form>
              <form action="{{ route('cursus.editphoto',$curs->id) }}" method="post">
                @method('GET')
                @csrf
                <button type="submit" class="btn btn-secondary btn-sm">Edit foto</button>
              </form>
              <form action="{{ route('cursus.delete',$curs->id) }}" method="post">
                @csrf
                <button type="submit"  class=" show_confirm btn btn-danger btn-sm show_confirm">Verwijderen</button>
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
				  <h5 class="modal-title" id="demoModalLabel">Nieuwe cursus toevoegen</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
          <form action="{{ route('cursus.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="name" >Naam Cursus</label>
              <div class="col-sm-10">
                <input type="text" @error('name') is-invalid @enderror name="name" class="form-control form-control-lg"  required autofocus/>
                @error('name')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="price" >Prijs</label>
              <div class="col-sm-10">
                <input type="number" min="1" @error('price') is-invalid @enderror name="price" class="form-control form-control-lg"  required autofocus/>
                @error('price')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="priority" >Prioriteit (max 100)</label>
              <div class="col-sm-10">
                <input type="number" min="1" max="100" @error('priority') is-invalid @enderror name="priority" class="form-control form-control-lg"  required autofocus/>
                @error('priority')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="subject" >Onderwerp</label>
              <div class="col-sm-10">
                <textarea name="subject" @error('subject') is-invalid @enderror class="form-control form-control-lg"  autofocus rows="2" cols="50"></textarea>
                @error('subject')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="description" >Beschrijving</label>
              <div class="col-sm-10">
                <textarea name="description" @error('description') is-invalid @enderror class="form-control form-control-lg"  autofocus rows="5" cols="70"></textarea>
                @error('description')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
            </div>
            <div class="form-group row">
              <label for="photo" class="col-sm-2 col-form-label">Foto (max: 2048x2048)</label>
              <div class="col-sm-10">
                <input type="file"  @error('photo') is-invalid @enderror name="photo" id="photo" required>
                @error('photo')
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
