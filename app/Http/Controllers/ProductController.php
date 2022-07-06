<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Pagination\Paginator;

class ProductController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add()
    {
        $category=Category::all();
        return view('product.add',['product'=>$category]);
    }
    public $timestamps = false;


    public function getAll()
    {
        $listeproduct=Product::all();

        return view('product.list',['listeproduct'=>$listeproduct]);
    }

    public function edit($id)
    {
        $product=Product::find($id);
        return view('product.edit',['product'=>$product]);
    }

    public function update(Request $request)
    {
        $product= Product::find($request-> id);
        $product->libelle=$request->libelle;
        $product->stock=$request->stock;
        $product->category=$request->category;
        

        $result= $product->save();
        return redirect('/product/getAll');

    }

    public function delete($id)
    {
        $product=Product::find($id);
        if($product!=null)
        {
            $product->delete();
        }
        return redirect('/product/getAll');

    }

    public function persist(Request $request)
    {
          $product=new Product();
          $product->libelle=$request->libelle;
          $product->stock=$request->stock;
          $product->category=$request->category;
         


          $result= $product->save();
          $category=Category::all();



        return view('product.add',['confirmation'=>$result,'category'=>$category]);
    }
}
