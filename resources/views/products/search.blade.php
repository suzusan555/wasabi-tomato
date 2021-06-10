@extends('layouts.app')

@section('content')

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
          <img src="" alt="">
          <p>{{ $product->id }}</p>
          <p>{{ $product->name }}</p>
          <p>{{ $product->content }}</p>
        </div>
      @endforeach
      </div>
      <div>
        {{$products->links()}}
      </div>

    </div>
  </section>

@endsection
