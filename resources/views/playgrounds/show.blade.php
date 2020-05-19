@extends('layouts.layouts')

@section('title', 'PLAYGROUND')

<div class="playground-show">
    <h1>{{ $playground->name }}</h1>

    <table class="pg-td">
        <!-- <tr><td>名称</td><td>{{ $playground->name }}</td></tr> -->
        <tr><th>エリア</th><td>{{ $playground->pref }}</td></tr> 
        <tr><th>住所</th><td>{{ $playground->area }}</td></tr>
        <tr><th>電話番号</th><td>{{ $playground->tel }}</td></tr> 
        <tr><th>参考URL</th><td>{{ $playground->url }}</td></tr>
        <tr><th>利用時間</th><td>{{ $playground->open }}</td></tr> 
        <tr><th>利用料金</th><td>{{ $playground->fee }}</td></tr>
        <tr><th>駐車場</th><td>{{ $playground->parking }}</td></tr>
    </table>
</div>

<a href="{{ url('playgrounds') }}" class="btn btn-outline-primary">Back</a>