<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Playground;
use App\Post;
use App\Http\Requests\PlaygroundRequest;
use Illuminate\Support\Facades\Auth;


class PlaygroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playgrounds = Playground::all();
        return view('playgrounds.index', compact('playgrounds'));
    }

        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('playgrounds.create');
    }

/**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required',
        'pref' => 'required',
        'area' => 'required',
        'tel' => 'required',
        'url' => 'required',
        'open' => 'required',
        'fee' => 'required',
        'parking' => 'required',
        ]);
        $playground = new Playground();
        $playground->name = $request->input('name');
        $playground->pref = $request->input('pref');
        $playground->area = $request->input('area');
        $playground->tel = $request->input('tel');
        $playground->url = $request->input('url');
        $playground->open = $request->input('open');
        $playground->fee = $request->input('fee');
        $playground->parking = $request->input('parking');
        $playground->save();

        return redirect()->route('playgrounds.show', ['id' => $playground->id])->with('message', 'Playground was successfully created.');
    }

/**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Playground $playground)
    {
        return view('playgrounds.show', compact('playground'));
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Playground $playground)
    {
        return view('playgrounds.edit', compact('playground'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playground $playground)
    {
        $request->validate([
        'name' => 'required',
        'pref' => 'required',
        'area' => 'required',
        'tel' => 'required',
        'url' => 'required',
        'open' => 'required',
        'fee' => 'required',
        'parking' => 'required',
        ]);
        $playground->title = $request->input('name');
        $playground->content = $request->input('pref');
        $playground->title = $request->input('area');
        $playground->content = $request->input('tel');
        $playground->title = $request->input('url');
        $playground->content = $request->input('open');
        $playground->title = $request->input('fee');
        $playground->content = $request->input('parking');
        $playground->save();

        return redirect()->route('playgrounds.show', ['id' => $playground->id])->with('message', 'Playground was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playground $playground)
    {
        $playground->delete();
        
        return redirect()->route('playgrounds.index');
    }
}
