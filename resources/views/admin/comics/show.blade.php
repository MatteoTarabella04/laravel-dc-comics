@extends('layouts.admin')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <img src="{{ $comic->thumb }}" alt="">
            </div>
            <div class="col">
                <div class="title">
                    <h1> {{ $comic->title }}</h1>
                </div>
                <div class="desc">
                    <p> {{ $comic->description }}</p>
                    <p><b>Price:</b> {{ $comic->price }}</p>
                    <p><b>Type:</b> {{ $comic->type }}</p>
                    <p><b>Series:</b> {{ $comic->series }}</p>
                    <p><b>Sale date:</b> {{ $comic->sale_date }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
