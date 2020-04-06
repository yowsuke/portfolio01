@extends('layouts.layouts')

@section('title', 'PLAYGROUND MATCHMAKE')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

    <h1>profile</h1>

    @foreach($profile as $profile)
        <a href="/profile/{{ $profile->id }}">{{ $profile->title }}</a>
        <a href="/profile/{{ $profile->id }}/edit">Edit</a>

        <form action="/profile/{{ $profile->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit">Delete</button>
        </form>
    @endforeach

    <a href="/profile/create">New profile</a> 
@endsection