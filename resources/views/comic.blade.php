@extends('layouts.app')
@section('main_content')
    <section class="comic bc_2">
        <div class="container rel">
            {{-- div.thumb --}}
            <div class="thumb">
                <div class="inner">
                    <span class="c_2 top-left text-centered">COMIC BOOK</span>
                    <img src="{{ $comic_details['thumb'] }}" alt="{{ $comic_details['title'] }}">
                    <span class="c_2 bottom text-centered"><a href="{{ route('home') }}">VIEW GALLERY</a></span>
                </div>
            </div>
            {{-- END div.thumb --}}
            <div class="flexer">
                <div class="comic-description">
                    <h1 class="comic-title">
                        {{ $comic_details['title'] }}
                    </h1>
                    <div class="flexer buy-comic">
                        <span class="c_2 op grower">U.S. Price: <span
                                class="c_2">{{ $comic_details['price'] }}</span></span>
                        <span class="c_2 op">AVAILABLE</span>
                        <span class="c_2">Check Availability</span>
                    </div>
                    <p class="comic-desc">
                        {{ $comic_details['description'] }}
                    </p>


                </div>
                <div class="adv flexer col end-cross">
                    <span>ADVERTISEMENT</span>
                    <img src="{{ asset('../img/adv.jpg') }}" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="tabler">
        <div class="container flexer">
            <div class="table">
                <h2>Talent</h2>
                <ul>
                    <li class="flexer">
                        <span class="label">Art by:</span>
                        <span class="list">
                            @foreach ($comic_details['artists'] as $item)
                                {{ $item }}@if (!$loop->last), @endif
                            @endforeach
                        </span>
                    </li>
                    <li class="flexer">
                        <span class="label">Written by:</span>
                        <span class="list">
                            @foreach ($comic_details['writers'] as $item)
                                {{ $item }}@if (!$loop->last), @endif
                            @endforeach
                        </span>
                    </li>
                </ul>
            </div>

            <div class="table">
                <h2>Specs</h2>
                <ul>
                    <li class="flexer">
                        <span class="label">Series:</span>
                        <span class="list">
                            {{ $comic_details['series'] }}</span>
                    </li>
                    <li class="flexer">
                        <span class="label">U.S. Price:</span>
                        <span class="list">{{ $comic_details['price'] }}</span>
                    </li>
                    <li class="flexer">
                        <span class="label">On sale date:</span>
                        <span class="list">{{ $comic_details['sale_date'] }}</span>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <section class="subnav bc_1 c_2">
        <div class="container">
            <ul class="flexer between">
                <li><img src="{{ asset('../img/buy-comics-digital-comics.png') }}" alt=""><span><a href="">DIGITAL
                            COMICS</a></span></li>
                <li><img src="{{ asset('../img/buy-comics-merchandise.png') }}" alt=""><span><a href="">DC
                            MERCHANDISE</a></span></li>
                <li><img src="{{ asset('../img/buy-comics-subscriptions.png') }}" alt=""><span><a
                            href="">SUBSCRIPTION</a></span></li>
                <li><img src="{{ asset('../img/buy-comics-shop-locator.png') }}" alt=""><span><a href="">COMIC SHOP
                            LOCATOR</a></span></li>
                <li><img src="{{ asset('../img/buy-dc-power-visa.svg') }}" alt=""><span><a href="">DC POWER
                            VISA</a></span></li>

            </ul>
        </div>

    </section>
@endsection
