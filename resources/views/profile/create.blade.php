@extends('layouts.layouts')

@section('title', 'PLAYGROUND MATCHMAKE')

@section('content')



@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PLAYGROUND</title>
    <!-- CSS読み込み -->
    <!-- jQuery読み込み -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- 都道府県JS読み込み -->
    <script>
        // 都道府県フォーム生成
            $(function() {
            $.getJSON('pref_city.json', function(data) {
                for(var i=0; i<47; i++) {
                var code = i+1;
                code = ('00'+code).slice(-2); // ゼロパディング
                $('#select-pref').append('<option value="'+code+'">'+data[i][code].pref+'</option>');
                }
            });
            });

            // 都道府県メニューに連動した市区町村フォーム生成
            $('#select-pref').on('change', function() {
            $('#select-city option:nth-child(n+2)').remove(); // ※1 市区町村フォームクリア
                var select_pref = ('00'+$('#select-pref option:selected').val()).slice(-2);
                var key = Number(select_pref)-1;
                $.getJSON('pref_city.json', function(data) {
                for(var i=0; i<data[key][select_pref].city.length; i++){
                    $('#select-city').append('<option value="'+data[key][select_pref].city[i].id+'">'+data[key][select_pref].city[i].name+'</option>');
                }
            });
            });
    </script>
    <!-- BootstrapのJS読み込み -->
    <script src="js/bootstrap.min.js"></script>
  </head>



<div class="matchmake">
<h1>新規登録</h1>

<form method="POST" action="{{ url('/profile/')}}">
    {{ csrf_field() }}
    
    <div class="form-group col-md-8">
        <label for="exampleInputName">代表者名</label>
        <input type="text" class="form-control" aria-describedby="name" name="name" value="{{old('title')}}">
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputTeamname">チーム名</label>
        <input type="text" class="form-control" aria-describedby="teamname" name="teamname" value="{{old('title')}}">
    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputCategory">カテゴリー</label>
        <select name="category" class="form-control" id="exampleFormControlCategory">
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
        <label for="exampleInputArea">主な活動地域</label>
        <select id="select-pref"><option value="">都道府県を選択してください</option></select>
        <select id="select-city"><option value="">市区町村を選択してください</option></select>
    </div>



    </div>

    <div class="form-group col-md-8">
        <label for="exampleInputAge">平均年齢</label>
        <select name="age" class="form-control" id="exampleFormControlAge">
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
        <select name="offence" class="form-control" id="exampleFormControlAge">
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
        <select name="deffence" class="form-control" id="exampleFormControlDefence">
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
        <select name="stamina" class="form-control" id="exampleFormControlStamina">
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
        <select name="technic" class="form-control" id="exampleFormControlTechnic">
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
        <select name="rebound" class="form-control" id="exampleFormControlRebound">
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
        <select name="love" class="form-control" id="exampleFormControlLove">
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
        <textarea class="form-control" name="introduce" value="{{old('content')}}"></textarea>
    </div>

    <div class="form-group col-md-8">
        <button type="submit" class="btn btn-outline-primary">新規登録する</button>
    </div>
</form>

    <div class="form-group col-md-8">
        <button type="button" class="btn btn-outline-primary" onclick="history.back()">戻る</button>
    </div> 