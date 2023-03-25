@extends('layouts.navbar')
@section('title')
create
@endsection
@section('contenu')
{{--@if(count($errors) > 0)
<div class="aler alert-danger">
    <ul>
        @foreach($errors ->all() as $error)
        <li>{{$error}}</li>
    </ul>
    @endforeach
</div>
@endif   --}}  
<form action="{{url('/saveproduct')}}" method="POST" class="form-horizontal">
    @csrf
    <div class="form-group">
        <label>Product </label>
        <input type="text" name="product_name" placeholder="Product Name" class="form-control">
    </div>
    <div class="form-group">
        <label>Product Price</label>
        <input type="number" name="product_price" placeholder="Product Price" class="form-control">
    </div>
    <div class="form-group">
        <label>Product description</label>
        <textarea class="form-control" name="product_description" cols="30" rows="10"></textarea>
    </div>
    <input type="submit" value="Add Product" class="btn btn-primary">
  </form>
        
       

  
@endsection