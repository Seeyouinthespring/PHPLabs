@extends('layout')
@section('title', 'Bucket')
@section('content')

<h1>КОРЗИНА</h1>
<div class="container products">
 <div class="row">
  <div class="col-xs-18 col-sm-6 col-md-3">
     <div class="thumbnail">
      @forelse ($bucket_products as $p)
      <img src="{{ $p->photo }}" width="100" height="150">
      <div class="caption">
        <h4>{{ $p->name }}</h4>
        <p>{{ $p->description }}</p>
        <p>{{ $p->price }}</p>
      </div>
      @empty
        <p>Корзина пуста</p>
      @endforelse
    </div>
    <h4>Суммарная стоимость товаров в корзине = {{ $sum }}$</h4>
  </div>
</div>
<p class="btn-holder">
  <form action="{{ url('dropbucket') }}" method="POST">
    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" class="btn btn-danger" value="Очистить корзину"/>
  </form> 
</p>
</div>

@endsection