@extends('layouts.app')
@section('content')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="post">
            <div class="col-md-4">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" nmae="title" required>
            </div>
            <div class="col-md-4">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" required>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Image</label>
                <input class="form-control" type="file" id="thumb" name="thumb">
            </div>
            <div class="col-md-4">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="col-md-4">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" required>
            </div>
            <div class="col-md-4">
                <label for="sale_date" class="form-label">Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" required>
            </div>
            <div class="col-md-4">
                <label for="type" class="form-label">Type</label>
                <input type="date" class="form-control" id="type" name="type" required>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Create</button>
            </div>
        </form>
    </div>
@endsection
