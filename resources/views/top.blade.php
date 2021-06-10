<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>わさびとトマト</title>
</head>
<body>
  <div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
  </div>
  <section class="top">
    <div class="container">
      <h1>
        WASABI
        <br>&
        <br>TOMATO
      </h1>
    </div>
  </section>

  <section class="serves">
    <div class="container">
     <ul class="serves-bunner">
       <li><a href="{{ url('/info/wasabi') }}">ワサビを見る</a></li>
       <li><a href="{{ route('products.index') }}">どっちも見る</a></li>
       <li><a href="{{ url('/info/tomato') }}">トマトを見る</a></li>
     </ul>
    </div>
  </section>

</body>
</html>
