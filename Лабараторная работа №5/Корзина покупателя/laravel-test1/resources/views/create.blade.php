@extends('layout')
@section('content')
<h1>Add New Product</h1>
<hr>
<form action="/create" method="post">
{{ csrf_field() }}
    <div class="form-group">
        <label for="title">Product name</label>
        <input type="text" class="form-control" id="ProductName"  name="name">
    </div>
    <div class="form-group">
        <label for="description">Product description</label>
        <input type="text" class="form-control" id="ProductDescription" name="description">
    </div>
    <div class="form-group">
        <label for="description">Product photo link</label>
        <input type="text" class="form-control" id="ProductPhoto" name="photo">
    </div>
    <div class="form-group">
        <label for="description">Product price</label>
        <input type="text" class="form-control" id="ProductPrice" name="price">
    </div>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection