<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    function addProducts(Request $req)
    {
      $products =new product;
      $products->name=$req->input('name');
      $products->price=$req->input('price');
      $products->quantity=$req->input('quantity');
      $products->description=$req->input('description');
      $products->image=$req->file('image')->store('products');
      $products->save();
      return $products;
    }

    function getProduct()
    {
      return product::all();
    }

    function deleteProduct($id)
    {
      $delete = product::where('id',$id)->delete();
      if($delete){
        $message = "Product Deleted Successfully";
      }else{
        $message = "Somethig went wrong pleasevtry again";        
      }

      return ['response'=>$message];
    }

    function getsignleproduct($id)
    {
      return product::find($id);
    }

    function updateProduct($id,Request $req)
    {
      $object = product::find($id);
     
      $object->name=$req->input('name');
      $object->price=$req->input('price');
      $object->quantity=$req->input('quantity');
      $object->description=$req->input('description');
      if($req->file('image')){
        $object->image=$req->file('image')->store('products');
      }
      $object->save();
        return $object;
    }

    function searchProduct($searcfor)
    {
      return product::where('name','LIKE',"%$searcfor%")->get();
    }

}


