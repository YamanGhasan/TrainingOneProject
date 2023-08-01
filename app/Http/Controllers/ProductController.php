<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    { 
        $products = Product::all();

        return view('productList')->with('products', $products);
    }

    public function add()
    {
        return view('addProduct');
    }

    public function delete($id)
{
    $product = Product::findOrFail($id);
    $product->delete();
    return redirect()->route('products.index');
}

public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('editProduct')->with('product', $product);
}




public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);
    $product->name = $request->input('name');
    $product->price = $request->input('price');
    $product->save();

    // Update the 'updated_at' timestamp
    $product->touch();

    return redirect()->route('products.index');
}


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $product = new Product();
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->save();

        return redirect()->route('products.index');
    }
}
