@extends('layouts.layouts')

@section('title', 'PLAYGROUND')

@section('content')

<h1>登録内容の修正</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ url('playground') }}/{{ $playground->id }}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
            <label for="exampleInputEmail1">名称</label>
            <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{ old('name') == '' ? $playground->name : old('title') }}">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">エリア</label>
            <textarea class="form-control" name="pref">{{ old('pref') == '' ? $playground->pref : old('pref') }}</textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="{{ url('playgrounds') }}">Back</a>

@endsection