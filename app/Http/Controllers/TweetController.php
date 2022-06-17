<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use App\Http\Requests\StoreTweetRequest;
use App\Http\Requests\UpdateTweetRequest;

class TweetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
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
     * @param \App\Http\Requests\StoreTweetRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTweetRequest $request)
    {
        Tweet::create([
            "user_id" => auth()->id(),
            "body" => $request->body,
        ]);
        return redirect()->back()->with(["succss" => "Tweet created succssfully"]);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Tweet $tweet
     * @return \Illuminate\Http\Response
     */
    public function show(Tweet $tweet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tweet $tweet
     * @return \Illuminate\Http\Response
     */
    public function edit(Tweet $tweet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateTweetRequest $request
     * @param \App\Models\Tweet $tweet
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTweetRequest $request, Tweet $tweet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tweet $tweet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tweet $tweet)
    {
        //
    }
}
