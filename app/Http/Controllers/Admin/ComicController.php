<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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


    public function store(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'thumb' => $request->thumb,
            'price' => $request->price,
            'series' => $request->series,
            'sale_date' => $request->sale_date,
            'type' => $request->type
        ];

        Comic::create($data);


        return to_route('comics.index')->with('message', 'comic added successfully');

    }

    public function show(Comic $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    public function edit(Comic $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'thumb' => $request->thumb,
            'price' => $request->price,
            'series' => $request->series,
            'sale_date' => $request->sale_date,
            'type' => $request->type
        ];

        $comic->update($data);

        return to_route('comics.index')->with('message', 'comic updated successfully');
    }

    public function destroy(Comic $comic)
    {
        //
    }
}