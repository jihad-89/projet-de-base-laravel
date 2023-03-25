<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function create(){
      return view('page.create');
     }

     // Sauvegarde de données avec le formulaire dans database
     public function saveproduct(Request $request){
            // validation

           // $this-> validate($request,[
           //     'product_name'=> 'required',
            //    'product_price'=> 'required',
         //       'product_description '=> 'required',
          //  ]);


                //1 Methode laravel eloquent
      //  $product = new Product();
       // $product-> product_name = $request->input('product_name');
        //$product-> product_price = $request->input('product_price');
       // $product-> product_description =$request->input('product_description') ;
        // $product->save();

//2 Methode Laravel Builder.vous allez directement interagir entre les controller et votre table et ce qui se trouve dans la
//base de données.

        $data =array();
        $data['product_name']= $request->input('product_name');
        $data['product_price']= $request->input('product_price');
        $data['product_description']= $request->input('product_description') ;
        DB::table('products')->insert($data);
        return redirect('/service')->with('status','le produit '.$request->
        input('product_name').' a ete ajoute avec succes !!');

     }

     public function deleteproduct($id){

        // en utilisant Laravel Web Builder 
        //$product=Product::find($id);
       // $product->delete();

       //en utilisant Laravel éloquent.
       DB::table('products')->where("id",$id)->delete();

        return redirect('/service')->with('status','Votre produit a ete supprime avec succes');
     }

     public function editproduct($id){
        
        // Methode laravel eloquent

        $product= Product::find($id);
        return view('page.editproduct')->with("product",$product);

     }

     public function updateproduct(Request $request,$id){

        
        $product =Product::find($id);
    
        $product-> product_name = $request->input('product_name');
        $product-> product_price = $request->input('product_price');
       $product-> product_description =$request->input('product_description') ;
      $product->update();

      //$data =array();
      //$data['product_name']= $request->input('product_name');
      //$data['product_price']= $request->input('product_price');
      //$data['product_description']= $request->input('product_description') ;
      //DB::table('products')->where('id',$id)->update($data);

      return redirect('/service')->with('status','le produit a ete modifie avec succes  !!');

     }
 }

