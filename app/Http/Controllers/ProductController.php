<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // ✅ Fetch all products
   public function product_list()
{
    $products = Product::all(); // get all products
    return view('product_list', compact('products'));
}
//First we created variable and assined all data of any model
//Then We Have to view over blade file in the written prodect list is my HTML blade file and pass the varible in the view

    // ✅ Fetch a single product by ID
    // public function show($id)
    // {
    //     $product = Product::find($id);

    //     if (!$product) {
    //         return response()->json(['message' => 'Product not found'], 404);
    //     }

    //     return response()->json($product);
    // }
}