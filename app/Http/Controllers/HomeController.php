<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\User;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /*public function __construct()
    {
        $this->middleware('Auth') ->except("product");
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function product() {
        $newProducts = Product::orderBy('id','desc')->take(4)->get();
        $Products = Product::All();
        return view('index')->with([
            "newProducts"  => $newProducts,
            "Products"  => $Products,
        ]);
    }

    public function addcart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user = auth()->user();
            $product = Product::find($id);
            $cart = new cart;
            $cart->name = $user->name;
            $cart->address = $user->address;
            $cart->phone = $user->phone;
            $cart->product_name = $product->name;
            $cart->image = $product->image;
            $cart->price = $product->price;
            $cart->quantity = $request->quantity;
            $cart->subtotal = $cart->price * $cart->quantity;
            $count1 = cart::where('name', $user->name)->count();
            $cart->save();
            return redirect()->back()->withMessage('Product add Successfully');
        }else
        {
            return redirect('login');
        }
    }

    public function showcart() {
        $user = auth()->user();
        $cart = cart::where('name', $user->name)->get();
        return view('wishlist', compact('cart'));
    }

    public function deletecart($id)
    {
        $data = cart::find($id);
        $data->delete();
        return redirect()->back()->withMessage('Product deleted Successfully');
    }

    /*public function confirmOrder(Request $request) {
        $user = auth()->user();
        $name = $user->name;
        $phone = $user->phone;
        $address = $user->address;
        ($value ?? [] as $item)
        foreach($request->productname as $key=>$productnames)
        {
            $order = new Order;
            $order->product_name = $request->productname[$key];
            $order->quantity = $request->productquantity[$key];
            $order->price = $request->productprice[$key];
            $order->name = $user->name;
            $order->phone = $phone;
            $order->address = $address;
            $order->status = 'not delivered';
            $order->paid   = 'not paid';
            $order->save();
        }
        DB::table('carts')->where('phone', $phone)->delete();
        return redirect()->back();
    }*/

    public function confirmOrder(Request $request) {
        if(auth()->check()){
            $user = auth()->user();
            $name = $user->name;
            $phone = $user->phone;
            $address = $user->address;
            $cart = cart::where('name', $user->name)->get();

            return view('wishlist', compact('cart'));
            /*if(!empty($request->productname) && !empty($request->productquantity) && !empty($request->productprice)){
                try{
                    foreach($request->productname as $key=>$productnames)
                    {
                        $order = new Order;
                        $order->product_name = $request->productname[$key];
                        $order->quantity = $request->productquantity[$key];
                        $order->price = $request->productprice[$key];
                        $order->name = $user->name;
                        $order->phone = $phone;
                        $order->address = $address;
                        $order->status = 'not delivered';
                        $order->paid   = 'not paid';
                        $order->save();
                    }
                    DB::table('carts')->where('phone', $phone)->delete();
                    return redirect()->back()->with("status","Order Confirmed");
                }catch(Exception $e){
                    return redirect()->back()->with("status","Error: ".$e->getMessage());
                }
            }else{
                return redirect()->back()->with("status","Invalid Data");
            }*/
        }else{
            return redirect()->route("login")->with("status","Please login first");
        }
    }
     
    public function search (){
        $search=$_GET['query'];
        $products=Product::where('name','LIKE','%'.$search.'%')->with('category')->get();

        return view ('search',compact('products'));
    }

}

