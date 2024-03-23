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
        $products = Product::get();
        return view('Product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:products',
        ]);
        if($validate){
            $data = [
                'name'=>$request->name,
                'descripation'=>$request->descripation,
                'price'=>$request->price
            ];
            if(product::insert($data));

          
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
    public function edit(Product $product,$id)
    {
        $products = Product::find($id);
        return view('Product.edit',compact('products'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $products = Product::find($id);
        $validate = $request->validate([
             'name' => 'required|unique:products,name,'.$products->id,
        ]);
        if($validate){
            $data = [
                'name'=>$request->name,
                'descripation'=>$request->descripation,
                'price'=>$request->price
            ];
           $products->update($data);
        //    return redirect()->back();
          
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product,$id)
    {
        $product = Product::find($id);
        if($product->delete());
        return redirect()->back();
    }
}
