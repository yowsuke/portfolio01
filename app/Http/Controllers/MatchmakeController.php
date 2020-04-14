<?php

namespace App\Http\Controllers;

use App\Matchmake;
use Illuminate\Http\Request;

class MatchmakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matchmake = Matchmake::all();

        return view('matchmake.index', compact('matchmake'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matchmake.create');
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

        $matchmake = new Matchmake();
        $matchmake->title = $request->input('title');
        $matchmake->content = $request->input('content');
        $matchmake->save();

        return redirect()->route('matchmake.show', ['id' => $matchmake->id])->with('message', 'Matchmake was successfully created.');
    }
        public function update(Request $request, Matchmake $matchmake)
    {

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $matchmake->title = $request->input('title');
        $matchmake->content = $request->input('content');
        $matchmake->save();

        return redirect()->route('matchmake.show', ['id' => $matchmake->id])->with('message', 'Matchmake was successfully updated.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Matchmake  $matchmake
     * @return \Illuminate\Http\Response
     */
    public function show(Matchmake $matchmake)
    {
        return view('matchmake.show', compact('matchmake'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Matchmake  $matchmake
     * @return \Illuminate\Http\Response
     */
    public function edit(Matchmake $matchmake)
    {
        return view('matchmake.edit', compact('matchmake'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Matchmake  $matchmake
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Matchmake $matchmake)
    {
        $matchmake->title = $request->input('title');
        $matchmake->content = $request->input('content');
        $matchmake->save();

        return redirect()->route('matchmake.show', ['id' => $matchmake->id])->with('message', 'Matchmake was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Matchmake  $matchmake
     * @return \Illuminate\Http\Response
     */
    public function destroy(Matchmake $matchmake)
    {
        $matchmake->delete();

        return redirect()->route('matchmake.index');
    }
}
