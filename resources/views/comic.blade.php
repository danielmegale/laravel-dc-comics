@extends('layout.main_layout')

@section('main')
    <section class="container spotlight">
        <div class="pb">
            <img src="{{ $comic['thumb'] }}" alt="">
        </div>
        <section class="w-800">
            <h1>{{ $comic['title'] }}</h1>
            <div class="green-bar flex jc-between">
                <div>
                    <p>U.S. Price: </p>
                    <p class="c-white">{{ $comic['price'] }}</p>
                </div>
                <div>
                    <p>AVAILABLE</p>
                    <p>Check Available</p>
                </div>
            </div>
            <div class="pb-50">{{ $comic['description'] }}</div>
            <img src="{{ Vite::asset('resources\img\adv.png') }}" alt="">
            <div class="flex bg-grey w-800">
                <div class="w-50">
                    <h2>Talent</h2>
                    <div class="flex">
                        <h4 class="w-20">Art by:</h4>
                        <div class="w-80">
                            @foreach ($comic['artists'] as $artist)
                                <span class="fs-1">
                                    {{ $artist }},
                                </span>
                            @endforeach
                        </div>
                    </div>
                    <div class="flex">
                        <h4 class="w-20">Written by:</h4>
                        <div class="w-80">
                            @foreach ($comic['writers'] as $writer)
                                <span>
                                    {{ $writer }},
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="w-50">
                    <h2>Specs</h2>
                    <div class="flex">
                        <h4 class="w-20">Series:</h4>
                        <a class="w-80" href="">{{ $comic['series'] }}</a>
                    </div>
                    <div class="flex">
                        <h4 class="w-20">U.S.Price:</h4>
                        <a class="w-80" href="">{{ $comic['price'] }}</a>
                    </div>
                    <div class="flex">
                        <h4 class="w-20">On Sale Date:</h4>
                        <a class="w-80" href="">{{ $comic['sale_date'] }}</a>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
