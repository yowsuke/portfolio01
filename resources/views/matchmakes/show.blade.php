@extends('layouts.layouts')

@section('title', 'MATCMAKE')

<div class="matchmake-show">
<h1>{{ $matchmake->teamname }}</h1>

<table class="mm-td">
    <tr><th>代表者名</th><td>{{ $matchmake->name }}</td></tr>
    <!-- <tr><th>チーム名</td><td>{{ $matchmake->pref }}</td></tr>  -->
    <tr><th>活動エリア</th><td>{{ $matchmake->area }}</td></tr>
    <tr><th>カテゴリー</th><td>{{ $matchmake->category }}</td></tr> 
    <tr><th>平均年齢</th><td>{{ $matchmake->age }}</td></tr>
    <tr><th>チーム紹介</th><td>{{ $matchmake->introduce }}</td></tr>
    <tr><th>メールアドレス</th><td>{{ $matchmake->email }}</td></tr>
</table>
    <a href="{{ url('matchmakes') }}" class="btn btn-outline-primary">Back</a>