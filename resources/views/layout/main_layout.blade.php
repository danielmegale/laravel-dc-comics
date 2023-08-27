<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dc Comics</title>
    @yield('bootstrap')
    @vite('resources/js/app.js')
</head>

<body>
    {{-- Header --}}
    <section id="header">
        <header class="container">
            <nav>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="">
                <ul>
                    <li><a>Characters</a></li>
                    <li><a>Comics</a></li>
                    <li><a>Movies</a></li>
                    <li><a>TV</a></li>
                    <li><a>Games</a></li>
                    <li><a>Collectibles</a></li>
                    <li><a>Videos</a></li>
                    <li><a>Fans</a></li>
                    <li><a>News</a></li>
                    <li><a>Shop</a></li>
                </ul>
            </nav>
        </header>
    </section>
    {{-- jumbotron --}}
    <section id="jumbotron"></section>
    <div class="blue-bar"></div>
    @yield('main')
    @yield('content')
    {{-- Footer --}}
    <section id="footer">
        <div>
            <main>
                <div class="container">
                    <div class="ul-flex">
                        <div>
                            <ul>DC COMICS
                                <li>Characters</li>
                                <li>Comics</li>
                                <li>Movies</li>
                                <li>TV</li>
                                <li>Games</li>
                                <li>Videos</li>
                                <li>News</li>
                            </ul>
                            <ul>SHOP
                                <li>Shop DC</li>
                                <li>Shop DC Collactibles</li>
                            </ul>
                        </div>
                        <ul>DC
                            <li>Terms of Use</li>
                            <li>Privacy plicy(New)</li>
                            <li>Ad Choices</li>
                            <li>Advertising</li>
                            <li>Jobs</li>
                            <li>Subscriptions</li>
                            <li>Talent Workshops</li>
                            <li>CPSC Certificates</li>
                            <li>Ratings</li>
                            <li>Shop Help</li>
                            <li>Contacts Us</li>
                        </ul>
                        <ul>SITES
                            <li>DC</li>
                            <li>MAD magazine</li>
                            <li>DC Kids</li>
                            <li>DC Universe</li>
                            <li>Dc Power Visa</li>
                        </ul>
                    </div>
                </div>
            </main>
            <footer>
                <div class="container f-flex">
                    <button>SING-UP NOW</button>
                    <div class="flex">
                        <div>
                            <img src="{{ vite::asset('resources/img/footer-facebook.png') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ vite::asset('resources/img/footer-periscope.png') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ vite::asset('resources/img/footer-pinterest.png') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ vite::asset('resources/img/footer-twitter.png') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ vite::asset('resources/img/footer-youtube.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </section>
</body>

</html>
