<?php

namespace App\Http\Controllers;

use App\Song;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $url = 'http://newsapi.org/v2/top-headlines?country=ng&apikey=' . env('NEWSAPIKEY');
        $getdata = file_get_contents($url);
        $decodeData = json_decode($getdata, true);
        foreach ($decodeData['articles'] as $newsData) {
            echo 'Author:' . ($newsData['author']) . '<br><br><br>';
            echo 'Title:' . ($newsData['title']) . '<br><br><br>';
            echo 'Content:' . ($newsData['content']) . '<br><br><br>';
        }
        // return view('news.index')->with(['news' => $decodeData, 'layout' => 'news.index',])
        //     ->with('song', Song::take(1)->get());
        // print_r($decodeData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        //
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