<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\Product_categories;
use Illuminate\Http\Request;

class EcommerceProductCategoriesController extends Controller
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
    public function product_category_register(Request $request)
    {
        $new_product_category_data = [
           'category_name' => $request->category_name
        ];
        Product_categories::create($new_product_category_data);

        return response()->json(['status' => 'successfully added product category', 'data' => $new_product_category_data]);
    }












    public function show_all_product_categories(){
        $all_product_categories = Product_categories::all();

        return response()->json(['status'=> 'Showing all product categories', 'data' => $all_product_categories]);
    }













    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
