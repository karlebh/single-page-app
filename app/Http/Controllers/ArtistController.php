<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Artist;
use Illuminate\Http\Request;
use App\Http\Requests\ArtistFormRequest;
use Illuminate\Support\Str;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Artist/Index', [
            'artists' => Artist::latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Artist/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArtistFormRequest $request)
    {
        $slug = trim(Str::limit(Str::slug($request->validated()['name']), 50, ''), '-');

        $artist = $request
                        ->user()
                        ->artists()
                        ->firstOrCreate(array_merge(['slug' => $slug], $request->validated()));

        return redirect()->route('artist.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function show(Artist $artist)
    {
        return Inertia::render('Artist/Show', [
            'artist' => Artist::withCount('songs')->with('songs')->findOrFail($artist->id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function edit(Artist $artist)
    {
        return Inertia::render('Artist/Edit', [
            'artist' => $artist,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function update(ArtistFormRequest $request, Artist $artist)
    {
        $slug = trim(Str::limit(Str::slug($request->validated()['name']), 50, ''), '-');

        $request
            ->user()
            ->artists()
            ->updateOrCreate(
                array_merge(['slug' => $slug], array_filter($request->validated()))
            );

        return redirect()->route('artist.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artist  $artist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artist $artist)
    {
        $artist->delete();

        return redirect()->route('artist.index');
    }
}
