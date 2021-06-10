@extends('layouts.app')

@section('content')

  <section class="top">
    <div class="container">
      <a href="/create">商品登録</a>
      <section class="top">
        <div class="container">
          <h1>WASABI & TOMATO</h1>
          <div class="item-wrapper">
            <p>商品登録画面</p>
          </div>
        </div>
        <p>
          <a href="{{ route('products.index') }}">戻る</a>
        </p>
      </section>

    </div>
  </section>

@endsection
