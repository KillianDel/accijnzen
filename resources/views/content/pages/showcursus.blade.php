@extends('layouts.master')

@section('content')
    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Open Content -->
    <section class="bg-light">
        <div class="container pb-5">
            <div class="row">
                <div class="col-lg-5 mt-5">
                    <div class="card mb-3">
                        <img class="card-img img-fluid" src="{{ asset('media/cursussen/' . $cursus->photo) }}" alt="accijnzen cursus">
                    </div>
                </div>
                <!-- col end -->
                <div class="col-lg-7 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h1 class="h2">{{ $cursus->name }}</h1>
                            <p class="h3 py-2">€{{ $cursus->price }}</p>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <p>{!! $cursus->subject !!}</p>
                                </li>
                            </ul>

                            <h6>Meer info:</h6>
                            <p>{!! $cursus->description !!}</p>
                            <a href="{{ route('contact') }}" class="btn btn-dark text-white float-right">Contacteer me</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Close Content -->

<style>
    body {
        background-color: #f8f9fa
    }
</style>
@endsection