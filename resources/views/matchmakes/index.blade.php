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
            <h4 class="card-title">{{ $matchmake->teamname }}</h4>
                <h5 class="card-text">{{ $matchmake->area }}</h5>
                <img class="pg-img" src="{{ asset('public/storage/') }}/{{ $matchmake->id }}/{{ $matchmake->image }}">
        <div class="btn-show" style="height: 36.4px;">
            <a href="matchmakes/{{ $matchmake->id }}" class="btn btn-outline-primary">Show</a>
        </div>
        </div>    
@endforeach

@endsection

</main>