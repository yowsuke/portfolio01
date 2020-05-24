<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Matchmake;
use App\Http\Requests\MatchmakeRequest;
use Illuminate\Support\Facades\Auth;

class MatchmakeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matchmakes = Matchmake::all();
        return view('matchmakes.index', compact('matchmakes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('matchmakes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Matchmake $matchmake)
    {
        $request->validate([
            'name' => 'required',
            'teamname' => 'required',
            'area' => 'required',
            // 'category' => 'required',
            // 'age' => 'required',
            // 'introduce' => 'required',
            // 'email' => 'required',
        ]);

        // $matchmake = new Matchmake();
        // $matchmake->name = $request->input('name');
        // $matchmake->teamname = $request->input('teamname');
        // $matchmake->area = $request->input('area');
        // $matchmake->category = $request->input('category');
        // $matchmake->age = $request->input('age');
        // $matchmake->introduce = $request->input('introduce');
        // $matchmake->email = $request->input('email');
        // $matchmake->save();

        //ファイル名を取得
        $filename = $request->file('image')->getClientOriginalName();
        // 配列のimageの値を書き換える
        $storedata =  array_replace($request->all(), array('image' => $filename));
        // $matchmake->save();
        $matchmake->fill($storedata)->save();
        // ファイルの保存
        $request->file('image')->storeAs('public/'.$matchmake->id.'/', $filename);

        return redirect()->route('matchmakes.show', ['id' => $matchmake->id])->with('message', 'Matchmake was successfully created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Matchmake  $matchmake
     * @return \Illuminate\Http\Response
     */
    public function show(Matchmake $matchmake)
    {
        return view('matchmakes.show', compact('matchmake'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Matchmake  $matchmake
     * @return \Illuminate\Http\Response
     */
    public function edit(Matchmake $matchmake)
    {
        return view('matchmakes.edit', compact('matchmake'));
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
        $request->validate([
            'name' => 'required',
            'teamname' => 'required',
        ]);
        
        $matchmake->title = $request->input('name');
        $matchmake->content = $request->input('teamname');
        $matchmake->save();

        return redirect()->route('matchmakes.show', ['id' => $matchmake->id])->with('message', 'Matchmake was successfully updated.');
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

        return redirect()->route('matchmakes.index');
    }
}
