<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	return view('products.index', ['nombreVariable' => $products]);
    }

    public function edit($id)
    {
    	$categories = Category::all();
    	$productModel = Product::find($id);
    	return view('products.edit', ['categories' => $categories, 'productModel' => $productModel]);
    }

    public function update($id, Request $request)
    {
    	$productModel = Product::find($id);
    	$productModel->update($request->all());
    	return 'ok';

    	//Otra forma de update
    	//$productModel->name = $request->input('name'); //$_POST['name'];
    	//$productModel->cost = $request->input('cost'); //$_POST['cost'];
    	//...
    	//$productModel->save();
    }
}
