<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::get();
        return view('products.list', ['products' => $products]);
    }

    public function new(){
        return view('products.form');
    }

    public function add(Request $request){
        $product = new Product();
        $product->create($request->all());
        return Redirect::to ('/products');
    }

    public function edit($id){
        $product = Product::findOrFail($id);
        return view('products.form', ['product'=>$product]);
    }

    public function update(Request $request, $id){
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return Redirect::to('/products');
    }

    public function delete($id){
        $product = Product::findOrFail($id);
        $product->delete();
        return Redirect::to('/products');
    }

}
