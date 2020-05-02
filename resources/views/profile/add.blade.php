@extends('layouts.layouts')

@section('title', 'PLAYGRUND MATCHMAKE')

@section('content')
  <form action="profile/add" method="POST">
  <table>
    @csrf
    <tr><th>ID:</th><td><input type="int" name="id"></td></tr>
    <tr><th>Name:</th><td><input type="text" name="name"></td></tr>
    <tr><th>EMial:</th><td><input type="text" name="email"></td></tr>
  </table>
  </form>
@endsection

@component('components.footer')
@endcomponent