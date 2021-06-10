@extends('layouts.app')

@section('content')

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

@endsection
