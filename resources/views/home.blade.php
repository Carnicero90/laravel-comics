@extends('layouts.app')
@section('main_content')
    <section class="comics-collection">
        <div class="container flexer col center-cross">
            <h1 class="super bc_1 c_2">CURRENT SERIES</h1>
            <ul class="flexer wrap c_2">
                @foreach ($comics as $comic)
                    <li class="comic flexer col">
                        <div>
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        </div>
                        <span>{{ $comic['series'] }}</span>

                    </li>
                @endforeach

            </ul>
            <a href="more" class="btn bc_1 c_2">LOAD MORE</a>

        </div>

    </section>
    <section class="subnav bc_1 c_2">
        <div class="container">
            <ul class="flexer between">
                <li><img src="{{ asset('../img/buy-comics-digital-comics.png') }}" alt=""><span><a href="">DIGITAL COMICS</a></span></li>
                <li><img src="{{ asset('../img/buy-comics-digital-comics.png') }}" alt=""><span><a href="">DC MERCHANDISE</a></span></li>
                <li><img src="{{ asset('../img/buy-comics-digital-comics.png') }}" alt=""><span><a href="">SUBSCRIPTION</a></span></li>
                <li><img src="{{ asset('../img/buy-comics-digital-comics.png') }}" alt=""><span><a href="">COMIC SHOP LOCATOR</a></span></li>
                <li><img src="{{ asset('../img/buy-comics-digital-comics.png') }}" alt=""><span><a href="">DC POWER VISA</a></span></li>

            </ul>
        </div>

    </section>
@endsection
