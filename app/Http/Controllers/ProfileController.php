<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Person;
use Illuminate\Support\Facades\View;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('profile.index');
    }

    public function playground(Request $request)
    {   
        return view('profile.playground');
    }

    public function matchmake(Request $request)
    {   
        return view('profile.matchmake');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('index.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    
    {
        $profile = new Profile(); 
        $profile->userid = Auth::userid();
        $profile->name = $request->input('name');
        $profile->teamname = $request->input('teamname');
        $profile->category = $request->input('category');
        $profile->area = $request->input('area');
        $profile->age = $request->input('age');
        $profile->introduce = $request->input('introduce');
        $profile->save();

        return redirect(route('profile.show', $profile->id))->with('message', '新規登録完了しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($userid)
    {
        $profile = Profile::findOrFail($userid);
        return view('profile.show')->with('profile', '$profile');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        $profile->title = $request->input('title');
        $profile->content = $request->input('content');
        $profile->save();

        return redirect()->route('profile.show', ['id' => $profile->id])->with('message', 'Profile was successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        $profile->delete();

        return redirect()->route('profile.index');
    }
}
