@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 my-5">
            @forelse ($comics as $comic)
                <div class="col">
                    <div class="card my-3 p-3">
                        <img style="" class="card-img-top" src="{{ $comic->thumb }}" alt="Title">
                        <div class="card-body">
                            <h4 class="card-title">{{ $comic->title }}</h4>
                            <p class="card-text">{{ $comic->series }}</p>
                            <p class="card-text"><strong> {{ $comic->price }} </strong></p>
                        </div>
                    </div>
                </div>
            @empty
                <div>
                    <p>No Comics</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
