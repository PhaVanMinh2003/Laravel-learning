<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    //hiển thijdanh sách sản phẩm
    public function index(){
        $products=Product::all();
        return view('products.index',compact('products'));
    }
    // hiển thị form tạo sản phẩm
    public function create(){
        return view('product.create');
    }
    // lưu sản phẩm mới vào database
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
                        ->with('success', 'Product created successfully.');
    }
    // Hiển thị form sửa sản phẩm
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Cập nhật thông tin sản phẩm
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
                        ->with('success', 'Product updated successfully.');
    }

    // Xóa sản phẩm
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
                        ->with('success', 'Product deleted successfully.');
    }
}
