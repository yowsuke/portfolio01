@extends('layouts.layouts')

@section('title', 'Matchmake')

@section('content')

<h1>New Matchmake</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/matchmake">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <<input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{old('title')}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Content</label>
        </div>
        <textarea class="form-control" name="content">{{old('content')}}</textarea>
        </div>
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="/matchmake">Back</a>

@endsection