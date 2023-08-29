<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::all();

        return view('home', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'thumb' => 'required|string|url',
            'type' => 'required|string',
            'series' => 'required|string',

        ]);
        $data = $request->all();
        $comic = new Comic($data);
        $comic->save();
        return to_route('home');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Comic $hero)
    // {

    //     $comic = Comic::findOrFail($hero->id);
    //     return view('comic', compact('hero'));
    // }
    public function show(Comic $comic)
    {
        return view('comic', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'thumb' => 'required|string|url',
            'type' => 'required|string',
            'series' => 'required|string',

        ]);
        $data = $request->all();
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->type = $data['type'];
        $comic->series = $data['series'];
        $comic->save();
        return to_route('comic.show', $comic);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Comic::destroy($id);
        return to_route('home');
    }
}
