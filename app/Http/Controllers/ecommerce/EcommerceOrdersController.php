<?php

namespace App\Http\Controllers\ecommerce;

use App\Http\Controllers\Controller;
use App\Models\ecommerce\Product_orders;
use Illuminate\Http\Request;

class EcommerceOrdersController extends Controller
{


    public function product_order_register(Request $request)
    {
        $new_product_order_data = [
            "product_id" => $request->product_id,
            "user_id" => $request->user_id,
            "ordered_product_name" => $request->ordered_product_name,
            "ordered_product_discounted_price" => $request->ordered_product_discounted_price,
            "ordered_product_undiscounted_price" => $request->ordered_product_undiscounted_price,
            "ordered_product_category" => $request->ordered_product_category,
            "ordered_product_slot" => $request->ordered_product_slot,
            "ordered_product_general_varient_name" => $request->ordered_product_general_varient_name,
            "ordered_product_color_varient_name" => $request->ordered_product_color_varient_name,
            "ordered_product_color_varient_code" => $request->ordered_product_color_varient_code,
        ];
        Product_orders::create($new_product_order_data);

        return response()->json(['status' => 'successfully added product order', 'data' => $new_product_order_data]);
    }

}
