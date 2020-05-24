<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
       $products = Product::all();

       return view('products', compact('products'));
   }

   public function create()
   {
   		return view('create');
   }

   public function store(Request $request)
   {
    $request->validate([
        'name' => 'required',
        'description' => 'required',
        'price' => 'required',
    ]);   
    	$product = Product::create(array(
    		'name' => $request->name,
    		'description' => $request->description,
    		'photo'=>$request->photo,
    		'price'=>$request->price));
    	return redirect('');
    }

    public function destroy(Request $request, $id)
    {
    	$product = Product::find($id);
    	$product->delete();
    	return redirect('');
    }
}
