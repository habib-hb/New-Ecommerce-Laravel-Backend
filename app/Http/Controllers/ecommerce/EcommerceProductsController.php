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
            'product_default_undiscounted_price' => $request->input('product_default_undiscounted_price'),
            'product_default_discounted_price' => $request->input('product_default_discounted_price'),
            'products_in_inventory' => $request->input('products_in_inventory'),
            'product_varient' => $request->input('product_varient'),
            'serial_data' => now(),
        ];
        EcommerceProducts::create($new_product_data);

        return response()->json(['status' => 'successfully added product', 'data' => $new_product_data]);
    }












    public function show_all_products(){
        $all_products = EcommerceProducts::join('product_categories', 'product_categories.category_id', '=', 'ecommerce_products.category_id')
        ->join('product_slots', 'product_slots.slot_id', '=', 'ecommerce_products.slot_id')
        ->select('ecommerce_products.*', 'product_categories.category_id', 'product_categories.category_name' , 'product_slots.slot_id', 'product_slots.slot_name')
        ->get();

        return response()->json(['status'=> 'Showing all products', 'data' => $all_products]);
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
