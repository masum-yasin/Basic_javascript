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
        $product = Product::get();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name'=>'required',
            'descripation'=>'required',
            'price'=>'required',
        ]);
        if($validate){
            $data=[
                'name'=>$request->name,
                'descripation'=>$request->descripation,
                'price'=>$request->price
            ];
            $model = new Product();
            if($model->insert($data));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, $id)
    {
        $product = Product::find($id);
        return view('product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product,$id)
    {
        $product  = Product::find($id);
        $validate = $request->validate([
            'name'=>'required',
            'descripation'=>'required',
            'price'=>'required',
        ]);
        if($validate){
            $data=[
                'name'=>$request->name,
                'descripation'=>$request->descripation,
                'price'=>$request->price
            ];
           $product->update($data);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product,$id)
    {
        $model = Product::find($id);
        if($model->delete());
    }
}
