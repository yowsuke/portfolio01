@extends('layouts.layouts')

@section('title', 'MATCHMAKE')

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

<form method="POST" action="{{ url('/matchmakes/')}}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">代表者名</label>
        <input type="text" class="form-control" name="name" value="{{old('name')}}">
    </div>

    <div class="form-group">
        <label for="teamname">チーム名</label>
        <input type="text" class="form-control" name="teamname" value="{{old('teamname')}}">
    </div>

    <div class="form-group">
        <label for="area">活動エリア</label>
        <input type="text" class="form-control" name="area" value="{{old('area')}}">
    </div>

    <div class="form-group">
        <label for="category">カテゴリー</label>
        <input type="text" class="form-control" name="category" value="{{old('category')}}">
    </div>

    <div class="form-group">
        <label for="aeg">平均年齢</label>
        <input type="text" class="form-control" name="age" value="{{old('age')}}">
    </div>

    <div class="form-group">
        <label for="introduce">チーム紹介</label>
        <textarea class="form-control" name="introduce">{{old('introduce')}}</textarea>
    </div>

    <div class="form-group">
        <label for="email">メールアドレス</label>
        <input type="text" class="form-control" name="email" value="{{old('email')}}">
    </div>

    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="{{ url('matchmakes') }}" class="btn btn-outline-primary">Back</a>

@endsection