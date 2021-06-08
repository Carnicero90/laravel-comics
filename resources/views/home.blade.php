@extends('layouts.app')
@section('main_content')
    <section class="comics-collection">
        <div class="container">
            <h1 class="super bc_1 c_2">CURRENT SERIES</h1>
            <ul class="flexer wrap c_2">
                @foreach ($comics as $comic)
                    <li class="comic">
                        <div>
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                            <span>{{ $comic['series'] }}</span>
                        </div>
                    </li>
                @endforeach

            </ul>
            <a href="more" class="btn bc_1 c_2">LOAD MORE</a>

        </div>

    </section>
    <section class="subnav bc_1 c_2">
        <div class="container">
            <ul class="flexer between">
                <li><img src="" alt=""><span><a href="">DIGITAL COMICS</a></span></li>
                <li><img src="" alt=""><span><a href=""></a>DC MERCHANDISE</span></li>
                <li><img src="" alt=""><span><a href=""></a>SUBSCRIPTION</span></li>
                <li><img src="" alt=""><span><a href=""></a>COMIC SHOP LOCATOR</span></li>
                <li><img src="" alt=""><span><a href="">DC POWER VISA</a></span></li>

            </ul>
        </div>

    </section>
@endsection
