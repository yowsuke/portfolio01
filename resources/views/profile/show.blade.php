<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>{{ $profie->title }}<l/title>
  <linl rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container">
    <h1>{{ $profie->title }}</h1>
    <p>{!! nl2br(e($profile->temaname)) !!}</p>
  </div>


</body>
</html>