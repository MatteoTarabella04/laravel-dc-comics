@extends('layouts.app')

@section('content')
    <div class="comics_page bg-dark">
        <div class="container py-4">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-xl-6 g-4 py-4">

                @foreach ($comics as $comic)
                    <div class="col">
                        <div class="card bg-transparent border-0 rounded-0 h-100">
                            <img src="{{ $comic['thumb'] }}" class="">
                            <div class="text-center text-white"> {{ $comic['title'] }} </div>
                        </div>
                    </div>
                @endforeach

                <button type="button" class="btn btn-primary mt-5 m-auto rounded-0">LOAD MORE</button>
            </div>

        </div>
    </div>

    <div class="banner bg-primary d-flex align-items-center">
        <div class="container">
            <div class="row row-cols-6 align-items-center justify-content-around py-4">
                <div class="col">
                    <div class="banner_image">
                        <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt=""
                            class="h-100">
                        <p class="text-white text-uppercase">digital comics</p>
                    </div>
                </div>

                <div class="col">
                    <div class="banner_image">
                        <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt=""
                            class="h-100">
                        <p class="text-white text-uppercase">dc merchandise</p>
                    </div>
                </div>

                <div class="col">
                    <div class="banner_image">
                        <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt=""
                            class="h-100">
                        <p class="text-white text-uppercase">comic shop locator</p>
                    </div>
                </div>

                <div class="col">
                    <div class="banner_image">
                        <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt=""
                            class="h-100">
                        <p class="text-white text-uppercase">dc power visa</p>
                    </div>
                </div>

            </div>
        </div>
    @endsection
