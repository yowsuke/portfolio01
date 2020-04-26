@extends('layouts.layouts')

@section('title', 'Playground')


<main>
  <div class="container-fluid">
      <div class="search">
      <h2>PLAYGROUND検索</h2>
        <form class="new_facility" id="new_facility" action="playground" accept-charset="UTF-8" method="POST">
        {{ csrf_field() }}
        <input name="utf8" type="hidden" value="&#x2713;">
        </input>
        <input type="hidden" name="id" id="id" value="0">
        </input>
        
        <select class="wi100" name="pref" id="pref">
          <option value="">地域</option>
          <option value="1">東京都</option>
          <option value="2">千葉県</option>
          <option value="3">埼玉県</option>
          <option value="4">神奈川県</option>
        </select>
        <input type="submit" name="commit" value="検索" class="match-color" data-disable-with="検索">
        </input>
        </form>
        
      </div>

      <div class="info">
        <h2>PLAYGROUND情報</h2>
          <div class="card-deck">
              <div class="row">
              @foreach ($playground as $item)
              <div class="col-sm-6 col-md-4">
                <a href="/playground/{{ $item->id }}">
                    <div class="p_card">
                      <img class="card-img-top" src="img/playground1.png" alt="画像">
                      <div class="p_card-body">
                        <h4 class="card-title">{{$item->name}}</h4>
                        <p class="card-text">{{$item->area}}</p>
                      </div>
                     </div>
                </a>  
              </div>
              @endforeach

                <div class="col-sm-6 col-md-4">
                  <div class="p_card">
                    <img class="card-img-top" src="img/playground1.png" alt="画像">
                    <div class="p_card-body">
                      <h4 class="card-title">七里ガ浜バスケコート</h4>
                      <p class="card-text">神奈川県鎌倉市七里ヶ浜777</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4">
                  <div class="p_card">
                    <img class="card-img-top" src="img/kawagoesuijyoukouen.png" alt="画像">
                    <div class="p_card-body">
                      <h4 class="card-title">川越水上公園</h4>
                      <p class="card-text">埼玉県川越市大字池辺880</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4">  
                  <div class="p_card">
                    <img class="card-img-top" src="img/kagosima.png" alt="画像">
                    <div class="p_card-body">
                      <h4 class="card-title">米森病院コート</h4>
                      <p class="card-text">鹿児島県鹿児島市与次郎</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4">  
                  <div class="p_card">
                    <img class="card-img-top" src="img/okinawa.png" alt="画像">
                    <div class="p_card-body">
                      <h4 class="card-title">アラハビーチ</h4>
                      <p class="card-text">沖縄県中頭郡北谷町北谷</p>
                    </div>
                  </div>
                </div>  

                <div class="col-sm-6 col-md-4">
                  <div class="p_card">
                    <img class="card-img-top" src="img/kanda.png" alt="画像">
                    <div class="p_card-body">
                      <h4 class="card-title">神田橋公園</h4>
                      <p class="card-text">東京都千代田区神田</p>
                    </div>
                  </div>
                </div>

                <div class="col-sm-6 col-md-4">
                  <div class="p_card">
                    <img class="card-img-top" src="img/noimage2.png" alt="画像">
                    <div class="p_card-body">
                      <h4 class="card-title">淀川河川公園</h4>
                      <p class="card-text">大阪府守口市外島町</p>
                    </div>
                  </div>  
                </div>  
            </div>    
          </div>      
        </div>
  </div>
        
</main>

<!-- @if (session('message'))
    {{ session('message') }}
@endif -->

@section('content')
  <table>
    <tr><th>PLAYGROUND</th><th>pref</th><th>area</th></tr>
    @foreach ($playground as $item)
      <tr>
          <td>{{$item->name}}</td>
          <td>{{$item->pref}}</td>
          <td>{{$item->area}}</td>
      </tr>
    @endforeach
  </table>
@endsection