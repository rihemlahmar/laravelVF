<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class cat extends Controller
{

    
    public function showcat() {
        $products = Product::latest()->paginate(5);
        return view('categories')->with([
            'products'      => $products,
        ]);
    }

    
        public function show($id) {
            $product = Product::find($id);
            return view('item-details')->with([
                "product" => $product,
            ]);
        }

        public function getProductByCategory($id)
        {
            if(Category::where('id', $id)->exists())
            {
                $category = Category::where('id', $id)->first();
                $products = Product::where('cat_name', $category->id)->get();
                return view('parts.productByCategories')->with([
                    'category' => $category,
                    'products' => $products
                ]);
            }else{
                return redirect('/');
            }
        }

       /* public function sort($id)
    {
        if(Request::get('sort')=='price_asc')
        {
            $products = Product::where('id', $id)
            ->orderBy('price', 'asc')
            ->get();

            
        }elseif(Request::get('sort')=='price_desc')
        {
            $products = Product::where('id', $id)
            ->orderBy('price', 'desc')
            ->get();
            
        }
        $products = Product::where('id', $id);
        return view('categories')
        ->with( "products" , $products)
        
        ->with  ("id",$id);

    }*/
}

