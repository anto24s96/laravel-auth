@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center py-3 text-uppercase fw-bolder fst-italic">Project Details</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card border-5">
                    <div class="cover_container">
                        <img src="{{ Vite::asset('resources/img/folder.png') }}" class="card-img-top rounded-0"
                            alt="folder">
                    </div>
                    <div class="card-body bg-dark text-white fst-italic">
                        <h5 class="card-title text-uppercase fw-bolder">Nome Progetto: <span>{{ $project['name'] }}</span>
                        </h5>
                        <div class="card-text"> Data Inizio: {{ $project['start_date'] }}</div>
                        <div class="card-text"> Data Fine: {{ $project['end_date'] }}</div>
                        <div class="card-text py-2"> Descrizione: {{ $project['description'] }}</div>
                        <div class="card-text">Slug: {{ $project['slug'] }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
