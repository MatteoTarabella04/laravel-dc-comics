@extends('layouts.admin')

@section('content')
    @include('partials.nav')

    <div class="container-fluid py-4">
        <div class="table-responsive">

            @if (session('message'))
                <div class="alert alert-primary" role="alert">
                    <strong>{{ session('message') }}</strong>
                </div>
            @endif

            <table
                class="table table-striped
            table-hover
            table-borderless
            table-secondary
            align-middle">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Thumb</th>
                        <th scope="col">Price</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale Date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach ($comics as $comic)
                        <tr>
                            <td scope="row">{{ $comic->id }}</td>
                            <td>{{ $comic->title }}</td>
                            <td><img height="70" src="{{ $comic->thumb }}" alt=""></td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->created_at }}</td>
                            <td>{{ $comic->updated_at }}</td>
                            <td>
                                <div class="d-flex gap-2">

                                    <button class="btn btn-primary">
                                        <a href="{{ route('comics.show', $comic->id) }}" title="View"
                                            class="text-decoration-none text-white">
                                            <i class="fas fa-eye fa-sm fa-fw"></i>
                                        </a>
                                    </button>
                                    <button class="btn btn-secondary">
                                        <a href="{{ route('comics.edit', $comic->id) }}" title="Edit"
                                            class="text-decoration-none text-white">
                                            <i class="fas fa-pencil fa-sm fa-fw"></i>
                                        </a>
                                    </button>
                                    <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fas fa-trash fa-sm fa-fw"></i></button>
                                    </form>

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
