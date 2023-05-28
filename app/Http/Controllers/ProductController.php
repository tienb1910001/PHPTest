<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::paginate(10);
        return view(
            'products.index',
            compact("product")
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'code' => 'required',
                'name' => 'required',
                'price' => 'required',
                'image' => 'url',
            ],
            [
                'code.required' => 'Mã không được để trống',
                'name.required' => 'Tên không được để trống',
                'price.required' => 'Giá không được để trống',
                'image.url' => 'Hình ảnh là một đường dẫn',

            ]
        );
        $product = new Product();
        $product->code = $request->code;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view(
            'products.show',
            compact("product")

        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view(
            'products.edit',
            compact("product")
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::find($id);
        $product->code = $request->code;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->image = $request->image;
        $product->save();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('products.index');
    }
}
