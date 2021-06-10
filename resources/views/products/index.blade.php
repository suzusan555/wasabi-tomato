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
      <h1>WASABI & TOMATO</h1>
      <form action="">
        <input type="text">
      </form>
      <a href="/create">商品登録</a>
      <div class="item-wrapper">
      @foreach ($products as $product)
        <div>
        <a href="{{ route('product.show', [$item->id]) }}">
          <img src="" alt="">
          <p>{{ $product->id }}</p>
          <p>{{ $product->title }}</p>
          <p>{{ $product->name }}</p>
          <p>{{ $product->content }}</p>
        </a>
        </div>
      @endforeach
      </div>
      <div>
        {{$products->links()}}
      </div>

    </div>
  </section>

</body>
</html>
