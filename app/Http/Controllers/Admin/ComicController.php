<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{

    public function index()
    {
        $comics = Comic::all();
        return view('admin.comics.index', compact('comics'));
    }


    public function create()
    {
        return view('admin.comics.create');
    }


    public function store(StoreComicRequest $request)
    {

        $valid_data = $request->validated();

        Comic::create($valid_data);

        return to_route('comics.index')->with('message', 'Comic added successfully');

    }

    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $valid_data = $request->validated();

        Comic::create($valid_data);

        return to_route('comics.index')->with('message', 'Comic updated successfully');
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();
        return to_route('comics.index')->with('message', 'Comic deleted');
    }
}