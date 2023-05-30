@extends('layouts.admin')
@section('content')
    <div class="container pt-4">
        <h1 class="py-4 text-center">
            Comic {{ $comic->name }} Editing
        </h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="post">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description"
                    value="{{ $comic->description }}" required>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input class="form-control" type="text" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Add $ before"
                    value="{{ $comic->price }}" required>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}"
                    required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}"
                    required>
            </div>
            <div class="d-flex justify-content-center py-4">
                <button class="btn w-50 btn-primary" type="submit">Edit</button>
            </div>
        </form>
    </div>
@endsection
