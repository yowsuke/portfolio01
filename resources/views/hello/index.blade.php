@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <table>
    @foreach($data as $item)
    <tr>
        <th>{{$item['name']}}</th>
        <td>{{$item['mail']}}</td>
    </tr>
    @endforeach
    </table>
@endsection

    <p>Controller value<br>'message' = {{$message}}</p>
    <p>ViewComposer value<br>'view_message' = {{$view_message}}</p>
@endsection

@section('footer')
copyright 2020 tuyano.accordion
@endsection