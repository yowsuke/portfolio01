@extends('layouts.layouts')

@section('title', 'PLAYGROUND MATCHMAKE')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

@endsection

    <div class="card">
        <div class="card-body">
            <h5 class="card-text">{{ $profile->name }}</h5>
            <h5 class="card-text">{{ $profile->teamname }}</h5>
            <h5 class="card-text">{{ $profile->category }}</h5>
            <h5 class="card-text">{{ $profile->area }}</h5>
            <h5 class="card-text">{{ $profile->age }}</h5>
            <h5 class="card-text">{{ $profile->offence }}</h5>
            <h5 class="card-text">{{ $profile->deffence }}</h5>
            <h5 class="card-text">{{ $profile->stamina }}</h5>
            <h5 class="card-text">{{ $profile->technic }}</h5>
            <h5 class="card-text">{{ $profile->rebound }}</h5>
            <h5 class="card-text">{{ $profile->love }}</h5>
            <h5 class="card-text">{{ $profile->introduce }}</h5>

            <div class="d-flex" style="height: 36.4px;">
                <button class="btn btn-outline-primary">Show</button>
                <a href="/profile/{{ $profile->id }}/edit" class="btn btn-outline-primary">Edit</a>
                <form action="/profile/{{ $profile->id }}" method="Profile" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </div>

    <a href="create">Edit</a> | 
    <a href="create">Back</a>

