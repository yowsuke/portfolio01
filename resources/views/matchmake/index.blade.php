@extends('layouts.layouts')

@section('title', 'Matchmake')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

    <h1>Matchmake</h1>

    @foreach($matchmake as $matchmake)
        <a href="/matchmake/{{ $matchmake->id }}">{{ $matchmake->title }}</a>
        <a href="/matchmake/{{ $matchmake->id }}/edit">Edit</a>

        <form action="/matchmake/{{ $matchmake->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit">Delete</button>
        </form>
    @endforeach

    <a href="/matchmake/create">New Matchmake</a>
    
@endsection