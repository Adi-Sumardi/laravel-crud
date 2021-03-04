<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function home()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        //refactor code 
        // Product::create($request->all());
        Product::create([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        return redirect('/products');
    }

    public function viewProduct()
    {
        $products = Product::all();
        return view('products', compact('products'));
    }

    public function edit($id)
    {
        //refactor untuk mencari 1 data
        // $product = Product::findOrFail($id);
        //filter banyak data menggunakan where
        $product = Product::where('id', $id)->first();
        return view('edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        //untuk mengupdate data refactor code
        // Product::where('id', $id)->update($request->all());
        
        Product::where('id', $id)->update([
            'product_name' => $request->product_name,
            'price' => $request->price,
            'stock' => $request->stock
        ]);

        return redirect('/products');
    }

    public function delete($id)
    {
        Product::destroy($id);
        return back();
    }
}
