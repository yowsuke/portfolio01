<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" media="all">
  <title>PLAYGROUND MATCHMAKE.</title>
</head>

<body>

<header>
<a class="header" href="profile">PLAYGROUND<br>MATCHMAKE.</a>
  <nav class="navbar">
  <button class="navbar-toggler" type="button" data-toggle="collapse">
    <!-- ハンバーガーメニュー必要 -->
  <ul>
      <li><a href="#">ABOUT</a></li>
      <li><a href="playgrounds">PLAYGROUND</a></li>
      <li><a href="#">MATCHMAKE</a></li>
      <li><a href="#">CONTACT</a></li>
  </ul>
  </nav>
</header>

<main>
  <div class="top">
    <div class="home-wrap">
      <div class="home-inner">
      <img src="img/playground3.png" width="100%" height="100%">
      </div>
    </div>
  </div>
    <!-- <img src="img/playground3.png" class="img_main"> -->
  <div class="caption">
    <h1>LET'S PLAY BASKETBALL !</h1>
    <a class="btn btn-outline-light btn-lg" href="playgrounds">GET STARTED</a>
  </div>
</main>

</body>
</html>
