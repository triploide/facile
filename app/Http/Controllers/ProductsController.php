<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Property;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
    	$products = Product::all();
    	return view('products.index', ['nombreVariable' => $products]);
    }

    public function show($slug)
    {
        $productModel = Product::where('slug', $slug)->first();
        return view('products.show', compact('productModel'));
    }

    public function edit($id)
    {
    	$properties = Property::all();
    	$categories = Category::all();
    	$productModel = Product::find($id);
    	return view('products.edit', ['categories' => $categories, 'productModel' => $productModel, 'properties' => $properties]);
    }

    public function update($id, Request $request)
    {
    	$productModel = Product::find($id);
    	$productModel->update($request->all());
    	$productModel->properties()->sync($request->input('properties'));
    	return redirect('products');

    	//Otra forma de update
    	//$productModel->name = $request->input('name'); //$_POST['name'];
    	//$productModel->cost = $request->input('cost'); //$_POST['cost'];
    	//...
    	//$productModel->save();
    }
}
