@extends('layouts.layouts')

@section('title', 'Matchmake')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $matchmake->title }}</h5>
            <p class="card-text">{{ $matchmake->content }}</p>

            <div class="d-flex" style="height: 36.4px;">
                <button class="btn btn-outline-primary">Show</button>
                <a href="/matchmake/{{ $matchmake->id }}/edit" class="btn btn-outline-primary">Edit</a>
                <form action="/matchmake/{{ $matchmake->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <button type="submit" class="btn btn-outline-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>

    <a href="/matchmake/{{ $matchmake->id }}/edit">Edit</a> | 
    <a href="/matchmake">Back</a>

@endsection 
    