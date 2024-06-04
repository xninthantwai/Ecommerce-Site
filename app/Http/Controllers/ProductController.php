<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('products.index', [
            'products' => $data
        ]);
    }

    public function view($id){

        $product = Product::findOrFail($id);
        
        return view('products.view',[
            'product' => $product
        ]);
    }

    public function add(){
        $product = Product::all();

        return view('products.add',[
            'product' => $product
        ]);
    }

    public function create()
    {
        

        $validator = validator(request()->all(), [
            'product_name' => 'required',
            'product_description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);

            if($validator->fails()) {
            return back()->withErrors($validator);
            }   

            $image = request()->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('/img'),$imageName);

        $product = new Product();
        $product->product_name = request()->product_name;
        $product->product_description = request()->product_description;
        $product->price = request()->price;
        $product->image = $imageName;
        $product->save();

        return view('products.view',[
            'product' => $product
        ])->with('info', 'Product Add');
    }

    public function delete($id){
        $product = Product::find($id);
        $product->delete();

        return redirect('/products')->with('info', 'Product Deleted');
    }
}
