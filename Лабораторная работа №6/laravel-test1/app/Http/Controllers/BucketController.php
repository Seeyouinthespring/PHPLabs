<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Session;

class BucketController extends Controller
{
    public function showBucket(Request $request){
    	$bucket = $request->session()->get('key');
    	$price_sum=0;
    	if ($bucket == null)
    	{
    		return "Корзина пуста";
    	}
    	else
    	{
    		foreach ($bucket as $product) 
    		{
    			$price_sum+=$product->price;
    		}
    		return view('showBucket', ['bucket_products'=>$bucket,'sum'=>$price_sum]);
    	}
    }

    public function addIntoBucket(Request $request, $id){
    	$product = Product::find($id);
    	session()->push('key', $product);
    	return redirect('');
    }
    public function dropBucket(Request $request){
    	$request->session()->flush();
    	return redirect('');
    }
}
