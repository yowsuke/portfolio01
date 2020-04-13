<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = Profile::all();

        return view('profile.index', compact('profile'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profile.create');
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
        $profile->name = $request->input('name');
        $profile->teamname = $request->input('teamname');
        $profile->category = $request->input('category');
        $profile->area = 'okinawa';
        $profile->age = $request->input('age');
        $profile->offence = $request->input('offence');
        $profile->deffence = $request->input('deffence');
        $profile->stamina = $request->input('stamina');
        $profile->technic = $request->input('technic');
        $profile->love = $request->input('love');
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
    public function show(Profile $profile)
    {
        return view('profile.show', compact('profile'));
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
