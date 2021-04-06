<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Requests\SongFormRequest;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Inertia::render('Song/Index', [
            'songs' => Song::with('artist')->latest()->paginate()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SongFormRequest $request)
    {
        $request
                ->user()
                ->songs()
                ->firstOrCreate($request->validated());

        return redirect()->back();
    }
}
