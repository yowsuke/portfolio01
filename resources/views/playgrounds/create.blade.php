@extends('layouts.layouts')

@section('title', 'PLAYGROUND')

@section('content')

<h1>New Post</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ url('/playgrounds/')}}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="name">名称</label>
        <input type="text" class="form-control" name="name" value="{{old('name')}}">
    </div>

    <div class="form-group">
        <label for="area">エリア</label>
        <input type="text" class="form-control" name="pref" value="{{old('pref')}}">
    </div>

    <div class="form-group">
        <label for="address">住所</label>
        <textarea class="form-control" name="area">{{old('area')}}</textarea>
    </div>

    <div class="form-group">
        <label for="tel">電話番号</label>
        <input type="text" class="form-control" name="tel" value="{{old('tel')}}">
    </div>

    <div class="form-group">
        <label for="url">WEB SITE</label>
        <input type="text" class="form-control" name="url" value="{{old('url')}}">
    </div>

    <div class="form-group">
        <label for="open">利用時間</label>
        <textarea class="form-control" name="open">{{old('open')}}</textarea>
    </div>

    <div class="form-group">
        <label for="fee">利用料金</label>
        <textarea class="form-control" name="fee">{{old('fee')}}</textarea>
    </div>

    <div class="form-group">
        <label for="Parking">駐車場</label>
        <textarea class="form-control" name="parking">{{old('parking')}}</textarea>
    </div>

    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="{{ url('playgrounds') }}">Back</a>

@endsection