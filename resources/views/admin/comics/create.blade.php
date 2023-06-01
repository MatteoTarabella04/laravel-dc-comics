@extends('layouts.admin')
@section('content')
    @include('partials.nav')
    @include('partials.error')

    <div class="container pt-4">
        <h1 class="text-center py-2">Add new comic</h1>
        <form action="{{ route('comics.store') }}" method="post">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title">
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ old('title', '') }}">
            </div>


            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input class="form-control" type="text" id="thumb" name="thumb" value="{{ old('thumb', '') }}">
            </div>


            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                    name="price" placeholder="Add $ before" value="{{ old('price', '') }}">
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <div class="mb-3">
                <label for="series" class="form-label @error('title') is-invalid @enderror">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series', '') }}">
            </div>


            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date"
                    value="{{ old('sale_date', '') }}">
            </div>


            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ old('type', '') }}">
            </div>


            <div class="d-flex justify-content-center py-4">
                <button class="btn w-50 btn-primary" type="submit">Create</button>
            </div>


        </form>
    </div>
@endsection
