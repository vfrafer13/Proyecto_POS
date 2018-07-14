<?php

namespace App\Http\Controllers;

use App\Product;
use App\Http\Resources\Product as ProductResource;

class ProductController extends Controller
{
    public function show ($id)
    {
        return new ProductResource(Product::find($id));
    }

    public function index()
    {
        return ProductResource::collection(Product::with('saledetails'));
    }

    public function store(Request $request)
    {
        $product = Product::create([
            'id' => $request->id,
            'rfc' => $request->rfc,
            'businessName' => $request->businessName,
            'username' => $request->username,
            'password' => $request->password,
            'email' => $request->email,
            'discount' => $request->discount,
        ]);

        return new ProductResource($product);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->only(['title', 'description']));

        return new ProductResource($product);
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return response()->json(null, 204);
    }
}
