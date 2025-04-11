<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\Product_slots;
use Illuminate\Http\Request;

class EcommerceProductSlotsController extends Controller
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
    public function product_slot_register(Request $request)
    {
        $new_product_slot_data = [
           'slot_name' => $request->slot_name
        ];
        Product_slots::create($new_product_slot_data);

        return response()->json(['status' => 'successfully added product slot', 'data' => $new_product_slot_data]);
    }












    public function show_all_product_slots()
    {
        $all_product_slots = Product_slots::all();

        return response()->json(['status'=> 'Showing all product slots', 'data' => $all_product_slots]);
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
