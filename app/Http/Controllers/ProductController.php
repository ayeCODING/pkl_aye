<?php

namespace App\Http\Controllers;


use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    public function index()
    {
        $product = Product::latest()->get();
        return view('product.index', compact('product'));
    }

    public function create()
    {
        $brand = Brand::all();
       
        return view('product.create', compact('brand'));
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'name_product' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'deskription' => 'required',
            'id_brand' => 'required',
        ]);

        $product = new Product();
        $product->name_product = $request->name_product;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->deskription = $request->deskription;
        $product->id_brand = $request->id_brand;

    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    public function edit($id)
    {
        $brand = Brand::all();
        $product = Product::findOrFail($id);
        return view('product.edit', compact('product', 'brand'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name_product' => 'required',
            'stock' => 'required',
            'price' => 'required',
            'deskription' => 'required',
            'id_brand' => 'required',

        ]);

        $product = product::findOrFail($id);
        $product->name_product = $request->name_product;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->deskription = $request->deskription;
        $product->id_brand = $request->id_brand;


        // upload image


        $product->save();
        return redirect()->route('product.index');

    }

    public function destroy($id)
    {
        $product = product::findOrFail($id);
        
        $product->delete();
        return redirect()->route('product.index');

    }
}
