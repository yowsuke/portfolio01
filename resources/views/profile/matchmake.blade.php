@extends('layouts.layouts')

@section('title', 'MATCHMAKE')

<div id="matchmake" class="offset">
  <div class="col-12">
    <h2 class="heading">match make</h2>
    <h3>対戦相手を募集して、マッチメイクを実現しよう！</h3>
    <a class="btn btn-outline-dark btn-lg" href="{{ url('/pfofile/create') }}">Get Started</a>
  </div>
  
  <div class="row text-center">

      <div class="col-sm-6 col-md-2">
        <div class="card h-100">
          <img class="card-img-top" src="img/team1.png" alt="画像">
          <div class="card-body">
            <h5 class="card-title">HEMBAY ALL-STARS</h5>
            <p class="card-text">エンジョイ</p>
          </div>
        </div>
      </div>
  
      <div class="col-sm-6 col-md-2">
        <div class="card h-100">
          <img class="card-img-top" src="img/noimage.png" alt="画像">
          <div class="card-body">
            <h5 class="card-title">狛江LAKERS</h5>
            <p class="card-text">over30</p>
          </div>
        </div>
      </div>
  
      <div class="col-sm-6 col-md-2">
        <div class="card h-100">
          <img class="card-img-top" src="img/team4.png" alt="画像">
          <div class="card-body">
            <h5 class="card-title">SAGETON SERPENTS</h5>
            <p class="card-text">女子</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-2">
        <div class="card h-100">
          <img class="card-img-top" src="img/team2.png" alt="画像">
          <div class="card-body">
            <h5 class="card-title">代々木KINGS</h5>
            <p class="card-text">MIX</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-2">
        <div class="card h-100">
          <img class="card-img-top" src="img/team3.png" alt="画像">
          <div class="card-body">
            <h5 class="card-title">RUPINO ROTALS</h5>
            <p class="card-text">over30</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-2">
        <div class="card h-100">
          <img class="card-img-top" src="img/team5.png" alt="画像">
          <div class="card-body">
            <h5 class="card-title">チームパタゴニア</h5>
            <p class="card-text">誰でもOK</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-2">
        <div class="card h-100">
          <img class="card-img-top" src="img/superstars.png" alt="画像">
          <div class="card-body">
            <h5 class="card-title">SURER STARS </h5>
            <p class="card-text">女子</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-2">
        <div class="card h-100">
          <img class="card-img-top" src="img/noimage.png" alt="画像">
          <div class="card-body">
            <h5 class="card-title">Beers</h5>
            <p class="card-text">社会人</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-2">
        <div class="card h-100">
          <img class="card-img-top" src="img/osanzu.png" alt="画像">
          <div class="card-body">
            <h5 class="card-title">チームおっさんず</h5>
            <p class="card-text">over30</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-2">
        <div class="card h-100">
          <img class="card-img-top" src="img/noimage.png" alt="画像">
          <div class="card-body">
            <h5 class="card-title">鶴ヶ丘OB</h5>
            <p class="card-text">社会人</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-2">
        <div class="card h-100">
          <img class="card-img-top" src="img/noimage.png" alt="画像">
          <div class="card-body">
            <h5 class="card-title">familys</h5>
            <p class="card-text">MIX</p>
          </div>
        </div>
      </div>

      <div class="col-sm-6 col-md-2">
        <div class="card h-100">
          <img class="card-img-top" src="img/noimage.png" alt="画像">
          <div class="card-body">
            <h5 class="card-title">茨城ハンバーガーズ</h5>
            <p class="card-text">大学生</p>
          </div>
        </div>
      </div>
  </div>
</div>
