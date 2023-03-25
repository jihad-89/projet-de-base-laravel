@extends('layouts.navbar')
@section('title')
show
@endsection
@section('contenu')

        <h1>Welcome to page show</h1>
        <hr>
        <h1>{{$produit->product_name}}</h1>
        <h2>${{$produit->product_price}}</h2>
        <p>{{$produit->product_description}}</p>
        <hr>
        <h3>{{$produit->created_at}}</h3>
        <hr>
        
        <a href="{{url('editproduct',[$produit->id])}}" class="btn btn-default"> Edit</a>

        <form action="{{url('deleteproduct', [$produit->id])}}" method="post" class="pull-right">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit"> Supprimer</button>
        </form>
       
        {{--$produits->links()--}}
     

  
@endsection