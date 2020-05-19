@extends('layouts.layouts')

@section('title', 'MATCHMAKE')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

<main>

    <div class="matchmake">
        <h1>MATCHMAKE</h1>
    </div>

    <div class="newpost" style="height: 36.4px;">
        <a href="matchmakes/create" class="btn btn-outline-primary">New Post</a>
    </div>

    @foreach($matchmakes as $matchmake)
        <div class="card-body">
            <!-- <h5 class="card-title">{{ $matchmake->name }}</h5> -->
            <h4 class="card-text">{{ $matchmake->teamname }}</h4>
            <img src="img/team2.png" width="320" height="240">
        <div class="btn-show" style="height: 36.4px;">
            <a href="matchmakes/{{ $matchmake->id }}" class="btn btn-outline-primary">Show</a>
        </div>
        </div>    
@endforeach

@endsection

</main>