@extends('layouts.helloapp')

@section('title', 'Add')

@section('menubar')
  @parent
  新規作成ページ
@endsection

@section('content')
  <form action="/hello/add" method="POST">
  <table>
    @csrf
    <tr><th>Name:</th><td><input type="text" name="name"></td></tr>
    <tr><th>EMial:</th><td><input type="text" name="email"></td></tr>
    <tr><th>EMial:</th><td><input type="text" name="password"></td></tr>
  </table>
  </form>
@endsection

@section('fotter')
copyright 2020 tuyano.
@endsection