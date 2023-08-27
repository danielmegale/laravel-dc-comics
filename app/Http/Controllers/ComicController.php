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
        $comic = Comic::all();

        return view('comic.index', compact('comic'));
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
        $data = $request->all();
        $comic = new Comic();
        $comic->title = $data['title'];
        $comic->description = $data['description'];
        $comic->thumb = $data['thumb'];
        $comic->type = $data['type'];
        $comic->updated_at = $data['updated_at'];
        $comic->created_at = $data['created_at'];
        $comic->price = $data['price'];
        $comic->series = $data['series'];
        $comic->sale_date = $data['sale_date'];
        $comic->artists = $data['artists'];
        $comic->writers = $data['writers'];
        $comic->save();
        return view('home');
    }

    /**
     * Display the specified resource.
     */
    // public function show(Comic $hero)
    // {

    //     $comic = Comic::findOrFail($hero->id);
    //     return view('comic', compact('hero'));
    // }
    public function show($index)
    {
        $comics = config('comics');
        $comic = $comics[$index];

        return view('comic', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
