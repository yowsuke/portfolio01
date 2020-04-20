@extends('layouts.layouts')

@section('title', 'Playground')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif
    @endsection
    
<main>
  <div class="container-fluid">
    <div class="left">

      <h2>PLAYGROUND検索</h2>
      <div class="serch">
        <form class="new_facility" id="new_facility" action="/courts" accept-charset="UTF-8" method="get"><input name="utf8" type="hidden" value="&#x2713;" />
        <!--paramsとるためのダミー-->
        <input type="hidden" name="id" id="id" value="0" />
        <!--end-->
        <select class="wi100" name="facility[pref_id]" id="facility_pref_id"><option value="">地域</option>
        <option value="1">東京都</option>
        <option value="2">千葉県</option>
        <option value="3">埼玉県</option>
        <option value="4">神奈川県</option>
        </select>
        <input type="submit" name="commit" value="検索" class="match-color" data-disable-with="検索" />
        </form>
        </div>

        <h2>PLAYGROUND情報</h2>
        <div class="playground">
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
          </div>
        </div>
        </div>

</div>
</div>
</div>
</main>

@section('footer')
@endsection














<!-- playgroundページ
<div id="playground" class="offset"></div>
  <div class="col-12">
    <h2 class="heading">PLAYGROUND</h2>
    <h3>プレイグラウンドを検索して、新しい仲間とプレーしよう！</h3>
    <button type="button" class="btn-secondary" onclick="location.href='http://localhost/portfolio01/playground'">GET STARTED</button>
  </div>




<a href="/playground/create">New playground</a> 


@foreach($playground as $playground)
@endforeach -->