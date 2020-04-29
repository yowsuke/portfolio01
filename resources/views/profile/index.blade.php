<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>PLAYGROUND MATCHMAKE</title>
  <linl rel="stylesheet" href="css/styles.css">
</head>
<body>
  <div class="container">
    <h1>会員登録</h1>
    <ul>
      @foreach($profile as $profile)
        <li>
          <a href="{{ url('/profile', $profile->userid) }}">{{ $profile->userid }}</a>
          <a href="profile/{{ $profile->userid }}/edit">[編集]
        </li>
      @endforeach
      
    </ul>
    
    <a href="profile/create">新規登録</a>
</a>

  </div>


</body>
</html>