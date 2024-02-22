@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex align-items-center justify-content-between">
                    <h1 class="py-3 fw-bolder">PROJECTS</h1>
                    <div class="pt-3">
                        <a href="{{ route('admin.project.create') }}"
                            class="btn btn-outline-danger text-uppercase fw-bolder d-inline-block">add new
                            project</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($projects as $project)
                <div class="col-3 py-5">
                    <div class="card border-5">
                        <div class="cover_container">
                            <img src="{{ Vite::asset('resources/img/folder.png') }}" class="card-img-top rounded-0"
                                alt="folder">
                        </div>
                        <div class="card-body bg-dark text-white text-center">
                            <h5 class="card-title text-center text-uppercase fw-bolder">
                                {{ $project['name'] }}
                            </h5>
                            <div class="card-text">Data Inizio: {{ $project['start_date'] }}</div>
                            <div class="card-text">Data Fine: {{ $project['end_date'] }}</div>
                            <a href="{{ route('admin.project.show', ['project' => $project->id]) }}"
                                class="d-inline-block py-3 fw-bolder text-warning fs-5 text-decoration-none">DETAILS</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
