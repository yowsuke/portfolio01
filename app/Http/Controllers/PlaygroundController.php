<?php

namespace App\Http\Controllers;

use App\Playground;
use Illuminate\Http\Request;

class PlaygroundController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playground = playground::all();

        return view('playground.index', compact('playground'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('playground.create');
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
            'title' => 'required',
            'content' => 'required',
            ]);
       
        $playground = new playground();
        $playground->title = $request->input('title');
        $playground->content = $request->input('content');
        $playground->save();

        return redirect()->route('playground.show', ['id' => $playground->id])->with('message', 'Playground was successfully created.');
    }
        public function update(Request $request, Playground $playground)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $playground->title = $request->input('title');
        $playground->content = $request->input('content');
        $playground->save();

        return redirect()->route('playground.show', ['id' => $playground->id])->with('message', 'Playground was successfully updated.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Playground  $playground
     * @return \Illuminate\Http\Response
     */
    public function show(Playground $playground)
    {
        return view('playground.show', compact('playground'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Playground  $playground
     * @return \Illuminate\Http\Response
     */
    public function edit(Playground $playground)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Playground  $playground
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Playground $playground)
    {
        $playground->title = $request->input('title');
        $playground->content = $request->input('content');
        $playground->save();

        return redirect()->route('playground.show', ['id' => $playground->id])->with('message', 'playground was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Playground  $playground
     * @return \Illuminate\Http\Response
     */
    public function destroy(Playground $playground)
    {
        $playground->delete();
        return redirect()->route('playground.index');
    }
}
