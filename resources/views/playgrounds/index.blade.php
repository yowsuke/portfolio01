@extends('layouts.layouts')

@section('title', 'PLAYGROUND')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

<main>

<div class="playground">
    <h1>PLAYGROUND</h1>
</div>

<div class="newpost" style="height: 36.4px;">
    <a href="playgrounds/create" class="btn btn-outline-primary">New Post</a>
</div>

    @foreach($playgrounds as $playground)
        <div class="card-body">
            <h4 class="card-title">{{ $playground->name }}</h4>
            <h5 class="card-text">{{ $playground->pref }}</h5>
            <img class="pg-img" src="{{ asset('public/storage/') }}/{{ $playground->id }}/{{ $playground->image }}">
            <!-- <img src="img/playground3.png" width="320" height="240"> -->
        <div class="btn-show" style="height: 36.4px;">
            <a href="playgrounds/{{ $playground->id }}" class="btn btn-outline-primary">Show</a>   
        </div>
        </div>
@endforeach

@endsection

</main>