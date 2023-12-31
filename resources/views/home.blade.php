@extends('layout.main_layout')
@section('main')
    {{-- Main --}}
    <section id="main">
        <main>
            @if (session('delete'))
                <div class="white">
                    Eliminazione effettuata con successo
                </div>
            @endif
            <h1 class="container">Contents goes here </h1>
            <figure class="container">
                @foreach ($comics as $comic)
                    <div>
                        <div class="card-container">
                            <a href="{{ route('comic.show', $comic) }}"><img src="{{ $comic['thumb'] }}"></a>
                        </div>
                        <figcaption>{{ $comic['series'] }}</figcaption>
                    </div>
                @endforeach
            </figure>
        </main>
        <a href="{{ route('comic.create', $comic) }}" class="">Aggiungi Comic</a>
    </section>
    {{-- Jumbotron --}}
    <section id="adv">
        <div class="height">
            <figure class="container">
                <div class="row">
                    <img src="{{ Vite::asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    <p>DIGITAL COMICS</p>
                </div>
                <div class="row">
                    <img src="{{ Vite::asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    <p>DC MERCHANDISE</p>
                </div>
                <div class="row">
                    <img src="{{ Vite::asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    <p>SUBSCRIPTION</p>
                </div>
                <div class="row">
                    <img src="{{ Vite::asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    <p>COMIC SHOP LOCATOR</p>
                </div>
                <div class="row">
                    <img src="{{ Vite::asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    <p>DC POWER VISA</p>
                </div>
            </figure>
        </div>
    </section>
@endsection
