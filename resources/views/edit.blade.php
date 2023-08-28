@extends('layout.main_layout')

@section('bootstrap')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
@endsection

@section('content')
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach

        </ul>
    @endif
    <div class="card-title d-flex align-items-center justify-content-between container mt-5">
        <h1>Aggiungi Comic</h1>
        <a href="{{ route('home') }}" class="btn btn-secondary">Indietro</a>
    </div>
    <hr>
    <div class="card-body">
        <form method="POST" action="{{ route('comic.update', $comic) }}" class="container mb-5">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="dorm-control" id="title" name="title" placeholder="Titolo"
                            value="{{ $comic->title }}">
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="url" class="form-control" id="thumb" name="thumb" placeholder="URL Immagine"
                            value="{{ $comic->thumb }}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Descrizione" rows="3">{{ $comic->description }}</textarea>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <select class="dorm-select" aria-label="Default select example" name="type" id="type">
                            <option @if ($comic->typo === 'comic book') selected @endif>comic book</option>
                            <option @if ($comic->typo === 'graphic novel') selected @endif>graphic novel</option>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="series" class="form-label">series</label>
                        <input type="text" class="form-control" id="series" name="series" placeholder="series"
                            value="{{ $comic->series }}">
                    </div>
                </div>
                <div class="col-4">
                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-secondary me-2">Reset</button>
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>
                </div>
        </form>
    </div>
@endsection
