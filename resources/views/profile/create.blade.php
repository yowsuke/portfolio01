@extends('layouts.layouts')

@section('title', 'PLAYGROUND MATCHMAKE')

@section('content')

<h1>New Profile</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/profile">
    {{ csrf_field() }}

    <div class="form-group col-md-8">
        <label for="exampleInputID">ID</label>
        <input type="text" class="form-control" aria-describedby="id" name="title" value="{{old('title')}}">
    </div>
    
    <div class="form-group col-md-8">
        <label for="exampleInputName">代表者名</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{old('title')}}">
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputTeamname">チーム名</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="title" value="{{old('title')}}">
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputCategory">カテゴリー</label>
        <select class="form-control" id="exampleFormControlCategory">
        <option value="mix">ミックス</option>
        <option value="enjoy">エンジョイ</option>
        <option value="over30">オーバー30</option>
        <option value="under18">アンダー18</option>
        <option value="girls">女子</option>
        <option value="college">大学生</option>
        <option value="pro">競技志向</option>
        </select>
    </div>
    
    <div class="form-group col-md-8">
        <label for="exampleInputArea">主な活動地域  都道府県</label>
        <select class="form-control" id="exampleFormControlPref">
        <select id="select-pref"></select>
    </div>


    <div class="form-group col-md-8">
        <label for="exampleInputArea">市区町村</label>
        <select class="form-control" id="exampleFormControlCity">
        <select id="select-city"></select>
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputAge">平均年齢</label>
        <select class="form-control" id="exampleFormControlAge">
        <option value="10">18歳以下</option>
        <option value="early20">20代前半</option>
        <option value="late20">20代後半</option>
        <option value="early30" selected>30代前半</option>
        <option value="late30">30代後半</option>
        <option value="early40">40代前半</option>
        <option value="late40">40代後半</option>
        <option value="early50">50代前半</option>
        <option value="late50">50代後半</option>
        </select>
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">チームバランス  ①オフェンス</label>
        <select class="form-control" id="exampleFormControlAge">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5" selected>5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select>
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">②ディフェンス</label>
        <select class="form-control" id="exampleFormControlDefence">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5" selected>5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select>
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">③スタミナ</label>
        <select class="form-control" id="exampleFormControlStamina">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5" selected>5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select>
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">④テクニック</label>
        <select class="form-control" id="exampleFormControlTechnic">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5" selected>5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select>
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">⑤リバウンド</label>
        <select class="form-control" id="exampleFormControlRebound">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5" selected>5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select>
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">⑥バスケ愛</label>
        <select class="form-control" id="exampleFormControlLove">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5" selected>5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        </select>
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputPassword1">チーム紹介</label>
        <textarea class="form-control" name="content" value="{{old('content')}}"></textarea>
    </div>
    
    <button type="submit" class="btn btn-outline-primary">新規登録する</button>
</form>

<a href="/portfolio01/profile">Back</a>

@endsection
