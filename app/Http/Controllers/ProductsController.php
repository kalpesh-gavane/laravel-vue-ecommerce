<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
     $products = Products::take(8)->get();
      
     return response()->json($products,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show( $product_id)
    {
        $product = Products::where('product_id',$product_id)->with('variants')->first();
      
        return response()->json($product,200);
    }


    public function showcart()
    {
        $cart = Cart::where('customer_id',85)->with('products')->get();
      
        return response()->json($cart,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $data = Cart::find($id);
        $data->delete();
        if($data){
            $cart = Cart::where('customer_id',85)->with('products')->get();
            return response()->json($cart,200);
        }
    }


    public function destroy_product( $id)
    {
        $data = Cart::where([['product_id',$id],['customer_id',85]])->first();
        $data->delete();
        if($data){
            $cart = Cart::where('customer_id',85)->with('products')->get();
            return response()->json($cart,200);
        }
    }


    public function addToCart($product_id,$product_cat_id,$qty)
    {

      $data_exists = Cart::where([['product_id',$product_id],['product_cat_id',$product_cat_id]])->first();

         if(!empty($data_exists)){

           $product =  Products::where([['product_id',$product_id],['product_cat_id',$product_cat_id]])->first();
            // print_r('data has');
            // exit;

          //  Session::put('customer_id',85);
            $cart = Cart::where([['product_id',$product_id],['product_cat_id',$product_cat_id]])->first();
            $cart->customer_id = 85;
            $cart->product_id = $product_id;
            $cart->qty = $qty;
            $cart->product_cat_id = $product_cat_id;
            $cart->sub_total = $product->mrp * $cart->qty;
            $cart->update();

         //   dd(session()->get('cart'));

          //  $product = Products::findOrFail($id);
           // Session::flush();

           // dd('ththfhfh');

            // $cart = Session::get('cart', []);

            // if(isset($cart[$id])) {
            //     // print_r('has data');
            //     // exit;

            //     $cart[$id]['quantity'] = 9;
    
            //     Session::put('cart', $cart);
            // } else {
            //     $cart[$id] = [
            //         "product_id" => $product->product_id,
            //         "product_name" => $product->product_name,
            //         "quantity" => 1,
            //         "mrp" => $product->mrp,
            //         "sub_total" => $product->mrp * 1,
            //         "customer_id" => 85,
            //     ];

            //     Session::put('cart', $cart);
            // }
           // session()->flush();
           // session()->put('cart', $cart);

          // $data = Session::get('cart');

            //dd($data);
            //dd($cart[$id]['quantity']);
         //   exit;

            
         }else{

        //     // print_r('new data');
        //     // exit;
            $product =  Products::where([['product_id',$product_id],['product_cat_id',$product_cat_id]])->first();

            $cart = new Cart();
            $cart->customer_id = 85;
            $cart->product_id = $product_id;
            $cart->qty = $qty;
            $cart->product_cat_id = $product_cat_id;
            $cart->sub_total = $product->mrp * $cart->qty;
            $cart->save();
    
        }

            if($cart){
                $cart = Cart::where('customer_id',85)->with('products')->get();
                return response()->json($cart,200);
            }
   
    }
}
