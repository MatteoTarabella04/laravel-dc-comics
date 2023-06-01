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
                            <td>${{ $comic->price }}</td>
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



                                    <!-- Modal trigger button -->
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modal-{{ $comic->id }}">
                                        <i class="fas fa-trash fa-sm fa-fw"></i>
                                    </button>

                                    <!-- Modal Body -->
                                    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                                    <div class="modal fade" id="modal-{{ $comic->id }}" tabindex="-1"
                                        data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
                                        aria-labelledby="modalTitle-{{ $comic->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm"
                                            role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="modalTitle-{{ $comic->id }}">Delete
                                                        {{ $comic->title }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Do you want to delete {{ $comic->title }}?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <form action="{{ route('comics.destroy', $comic->id) }}"
                                                        method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Confirm</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    {{-- <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i
                                                class="fas fa-trash fa-sm fa-fw"></i></button>
                                    </form> --}}

                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
