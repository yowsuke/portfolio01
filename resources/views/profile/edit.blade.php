@extends('layouts.layouts')

@section('title', 'PLAYGROUND MATCHMAKE')

@section('content')

<h1>Editing Profile</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/profile/{{ $profile->id }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ old('title') == '' ? $profile->title : old('title') }}">
    </div>
    <div class="form-group">
    <label for="exampleInputPassword1">Content</label>
    <textarea class="form-control" name="content">{{ old('content') == '' ? $profile->content : old('content') }}</textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="/profile/{{ $profile->id }}">Show</a> | 
<a href="/profile">Back</a>

@endsection