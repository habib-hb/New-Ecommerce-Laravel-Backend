<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\EcommerceProducts;
use Illuminate\Http\Request;

class EcommerceProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function product_register(Request $request)
    {
        $new_product_data = [
            'category_id' => $request->input('category_id'),
            'slot_id' => $request->input('slot_id'),
            'product_name' => $request->input('product_name'),
            'product_undiscounted_price' => $request->input('product_undiscounted_price'),
            'product_discounted_price' => $request->input('product_discounted_price'),
            'products_in_inventory' => $request->input('products_in_inventory'),
            'product_varient' => $request->input('product_varient'),
            'serial_data' => now(),
        ];
        EcommerceProducts::create($new_product_data);

        return response()->json(['status' => 'successfully added product', 'data' => $new_product_data]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
