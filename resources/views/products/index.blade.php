@extends('layouts.app')

@section('content')

  <section class="top">
    <div class="container">
      <h1>WASABI & TOMATO</h1>
      <form action="" method="post">
        <input type="text">
        <button type="submit">検索</button>
      </form>
      <a href="{{ route('product.create') }}">商品登録</a>
      <div class="item-wrapper">
      @foreach ($products as $product)
        <div>
        <a href="{{ route('product.show', [$product->id]) }}">
          <img src="" alt="">
          <p>{{ $product->id }}</p>
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

@endsection
