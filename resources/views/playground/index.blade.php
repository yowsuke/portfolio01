@extends('layouts.layouts')

@section('title', 'Playground')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif


<h1>Playground</h1>

@foreach($playground as $playground)

<!-- playgroundページ -->
<div id="playground" class="offset"></div>
  <div class="col-12">
    <h2 class="heading">PLAYGROUND</h2>
    <h3>プレイグラウンドを検索して、新しい仲間とプレーしよう！</h3>
    <button type="button" class="btn-secondary" onclick="location.href='http://localhost/portfolio01/playground'">GET STARTED</button>
  </div>

  <div class="row text-center">
    <div class="col-sm-6 col-md-4">
      <div class="card h-100">
        <img class="card-img-top" src="img/playground1.png" alt="画像">
        <div class="card-body">
          <h5 class="card-title">七里ガ浜バスケットコート</h5>
          <p class="card-text">神奈川県鎌倉市七里ヶ浜777</p>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4">
      <div class="card h-100">
        <img class="card-img-top" src="img/kawagoesuijyoukouen.png" alt="画像">
        <div class="card-body">
          <h5 class="card-title">川越水上公園</h5>
          <p class="card-text">埼玉県川越市大字池辺880</p>
        </div>
      </div>
    </div>

    <div class="col-sm-6 col-md-4">
      <div class="card h-100">
        <img class="card-img-top" src="img/kanda.png" alt="画像">
        <div class="card-body">
          <h5 class="card-title">神田橋公園</h5>
          <p class="card-text">東京都千代田区神田</p>
        </div>
      </div>
    </div>

    <div class="row text-center">
      <div class="col-sm-6 col-md-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/kagosima.png" alt="画像">
          <div class="card-body">
            <h5 class="card-title">米森病院コート</h5>
            <p class="card-text">鹿児島県鹿児島市与次郎</p>
          </div>
        </div>
      </div>
  
      <div class="col-sm-6 col-md-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/okinawa.png" alt="画像">
          <div class="card-body">
            <h5 class="card-title">アラハビーチ</h5>
            <p class="card-text">沖縄県中頭郡北谷町北谷</p>
          </div>
        </div>
      </div>
  
      <div class="col-sm-6 col-md-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/noimage2.png" alt="画像">
          <div class="card-body">
            <h5 class="card-title">淀川河川公園</h5>
            <p class="card-text">大阪府守口市外島町</p>
          </div>
        </div>
      </div>
@endforeach

<a href="/playground/create">New playground</a> 
@endsection