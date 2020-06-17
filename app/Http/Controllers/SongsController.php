<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use App\Http\Requests\SongsRequest;
use App\Song;
use Illuminate\Http\Request;

class SongsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show', 'index']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        view()->share('songs', Song::orderBy('created_at', 'desc')->paginate(15));
        return view('songs.index')->with('songs', Song::orderBy('created_at', 'desc')->paginate(15));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {

        return view('songs.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|',
            'about_song' => 'required|string|min:20',
            'about_artist' => 'required|string|min:20',
            'artist' => 'required|string|',
            'category' => 'required|string|',
            'cover_image' => 'required|image',
            'song' => 'required',
        ]);


        $song = new Song();
        $song->name = $request->name;
        $song->artist = $request->artist;
        $song->slug = Str::slug($request->name, '-');
        $song->about_artist = $request->about_artist;
        $song->about_song = $request->about_song;
        $song->category = $request->category;
        $song->posted_by = Auth()->user()->name;
        if ($request->hasFile('cover_image')) {
            $nameOfImage = $request->file('cover_image')->getClientOriginalName();

            $ImageExtension = $request->file('cover_image')->getClientOriginalExtension();
            $nameOfImageOnly = pathinfo($nameOfImage, PATHINFO_FILENAME);
            $imageToDatabase = $nameOfImageOnly . '_' . time() . '.' . $ImageExtension;
            $imagePath = $request->file('cover_image')->storeAs('/public/cover_images', $imageToDatabase);
        }
        if ($request->hasFile('song')) {
            $nameOfsong = $request->file('song')->getClientOriginalName();

            $songExtension = $request->file('song')->getClientOriginalExtension();
            $nameOfsongOnly = pathinfo($nameOfsong, PATHINFO_FILENAME);
            $songToDatabase = $nameOfsongOnly . '_' . time() . '.' . $songExtension;
            $songPath = $request->file('song')->storeAs('/public/songs', $songToDatabase);
        }
        $song->song = $songToDatabase;
        $song->cover_img = $imageToDatabase;

        $song->save();

        $request->session()->flash('success', 'Your song has been successfully  uploaded');
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}