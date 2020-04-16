@extends('layout')
@section('title', 'Products')
@section('content')

<div class="container products">
 <div class="row">
   @foreach($products as $product)
   <div class="col-xs-18 col-sm-6 col-md-3">
     <div class="thumbnail">
       <img src="{{ $product->photo }}" width="100" height="150">
       <div class="caption">
         <h4>{{ $product->name }}</h4>
         <p>{{ $product->description }}</p>
         <p><strong>Price: </strong> {{ $product->price }}$</p>
         <p class="btn-holder">
          <!--<a href="{{ url('productintobucket/'.$product->id) }}" class="btn btn-warning btn-block text-center" role="button">Добавить в корзину</a>-->
          <form action="{{ url('productintobucket' , $product->id ) }}" method="POST">
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-danger" value="Добавить в корзину"/>
          </form>
          <form action="{{ url('delete/product' , $product->id ) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-danger" value="Удалить продукт"/>
          </form>
        </p>
        </div>
     </div>
   </div>
   @endforeach
 </div>
 <p class="btn-holder"><a href="/create" class="btn btn-warning btn-block text-center" role="button">Создать продукт</a> </p>
 <p class="btn-holder"><a href="/bucket" class="btn btn-warning btn-block text-center" role="button">Поcмотреть корзину</a> </p>
 <p class="btn-holder"><form action="{{ url('dropbucket') }}" method="POST">
            <input type="hidden" name="_method" value="POST">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-danger" value="Очистить корзину"/>
          </form> </p>
</div>
@endsection
