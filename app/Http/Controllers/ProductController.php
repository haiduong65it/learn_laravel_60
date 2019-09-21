<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function get_Create(){
    	return view('admin.products.product_create');
    }

    public function post_Create(Request $request){
    	$product_name = $request->product_name;
        $price = $request->price;
        $description = $request->description;
        $create_at = date('Y-m-d h:i:s');
        $image = 'default.png';

        if ($request->hasfile('image')){
            $file = $request->image; 
            $image = $file->getClientOriginalName();
            $file->move('admin/uploads/products', $image);
        }
        

        DB::insert('insert into products (name, image, price, created_at, description) values (?, ?, ?, ?, ?)', [$product_name, $image, $price, $create_at, $description]);
        $products = DB::table('products')->get();
        return view('admin/products/product_list', ['products'=>$products]);
    }

    public function get_Edit($id){
        $product = DB::table('products')->find($id);
    	return view('admin/products/product_edit', ['product'=>$product]);
    }

    public function post_Edit(Request $request, $id){
        $product = DB::table('products')->find($id);

        $product_name = $request->product_name;
        $price = $request->price;
        $description = $request->description;
        $updated_at = date('Y-m-d h:i:s');

        $image = $product->image;

        if ($request->hasfile('image')){
            $file = $request->image; 
            $image = $file->getClientOriginalName();
            $file->move('admin/uploads/products', $image);
        }

        DB::update('update products set name = ?, image = ?, price = ?, updated_at = ?, description = ? where id = ?', [$product_name, $image, $price, $updated_at, $description, $id]);
        $products = DB::table('products')->get();
        return view('admin/products/product_list', ['products'=>$products]);
    }

    public function List_Product(){
        $products = DB::table('products')->get();
    	return view('admin/products/product_list', ['products'=>$products]);
    }

    public function Delete_Product($id){
        DB::delete('delete from products where id = ?', [$id]);
        $products = DB::table('products')->get();
        return view('admin/products/product_list', ['products'=>$products]);
    }
}
