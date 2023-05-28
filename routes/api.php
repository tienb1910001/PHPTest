<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Product;
use App\Http\Resources\Product as ProductResource;

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('products/min={min}&max={max}', function ($min, $max) {
    $products = Product::whereBetween('price', [$min, $max])->get();
    $arr = [
        'status' => true,
        'message' => "Danh sách sản phẩm",
        'data' => ProductResource::collection($products)
    ];
    return response()->json($arr, 200);
})->name('get');

Route::resource('products', ApiController::class);
