@extends('layout.main_layout')

@section('bootstrap')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
@endsection

@section('content')
    <div class="card-title d-flex align-items-center justify-content-between container">
        <h1>Aggiungi Comic</h1>
        <a href="/" class="btn btn-secondary">Indietro</a>
    </div>
    <hr>
    <div class="card-body mb-5">
        <form method="POST" action="{{ route('comic.store') }}" class="container">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" class="dorm-control" id="title" name="title" placeholder="Titolo"
                            required>
                    </div>
                </div>
                <div class="col-6">
                    <div class="mb-3">
                        <label for="thumb" class="form-label">Immagine</label>
                        <input type="url" class="form-control" id="thumb" name="thumb" placeholder="URL Immagine">
                    </div>
                </div>
                <div class="col-12">
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <textarea class="form-control" id="description" name="description" placeholder="Descrizione" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="type" class="form-label">Tipo</label>
                        <select class="dorm-select" aria-label="Default select example" name="type" id="type"
                            required>
                            <option>comic book</option>
                            <option>graphic novel</option>
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="updated_at" class="form-label">updated_at</label>
                        <input type="text" class="form-control" id="updated_at" name="updated_at"
                            placeholder="updated_at">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="created_at" class="form-label">created_at</label>
                        <input type="text" class="form-control" id="created_at" name="created_at"
                            placeholder="created_at">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="price" class="form-label">price</label>
                        <input type="text" class="form-control" id="price" name="price" placeholder="price">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="series" class="form-label">series</label>
                        <input type="text" class="form-control" id="series" name="series" placeholder="series">
                    </div>
                </div>
                <div class="col-4">
                    <div class="mb-3">
                        <label for="sale_date" class="form-label">sale_date</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="sale_date">
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="artists" class="form-label">'artists</label>
                            <input type="text" class="form-control" id="artists" name="artists" placeholder="artists">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="mb-3">
                            <label for="writers" class="form-label">writers</label>
                            <input type="text" class="form-control" id="writers" name="writers"
                                placeholder="writers">
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-secondary me-2">Reset</button>
                        <button type="submit" class="btn btn-success">Salva</button>
                    </div>
                </div>
        </form>
    </div>
@endsection
