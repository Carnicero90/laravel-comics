@extends('layouts.app')
@section('main_content')
    <section class="comics-collection">
        <div class="container flexer col center-cross">
            <img src="{{ $comic_details['thumb'] }}" alt="">
            
          
            <a href="{{ route('home') }}" class="btn bc_1 c_2">BACKHOME</a>

        </div>

    </section>
    <section class="subnav bc_1 c_2">
        <div class="container">
            <ul class="flexer between">
                <li><img src="{{ asset('../img/buy-comics-digital-comics.png') }}" alt=""><span><a href="">DIGITAL COMICS</a></span></li>
                <li><img src="{{ asset('../img/buy-comics-merchandise.png') }}" alt=""><span><a href="">DC MERCHANDISE</a></span></li>
                <li><img src="{{ asset('../img/buy-comics-subscriptions.png') }}" alt=""><span><a href="">SUBSCRIPTION</a></span></li>
                <li><img src="{{ asset('../img/buy-comics-shop-locator.png') }}" alt=""><span><a href="">COMIC SHOP LOCATOR</a></span></li>
                <li><img src="{{ asset('../img/buy-dc-power-visa.svg') }}" alt=""><span><a href="">DC POWER VISA</a></span></li>

            </ul>
        </div>

    </section>
@endsection