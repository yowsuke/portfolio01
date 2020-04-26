@extends('layouts.layouts')

@section('title', 'PLAYGRUND MATCHMAKE')

@section('content')
    @if (session('message'))
        {{ session('message') }}
    @endif
@endsection

  <!-- landingpageページ -->
<div class="landing">
  <div class="home-wrap">
      <div class="home-inner" >
        <img src="img/bluesky.png">
      </div>
  </div>
</div>

<div class="caption text-center">
  <h1>Welcome to<br>PLAYGROUND MATCHMAKE.</h1>
  <h3>バスケットボールマッチングサイト</h3>
  <a class="btn btn-outline-light btn-lg" href="{{url('playground')}}">Get Started</a>
</div>

<!-- introductionページ -->
<div id="introduction" class="offset"></div>
  <div class="col-12">
    <h2 class="heading">バスケットボールの対戦チームを探せる<br>マッチングサイトです</h2>
    <h3>PLAYGROUND MATCHMAKE.の特徴</h3>
  </div>

  <div class="card-deck">
    <div class="card" style="col-sm-6 col-md-4">
      <img class="card-img-top" src="img/noimage.png" alt="カード1の画像">
      <div class="card-body">
        <h4 class="card-title">PLAYGROUNDを探す</h4>
        <p class="card-text">自分が住むエリアのコートを検索可能。公園、体育館…自分のスタイルに合うコートを探そう。バスケを通じて新しい仲間とつながろう。</p>
      </div>
    </div>

    <div class="card" style="col-sm-6 col-md-4">
      <img class="card-img-top" src="img/noimage.png" alt="カード1の画像">
      <div class="card-body">
        <h4 class="card-title">PLAYGROUNDを紹介</h4>
        <p class="card-text">みなさんがバスケをしているコートをサイトで紹介しよう。一人でプレーするよりゲームした方が楽しい。紹介情報はお問い合わせにて絶賛受付中。</p>
      </div>
    </div>

    <div class="card" style="col-sm-6 col-md-4">
      <img class="card-img-top" src="img/noimage.png" alt="カード1の画像">
      <div class="card-body">
        <h4 class="card-title">MATCHMAKEを実現</h4>
        <p class="card-text">対戦相手を検索、募集することが可能。他チームとゲームする機会を創ろう。複数チーム参加でトーナメントも実現可能。</p>
      </div>
    </div>

    <div class="card" style="col-sm-6 col-md-4">
      <img class="card-img-top" src="img/noimage.png" alt="カード1の画像">
      <div class="card-body">
        <h4 class="card-title">安心のカテゴリー選択</h4>
        <p class="card-text">チーム登録にはMIX、女子、over30といったカテゴリーを選択可能。スキルレベルを選択し、安心してマッチメイクができる。</p>
      </div>
    </div>

  </div>


<!-- playgroundページ -->
<div id="playground" class="offset"></div>
  <div class="col-12">
    <h2 class="heading">PLAYGROUND</h2>
    <h3>プレイグラウンドを検索して、新しい仲間とプレーしよう！</h3>
    <a class="btn btn-outline-dark btn-lg" href="{{url('playground')}}">Get Started</a>
  </div>

  <div class="card-deck">
              <div class="row">

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
        

<!-- matchmakeページ -->
<div id="matchmake" class="offset">
  <div class="col-12">
    <h2 class="heading">match make</h2>
    <h3>対戦相手を募集して、マッチメイクを実現しよう！</h3>
    <a class="btn btn-outline-dark btn-lg" href="{{url('matchmake')}}">Get Started</a>
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
            <h5 class="card-title">family's</h5>
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

<!-- signupページ -->
<div id="signup" class="offset">
</div>

<!-- loginページ -->
<div id="login" class="offset">
  
</div>


</body>
</html>


