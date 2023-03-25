@extends('layouts.navbar')
@section('title')
Update
@endsection
@section('contenu')
   
<form action="{{url('updateproduct',[$product->id])}}" method="POST" class="form-horizontal">
    @csrf
    @method("PUT")
    <div class="form-group">
        <label>Product </label>
        <input type="text" name="product_name" value="{{$product->product_name}}" placeholder="Product Name" class="form-control">
    </div>
    <div class="form-group">
        <label>Product Price</label>
        <input type="number" value="{{$product->product_price}}"name="product_price" placeholder="Product Price" class="form-control">
    </div>
    <div class="form-group">
        <label>Product description</label>
        <textarea class="form-control" name="product_description" cols="30" rows="10">{{$product->product_description}}
        </textarea>
    </div>
    <input type="submit" value="Update Product" class="btn btn-primary">
  </form>
        
       

  
@endsection