<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['products'=>Product::get()]);
    }

    public function create(Request $request)
    {
        return view('product.create');
    }
    public function store(Request $request)
    {
        $product= new Product;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->save();
        return response()->json(["product"=>$product,'status'=>'Product stored']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $id)
    {
        return response()->json(["product"=>$id]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Product $id)
    {
        return view('product.edit',['product'=>$id]);
    }
    public function update(Request $request, Product $id)
    {
        $product=$id;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->save();
        return response()->json(["product"=>$product,'status'=>'Product updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $id)
    {
        $id->delete();
        return response()->json(['status'=>'Product deleted']);
    }
}
