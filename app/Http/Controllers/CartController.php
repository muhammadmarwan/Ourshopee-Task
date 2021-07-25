<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCart;

class CartController extends Controller
{
    //for create products
     public function storeProduct(Request $request)
    {
        $products = new Product();
        $products->product_name = $request->input('productName');
        $products->product_brand = $request->input('productBrand');
        $products->save();

        return $products;
    }

    //for add and update cart
    public function addToCart($id)
    {
        $product = Product::find($id);
        $checkCart = ProductCart::where('product_id',$id)->count();

        if($checkCart==0)
        {
            $addToCart = new  ProductCart();
            $addToCart->product_id = $product->id;
            $addToCart->quantity = 1;
            $addToCart->save();

        }else{

            $increase = ProductCart::where('product_id',$id)
            ->increment('quantity',1);
        }
        return 'Product Added!';
    }

    //for list products on cart
    public function listCartProducts()
    {
        $productCart = ProductCart::leftjoin('products','products.id','product_carts.product_id')
        ->select('products.product_name as productName','products.product_brand as brand','product_carts.quantity')
        ->get();

        return $productCart;
    }
}
