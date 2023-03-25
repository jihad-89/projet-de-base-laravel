<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view("page.home");
    }

    public function apropos(){
        return view("page.apropos");
    }

    public function services(){
       // $produits = DB::table("products")->paginate(1);
        $produits= Product::orderBy('product_name','desc')->paginate(2);
        return view("page.service")->with('produits', $produits);
    }
    public function show($id){
       // $produit = DB::table('products')->where('id',$id)->first();
        
       //laravel eloquent
       $produit = Product::find($id);       
       return view('page.show')->with('produit',$produit);
    }
}
