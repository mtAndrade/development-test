<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    public function create(){
        return view('product.create');
    }

    //NOTA: Todas as validações poderiam ser tratadas através de um Request customizado, fiz direto
    //no controller pra poupar tempo.
    public function store(Request $request){
        $this->validate($request,[
           'name'   =>  "required|min:3",
           'price'   =>  "required|numeric|min:0",
           'in_stock'   =>  "required|integer|min:0"
        ]);

        $new_product = new Product($request->except("_token","errors"));
        $new_product->save();

        return response()->json($new_product);
    }

    public function edit($id){
        $product = Product::find($id);
        return view('product.edit',compact('product'));
    }

    public function update(Request $request ,$id){
        $product = Product::find($id);

        $this->validate($request,[
            'name'   =>  "required|min:3",
            'price'   =>  "required|numeric|min:0",
            'in_stock'   =>  "required|integer|min:0"
        ]);

        $product->update($request->except('_token'));

        return view('product.index')->with('products',Product::all());
    }

    public function delete($id){
        $product = Product::find($id);
    }
}
